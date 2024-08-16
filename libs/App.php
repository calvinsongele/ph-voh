<?php
#[AllowDynamicProperties]
class App {

	private $_url = null;
	private $_controller = null;

	private $_controllerPath = 'controllers/';
	private $_modelPath = 'model/'; 
	private $_errorFile = 'err.php';
	private $_defaultFile = 'index.php';
	//these classes are excluded from undergoing thru the example.com/class/classmethod/method-param
	// automatically the second url query becomes a param
	private $excluded_classes = array( 'blog', ''); 
	// the methods are excluded from  becoming a param automatically even if they exists in that excluded class
	private $excluded_methods = array('logout',   '');

    /**
     * Starts the App
     * 
     * @return boolean
     */
	public function init() {
		
		// Sets the protected $_url
		$this->_getUrl();

        // Load the default controller if no URL is set
        // eg: Visit http://localhost it loads Default Controller
		if (empty($this->_url[0])) {
			$this->_loadDefaultController();
			return false;
		}		
		
		$this->_loadExistingController();

		$this->_callControllerMethod();
			
	}
    /**
     * (Optional) Set a custom path to controllers
     * @param string $path
     */
    public function setControllerPath($path)
    {
        $this->_controllerPath = trim($path, '/') . '/';
    }
    
    /**
     * (Optional) Set a custom path to models
     * @param string $path
     */
    public function setModelPath($path)
    {
        $this->_modelPath = trim($path, '/') . '/';
    }
    
    /**
     * (Optional) Set a custom path to the error file
     * @param string $path Use the file name of your controller, eg: error.php
     */
    public function setErrorFile($path)
    {
        $this->_errorFile = trim($path, '/');
    }

    /**
     * (Optional) Set a custom path to the default file
     * @param string $path Use the file name of your controller, eg: index.php
     */
    public function setDefaultFile($path)
    {
        $this->_defaultFile = trim($path, '/');
    }

    /**
     * Fetches the $_GET from 'url'
     */
	private function _getUrl()
	{
		$this->_url = isset($_GET['url']) ? $_GET['url'] : null;
		$this->_url = str_replace('-', '', $this->_url ?? '');
		$this->_url = filter_var($this->_url, FILTER_SANITIZE_URL);
		$this->_url = rtrim($this->_url, '/');
		$this->_url = explode('/', $this->_url);
	}

    /**
     * This loads if there is no GET parameter passed
     */
	private function _loadDefaultController()
	{
		require $this->_controllerPath . $this->_defaultFile;
		$this->_controller = new Index();
		$this->_controller->loadModel("index");
		$this->_controller->index();

	}

    /**
     * Load an existing controller if there IS a GET parameter passed
     * 
     * @return boolean|string
     */
	private function _loadExistingController()
	{
		$file = $this->_controllerPath . $this->_url[0] . '.php';
		if (file_exists($file)) {
			require $file;
			$this->_controller = new $this->_url[0];
			$this->_controller->loadModel($this->_url[0]);
		} else {
			$this->_error();
			//echo 1;
		}

	}

    /**
     * If a method is passed in the GET url paremter
     * 
     *  http://localhost/controller/method/(param)/(param)/(param)
     *  url[0] = Controller
     *  url[1] = Method
     *  url[2] = Param
     *  url[3] = Param
     *  url[4] = Param
     */
	private function _callControllerMethod()
	{
		$length = count($this->_url);
		 
		//print_r($this->_url); //Array ( [0] => dashboard [1] => P8w ) Array ( [0] => dashboard [1] => P8w )
		// Make sure the method we are calling exists
		if ($length > 1) {
		    
		        
		   /********added**************/
		    if ( in_array($this->_url[0],$this->excluded_classes) ) {  
		        if (empty($this->_url[1])) { $this->_error(); return; } 
		         
		        if (in_array($this->_url[1], $this->excluded_methods)) { //methods to be exluded from going to index
			        $this->_controller->{$this->_url[1]}( $this->_url[2]??null, $this->_url[3]??null );
			        return;
		        } 
		        //all methods redirected to index method
			    $this->_controller->{'index'}($this->_url[1], $this->_url[2] ?? null );
			    return;
		    }
		    /*************88added******************/
		    
			if (!method_exists($this->_controller, $this->_url[1])) {
			    
			    
				$this->_error();
			}
		}
		
		// Determine what to load
		switch ($length) {
			case 5:
				//Controller->Method(Param1, Param2, Param3)
				$this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3], $this->_url[4]);
				break;
			
			case 4:
				//Controller->Method(Param1, Param2)
				$this->_controller->{$this->_url[1]}($this->_url[2], $this->_url[3]);
				break;
			
			case 3:
				//Controller->Method(Param1, Param2)
				$this->_controller->{$this->_url[1]}($this->_url[2]);
				break;
			
			case 2:
				//Controller->Method(Param1, Param2)
				$this->_controller->{$this->_url[1]}();
				break;
			
			default:
				$this->_controller->index();
				break;
		}
		
	}
	
    /**
     * Display an error page if nothing exists
     * 
     * @return boolean
     */
	private function _error() {
	    header("HTTP/1.1 404 Not Found");
		require $this->_controllerPath . $this->_errorFile;
		$this->_controller = new Err();
		$this->_controller->index();
		exit;
		//return false;
	}

}