//login & //signup 
    $('#loginform').submit(function(e){
        e.preventDefault();
        const formdata = new FormData(this);
        const data = _data(formdata, 'process-login', 'submit_btn');
        $('.feedback').html(`<p>${data['msg']}</p>`);
        $('.feedback').addClass(data['error']=='true' ? 'alert m-2 alert-danger': 'alert m-2 alert-success'); 
    }); 
    $('#signupform').submit(function(e){
        e.preventDefault();
        const formdata = new FormData(this);
        const data = _data(formdata, 'process-signup', 'submit_btn');
        $('.feedback').html(`<p>${data['msg']}</p>`);
        $('.feedback').addClass(data['error']=='true' ? 'alert m-2 alert-danger': 'alert m-2 alert-success'); 
    }); 
    $('#forgotpasswordform').submit(function(e){
        e.preventDefault();
        const formdata = new FormData(this);
        const data = _data(formdata, 'forgotpasswordaction', 'submit_btn');
        $('.info').html(`<p>${data['msg']}</p>`);
        $('.info').addClass(data['error']=='true' ? 'alert m-2 alert-danger': 'alert m-2 alert-success'); 
    });
    $('#passwordresetform').submit(function(e){
        e.preventDefault();
        const formdata = new FormData(this);
        const data = _data(formdata, 'passwordresetaction', 'submit_btn');
        $('.info').html(`<p>${data['msg']}</p>`);
        $('.info').addClass(data['error']=='true' ? 'alert m-2 alert-danger': 'alert m-2 alert-success'); 
    });
    $('#frmSubscribee').submit(function(e){
        e.preventDefault();
        const formdata = new FormData(this);
        const data = _data(formdata, 'subscribe', 'submit_btn');
        $('.info').html(`<p>${data['msg']}</p>`);
        $('.info').addClass(data['error']=='true' ? 'alert m-2 alert-danger': 'alert m-2 alert-success'); 
    });
    let type = 'text';
    $('.eye').click(function(){
        $('.pass').attr('type', type);
        type = (type=='password') ? 'text' : 'password';
        
        if (type=='password') 
            $('.eye').html("<i class='fa ri-eye-off-line'></i>");
        else $('.eye').html("<i class='ri-eye-line'></i>");
        
    }); 
 
	$('#contactform').submit(function(e) {
	    
        e.preventDefault();
        const formdata = new FormData(this);
        const data = _data(formdata, 'contact-us', 'submit_btn');
        $('.feedback').html(`<p>${data['msg']}</p>`);
        
        if (data['error']=='false' ) $('#contactform').trigger('reset');
        $('.feedback').addClass(data['error']=='true' ? 'alert m-2 alert-danger': 'alert m-2 alert-success'); 
	});
	
	$('#payInvoice').submit(function(e) {
	    
        e.preventDefault();
        const formdata = new FormData(this);
        const data = _data(formdata, 'payInvoice', 'submit_btn');
        $('.feedback').html(`<p>${data['msg']}</p>`);
        
        if (data['error']=='false' ) $('#payInvoice').trigger('reset');
        $('.feedback').addClass(data['error']=='true' ? 'alert m-2 alert-danger': 'alert m-2 alert-success'); 
	});
	
	$("input[name='paywith']").change(function() {
	    
	    if ($(this).val() == 'Mizizi')
	        if (confirm( "You will need to login to pay with MiziziPay balance"  )) {
	            location.href='/login?pid=' + $("input[name='pid']").val();  
	        }
	        
	   $("input[value='Mpesa']").attr('checked', true);
	       
	});


csrf();
function csrf() {
    
	let formdata = new FormData();  
    let resp = _data(formdata, 'get_csrf' );
    $("input[name='csrf']").val(resp['msg']);
}
$("table table:not('.table')").attr('class', 'table table-responsive table-stripped table-dark');
 //$('table').attr('class', 'table table-responsive table-stripped table-dark');
 //$('#table-reform').removeClass('table-dark');
    
 function _data(form_data, url = '', cl = 'submit_btn1' ) {
     
        const list = ['onlyonline', 'new'];
         
        const originalval = $('.'+cl).val();
         
        let data;
        $.ajax({
            url : '/myapp/' + url,
            type : 'post',
            async: false,
            contentType : false,
            processData : false,
            beforeSend: function() {
                $('.'+ cl).val('Loading...'); 
            },
            data : form_data,
            dataType: 'json', 
            success : function(data1) {
                data = data1;     
                $('.'+ cl).val(originalval);
            }
            // error: function (e) {
            //     console.log(e);
            //   // alert("An error occurred. Check your internet connection")
            // }
        });

        return data;
    } 
 
 function confirmswal(id, url, funcCallBack = '') {
	let formdata = new FormData(); 
    formdata.append('id', id);
    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this action!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, continue!"
    }).then((result) => {
      if (result.isConfirmed) {
         let resp = _data(formdata, url );
         let iconn = (resp['error'] == 'true') ? 'error' : 'success';
         fireswal({msg:resp['msg'], icon:iconn }); 
         if (typeof funcCallBack === 'function') {
             funcCallBack();
         }
      }
    });
}
function fireswal({msg, error = 'false', title = '', icon='success', loading=false}) {
    if (typeof error !== 'undefined') icon = icon;

    Swal.fire({
            title: title,
            text: msg,
            timer: 3000,  
            timerProgressBar: true,
            icon: icon,
            didOpen: () => {
                (loading)
                    Swal.showLoading()
            }
    }); 
}