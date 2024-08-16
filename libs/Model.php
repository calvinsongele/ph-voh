<?php
#[AllowDynamicProperties]
class Model extends Database {
    //CRQ000008290495
    protected $api_key = 'cc';       

    function __construct()
    {
        $this->connection = new Database();
	    set_time_limit(1080); 

        //run queries
    }
    
    /////////////////////////////automatic success or  error msges///////////////////////////////////////

    protected function _ms($error = false, string $ms = '', string $third = '' ) {
      $newms = $error == false ? "Success" : "Something went wrong";
      
      return json_encode(array(
        "error"=> $error == false ? "false" : "true",
        "msg"=> empty($ms) ? $newms : $ms,
        "cl"=> $third //for anything
      ));
      
    }
	/**
	 * @return array 0=rowcount, 1=data
	 */
	protected function _get(string $table, string $where = '', array $values = [], bool $fetchall = true, string $orderby = '', string $del_rule = '', string $distinct = ''  ): array {
		$substr = substr($where, 0, 1);
		if ($substr == '(') { // the first char is a (
			$where = $where;
		} else $where = $this->_where($where, 'and', '', $del_rule);
		
		$star_distict = '*';
		if(!empty($distinct))  $star_distict = "DISTINCT $distinct";

		$countvalues = count($values);
		$sql = $countvalues == 0 ? "SELECT $star_distict FROM $table $orderby" : "SELECT $star_distict FROM $table WHERE $where $orderby";		
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute( $values );
        return $fetchall ? [$stmt->rowCount(), $stmt->fetchAll()] : [$stmt->rowCount(), $stmt->fetch()];
	}
    /**
     * @return string value of action ie sum of columns
     */
	protected function _getmore(string $table, string $action, string $where = '', array $values = [] ):string {
		
		$sql = empty($where) ? "SELECT $action as x1 FROM $table" : "SELECT $action as x1 FROM $table WHERE {$this->_where($where)} ";		
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute( $values );
		return $stmt->fetch()['x1'] ?? '0';
	}
	
	/**
	 * @return string json_encoded string
	 */
	protected function _insert(string $table, string $columns = '', array $values = [] ):string {
	
		$sql = "INSERT INTO $table ($columns) VALUES ({$this->_where($columns, ',', '?')}) ";		
		//echo $sql;die;
		$stmt = $this->connection()->prepare($sql);
		$eq = ($stmt->execute( $values ));
		return $this->_ms($eq ? false : true);		
	}
    
    /**
     * @return string js-encoded feedback message
     */
	protected function _update(string $table, string $columns = '', string $where = '', array $values = [] ):string {
		
		$sql = "UPDATE $table SET {$this->_where($columns, ',')} WHERE {$this->_where($where)}";	
		$stmt = $this->connection()->prepare($sql);
		$eq = ($stmt->execute( $values ));
		return $this->_ms($eq ? false : true);	
	}

    /**
     * @return string js-encoded feedback message
     */
	protected function _delete(string $table, string $where, $values = []):string {
	
		$sql = "DELETE FROM $table WHERE {$this->_where($where)}";
		$stmt = $this->connection()->prepare($sql);
		$eq = ($stmt->execute($values ));
		return $this->_ms($eq ? false : true);
	}
	/**
	 * @param string $action  either create, delete or drop
     * 
     * @return mixed js-encoded feedback message or bool   
	 */
	protected function _tables($tablename, $action = 'create') {
		if ($action == 'delete') {
			$sql = "DELETE FROM $tablename";
			$stmt = $this->connection()->prepare($sql);
			$eq = ($stmt->execute([ ]));
			return $this->_ms($eq);
		} else if ($action == 'drop') {			
			$sql = "DROP TABLE IF EXISTS $tablename";
			$stmt = $this->connection()->prepare($sql);
			$eq = ($stmt->execute([ ]));
			return $this->_ms($eq);
		} else if ($action == 'create') { //a temporary sql, that probably is deleted before the script is deleted
			$sql = "CREATE TABLE $tablename (id int primary key auto_increment, val1 int, val2 varchar(20), val3 varchar(20), val4 varchar(20), val5 varchar(20) ) ";
			$stmt = $this->connection()->prepare($sql);
			if ($stmt->execute([ ])) return true;
			else return false;
			
		} else if ($action == 'complete_sql') { //might be permanent creation of table
			$sql = "$tablename";
			$stmt = $this->connection()->prepare($sql);
			if ($stmt->execute([ ])) return true;
			else return false;
		}
		return false;
	}

