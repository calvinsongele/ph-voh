
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include ROOT . 'views/admin/includes/header.php'; ?>
    </head>

    <body class="sb-nav-fixed">
		<!-- Main Modal -->
		  
		<!-- Preloader area start -->
		<!--<div id="preloader"></div>-->
		<!-- Preloader area end -->

		<?php require ROOT . 'views/admin/includes/head2.php'; ?>

		<div id="layoutSidenav" class="container-fluid d-flex align-items-stretch">
		    
		  <?php require ROOT . 'views/admin/includes/sidebar.php'; ?>

			<div id="layoutSidenav_content">

				<main>
				 
		 
	<div class="card mb-4">
		<div class="card-header">
			Manage your Blog <a href='/admin/blog/new' class='badge btn_blend'><i class='fa fa-pencil'></i> New Post</a>
			 
		</div>
		
        <div class="col-sm-4">
            <input class='searchparam' placeholder='Search here' value='<?php echo $_GET['search'] ?? '' ;?>' title='Search with real names or stage name' ><button class='searchceleb'  title='Search'> <i class='fa fa-search'></i> </button>					
        </div>
		<div class="card-body">
			<div class="table-responsive">
				<?php require 'public/includes/myarticles.inc.php'; ?>
			</div>
			
				
				<div class="clearfix <?php echo empty($this->blogs) ? "hidden" : ""; ?>">
                    <ul class="pagination table-responsive">
                        <li class="page-item">
                            <?php
                                $pre_num = isset($this->currentpage) ? $this->currentpage - 1 : null;
                                if ($pre_num <= 0) {
                                    $pre_num = 1;
                                }
                            ?>
                            <a href='/admin/articles/all/<?php echo $pre_num; ?>' class="page-link">Previous</a>
                        </li>
                        <?php
                            $total = 12;
                            $upperLimt = ceil($this->numrows / $total);
                            $last = isset($this->currentpage) ? $this->currentpage : 1;
                            $next = isset($this->currentpage) ? $this->currentpage + 1 : 2 ;
                            $notAllowed = (($upperLimt == $last) || ($upperLimt < $last)) ? "notAllowed" : null;
                               
                        for($currentPage = 1; $currentPage <= ceil($this->numrows / $total); $currentPage++){
                            echo"
                            <li class='page-item'><a href='/admin/articles/all/$currentPage' class='page-link'> $currentPage </a></li>";
                        }?>
                        
                        <li class="page-item"><a href='/admin/articles/all/<?php echo $next; ?>' class="page-link <?php echo $notAllowed; ?>">Next</a></li>
                    </ul>
                </div>
		</div>
	</div>
				</main>

			</div>	<!--End layoutSidenav_content-->
		</div> <!--End layoutSidenav-->

	    <?php require ROOT . 'views/admin/includes/footer.php'; ?>

	<script>
  
	$(function(){ 
		
		$('.searchceleb').click(function(e) {
		    const searchparam = $('.searchparam').val();
		    window.location.href='/admin/articles/all?search=' + searchparam;
		    e.preventDefault();
		});
		 $(document).on('keypress',function(e) {
		    const searchparam = $('.searchparam').val();
            if(e.which == 13) {
                if ( searchparam != '')
		    window.location.href='/admin/articles/all?search=' + searchparam;
            }
        });

		$("[data-toggle='tooltip']").tooltip();
		
	
	let boxvalues = [];

    // Function to update boxvalues array
    function updateBoxValues() {
        boxvalues = [];
        $('input[name=massdel]:checked').each(function() {
            boxvalues.push($(this).val());
        });
    }
    
    // Event handler for checkbox change
    $('input[name=massdel]').change(function() {
        if ($(this).is(':checked')) {
            // Checkbox is checked, add its value to boxvalues
            boxvalues.push($(this).val());
        } else {
            // Checkbox is unchecked, remove its value from boxvalues
            let valueToRemove = $(this).val();
            boxvalues = boxvalues.filter(function(value) {
                return value !== valueToRemove;
            });
        }
        console.log(boxvalues);
    });
    
    // Event handler for mass delete button
    $('.massdelete').click(function(e) {  
        e.preventDefault();
        updateBoxValues(); // Update boxvalues array before performing mass delete
        let formdata = new FormData();
        formdata.append('ids', boxvalues);
        if (confirm("Sure to delete multiple data?")) {
            const data = _data(formdata, 'massdelete');
            alert(data['msg'])
        }
        //console.log(boxvalues); // Log the values before mass deletion
        // Perform mass deletion here
    });
    
    $('.checkall').change(function() {
        if ($(this).is(':checked')) {
            // Checkbox is checked, add its value to boxvalues
            $('input[name=massdel]').attr('checked', true);
            $('input[name=massdelx]').attr('checked', true);
        } else {
            // Checkbox is unchecked, remove its value from boxvalues
           $('input[name=massdel]').attr('checked', false);
        }
        updateBoxValues(); 
        console.log(boxvalues);
    });

        

	});
</script>


	 <!-- Custom JS -->
	 
    </body>
</html>