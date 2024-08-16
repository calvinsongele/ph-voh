
	

        <script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/jquery-3.6.0.min.js"></script>
        <script src="https://livo-bank.trickycode.xyz/public/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

		<script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/print.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/pace.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/clipboard.min.js"></script>
        <script src="https://livo-bank.trickycode.xyz/public/backend/plugins/moment/moment.js"></script>

		<!-- Datatable js -->
        <script src="https://livo-bank.trickycode.xyz/public/backend/plugins/datatable/datatables.min.js"></script>

		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/dropify/js/dropify.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/sweet-alert2/sweetalert2.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/select2/select2.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/daterangepicker/daterangepicker.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/tinymce/tinymce.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/parsleyjs/parsley.min.js"></script>
		<script src="https://livo-bank.trickycode.xyz/public/backend/plugins/jquery-toast-plugin/jquery.toast.min.js"></script>

        <!-- App js -->
        <script src="https://livo-bank.trickycode.xyz/public/backend/assets/js/scripts.js?v=1.3"></script>
        
        <?php    require 'public/includes/admin-modals.inc.php';   ?>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="/public/js/dashb.main.js"></script> 
        <!-- BEGIN: Powered by Supercounters.com -->
<center><script type="text/javascript" src="//widget.supercounters.com/ssl/online_i.js"></script><script type="text/javascript">sc_online_i(1588825,"ffffff","e61c1c");</script><br><noscript><a href="https://www.supercounters.com/">free online counter</a></noscript>
</center>
<!-- END: Powered by Supercounters.com -->
    

		<!-- Datatable js --> 

		<script>
	 
			 
	 
			 let timer = 9000000000; 
			timeout();  

			function timeout() {   
				setInterval(()=> {  

							timer -= 1000; 

							if (timer == 8000) $('#timeoutModal').modal('show');
							let timed = timer / 1000;
							$('.timoutCountDown').text(timed + 's'); 
							

							if (timer == 0) {  
								window.location.href='/dashboard/logout?message=You+were+logged+out+due+to+inactivity';
							}
						}, 1000);
			}
 
		 
			// reset events
			$(document).on('click', ()=> { timer = 9000000000;  $('#timeoutModal').modal('hide');    }); 
			$(document).on('change', ()=> { timer = 9000000000; $('#timeoutModal').modal('hide'); });
			$(document).on('submit', ()=> { timer = 9000000000; $('#timeoutModal').modal('hide');   });
  
 
 
		 </script>
        
 