  /**
   * 
   * @param  string 
   * @return string perfectly fitting for needed  where  clause
   */
	private function _where($where, $del = 'and', $placeholders = '', $delrule = '') {
		$exp = explode(',', $where);

		
		if (!empty($delrule)) {
			$delall = explode(',', $delrule);
		}
		$where1 = '';
		$i = 0;
		$j = count($exp);
		foreach ($exp as $ex ) {

			if ( ($j - 1) != $i )
				if (!empty($delrule)) {
					$del = $delall[$i];
				}
			$_e1 = explode(' ', trim($ex));
			if (isset($_e1[1]) && (!empty($_e1[1])) ) {
				$ex = $_e1[0];
				$s = $_e1[1];
			} else $s = '=';

			if (!empty( $placeholders)) {
				if ( ($j - 1) == $i ) $where1 .= '? ';
				else $where1 .= "?, ";
			} else {
				if ( ($j - 1) == $i ) $where1 .= $ex . " $s ? ";
				else $where1 .= $ex . " $s ? $del ";
			}
			$i++;
		}
		return $where1;
	}
 

    protected function _gettables() {
		$sql = "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='{$this->dbName}'  ";
		$stmt = $this->connection()->prepare($sql);
		$stmt->execute([]);
		return $stmt->fetchAll();
	}
	protected function _columns($table) {
		return $this->_get($table)[1];
	} 
  
    public function _company() { 
	//	return $this->_get('company left join images on image_ID =c_logo', '',[], false)[1];
		return $this->_get('company ', '',[], false)[1];
	}
	public function me($id_email = '') { 
	    
	    if (empty($id_email))  {
		    //$data = $this->_get('users left join images on user_dp = image_ID ', 'user_ID', [ Session::get('userid') ], false )[1];
		    if (Session::get('userid') == null ) return [];
		    $data = $this->_get('users ', 'user_ID', [ Session::get('userid') ], false )[1];
		    $data['userdp'] = $this->profileImg( $data['user_dp'] ); 
		    $data['image_name'] =  $data['user_dp'] ; 
		    //$data['cover'] = $this->profileCover( $this->_get('images', 'image_ID', [$data['user_cover_pic']], false)[1]['image_name'] ?? '' ); 
		    return $data;
	    }
	    
		return $this->_get('users  ', 'user_ID, user_email', [ $id_email, $id_email ], false, '', 'or' )[1];
	}
	protected function profileImg($img) {
        if(!empty($img)) $data = "https://assets.example.com/files/$img";
	    else $data = "/public/assets/uploads/download.jpeg";
	    return $data;
	}
	protected function profileCover($img) {
        if(!empty($img)) $data = "https://assets.example.com/files/$img";
	    else $data = "/public/assets/uploads/default-cover.jpg";
	    return $data;
	}
	 

    /**
     * @param string message required
     * @return void
     */
    protected function log(String $message, String $type = 'Other') {  
        $this->_insert('logs', 'l_message, l_by, l_type, l_date', [$message, Session::get('userid'), $type, time() ]);
    } 
    public function content() {
        $content = $this->_get('contents  ', '',[], true )[1];
        $output = [];
        foreach ($content as $row) {
            $body = $row['cont_body'];
           $output[$row['cont_given_id']] = ['body'=> $body, 'edit'=>$row['cont_body'], 'title'=>$row['cont_title']  ];
        } 
        return $output;
    }
      
     
    
    //////////////////////////////////////
	
    
    
}