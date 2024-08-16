let activeswal;

function statusquery() {
	let formdata = new FormData();  
    let resp = _data(formdata, 'statusquery' );	
    console.log();
}
function depositCash() {
    $('#openCashDepModal').modal('show');
}
function openCashWModal() {
    $('#openCashWModal').modal('show');
}
	$("#depositmpesa").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'depositmpesa' );	
        if (resp['error'] == 'false') {
            $("#depositmpesa").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});
 
	function otpshow(show, hide) {
	    $('.'+show).toggleClass('hidden');
	    $('.'+hide).toggleClass('hidden');
	}
 
	$("#depositsasapay").submit(function(e){
		e.preventDefault();	 
        fireswal({msg:"Loading..."   });
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'depositsasapay' );	 
        if (resp['error'] == 'false') {
           // $("#depositsasapay").trigger('reset');
           swal.close();
            otpshow('hideform', 'showform'); 
           $('.authfeed').html(resp['msg']);
           $('.CheckoutRequestID').val(resp['CheckoutRequestID']);
        } else 
        fireswal({msg:resp['msg'], error:'true' });
       // reload('/dashboard')
	});		 
	$("#processsasapay").submit(function(e){
		e.preventDefault();	  
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'processsasapay' );	 
        if (resp['error'] == 'false') {
            $("#processsasapay").trigger('reset');
            $("#depositsasapay").trigger('reset'); 
           $('#sasaPayPinModal').modal('hide');
            otpshow('showform', 'hideform') 
            fireswal({msg:resp['msg']  });
        } else 
        fireswal({msg:resp['msg'], error:'true' });
       // reload('/dashboard')
       statusquery();
	});	
	$("#withdrawmpesa").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'withdrawtompesa' );	
        if (resp['error'] == 'false') {
            $("#withdrawmpesa").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});	
	$("#apllyloan").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'request_loan' );	
        if (resp['error'] == 'false') {
            $("#apllyloan").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});
	$("#redeemTokens").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'redeemTokens' );	
        if (resp['error'] == 'false') {
            $("#redeemTokens").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});
	$("#repayloan").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'pay_loan' );	
        if (resp['error'] == 'false') {
            $("#repayloan").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});	
	$("#investsavings").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'invest_now' );	
        if (resp['error'] == 'false') {
            $("#repayloan").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});	
	$("#withdrawtobank").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'withdrawtobank' );	
        if (resp['error'] == 'false') {
            $("#withdrawtobank").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});	
	$("#createinvoice").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'createinvoice' );	
        if (resp['error'] == 'false') {
            $("#createinvoice").trigger('reset');
        }
        fireswal({msg:resp['msg'] + ' Please visit invoices to copy payment link.' });
       // reload('/dashboard')
	});	
	$("#withdrawsasapay").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'withdrawsasapay' );	
        if (resp['error'] == 'false') {
            $("#withdrawsasapay").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});	
	$("#chargecard").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'chargecard' );	
        if (resp['error'] == 'false') {
            $("#chargecard").trigger('reset');
            location.href='/card?link='+resp['CheckoutUrl'];
        }
        fireswal({msg:resp['msg'] });
       // reload('/dashboard')
	});
	$("#internaltrasfer").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'internaltransfer' );	
        if (resp['error'] == 'false') {
            $("#internaltrasfer").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
        //reload('/dashboard')
	});	
	
	$("#newairtime").submit(function(e){
		e.preventDefault();	 
		let formdata = new FormData(this);  
        let resp = _data(formdata, 'buyairtime' );	
        if (resp['error'] == 'false') {
            $("#newairtime").trigger('reset');
        }
        fireswal({msg:resp['msg'] });
        //reload('/dashboard')
	});	
	function getaccounts(){ 
		let formdata = new FormData();
		formdata.append('email', $("input[name='email']").val()  );
		formdata.append('csrf', $("input[name='csrf']").val() );
        let resp = _data_let(formdata, 'list_accounts_cards' );	
        if (resp['error'] == 'false') { 
            return;
        }
        let output = '';
        for (let i = 0; i < resp['data'].length; i++ ) {
            output += `<option value='${resp['data'][i]}'> ${resp['data'][i]} </option>`;
        }
        
        $("select[name='account']").html(output);
	};
 
	$('.udata').change(function() {
	   const val = $(this).val();
	   const rel = $(this).attr('rel');
	   let formdata = new FormData();
	   formdata.append('val', val);
	   formdata.append('col', rel);
	   formdata.append('csrf', $("input[name='csrf']").val() );
	   
	   let resp = _data(formdata, 'update_user_data');
	   $('.'+rel).html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	});
 
	$('.cdata').change(function() {
	   const val = $(this).val();
	   const rel = $(this).attr('rel');
	   let formdata = new FormData();
	   formdata.append('val', val);
	   formdata.append('col', rel);
	   formdata.append('csrf', $("input[name='csrf']").val() );
	   
	   if (rel == 'cm_max_travel') $('.max-travel').text($(this).val() + ' kms');
	   
	   let resp = _data(formdata, 'update_user_charges');
	   $('.'+rel).html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	});
	 
	$('#changepass').click(function(e) {
	    e.preventDefault();
	   let resp = _data(new FormData(this), 'change_password'); 
	   $('.changepass').html((resp['error']=='false')?"<span class='text-success'>Changes Saved</span>":"<span class='text-danger'>"+resp['msg']+"</span>");
	});
	 
csrf();
setInterval(()=> {
    csrf();
}, 1000*60*29);
 

function reload(url = '/', time = 2000) {
    setTimeout(()=> {
        location.href=url;
    }, time);
}
function csrf() {
    
	let formdata = new FormData();  
    let resp = _data(formdata, 'get_csrf' );
    $("input[name='csrf']").val(resp['msg']);
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
function fireswal({msg, error = 'false', title = '', icon='success', loading=false, timer=3000}) {
    if (typeof error !== 'undefined') icon = icon;

    activeswal = Swal.fire({
            title: title,
            text: msg,
            timer: timer,  
            timerProgressBar: true,
            icon: icon,
            didOpen: () => {
                (loading)
                    Swal.showLoading()
            }
    }).then((result) => {
        // Store the Swal instance
        activeswal = result;
    });
}
 $(".notAllowed").click(function(e){
        e.preventDefault();
    });

 function _data(form_data, url = '', cl = 'loading', element_type = 'input' ) {
    let originalval;  
    let classconstruct = $('.'+cl);
    if (element_type == 'input') originalval = classconstruct.val();
    else originalval = classconstruct.text();
    
    let data;
    $.ajax({
        url : '/myapp/' + url,
        type : 'post',
        async: false,
        contentType : false,
        processData : false,
        beforeSend: function() {
            if (element_type == 'input') classconstruct.val('Loading...');
            else classconstruct.text('Loading...');
             
        },
        data : form_data,
        dataType: 'json', 
        success : function(data1) {
            data = data1;     
            if (element_type == 'input') classconstruct.val(originalval);
            else classconstruct.text(originalval);
        }
        
    });

    return data;
} 
function _data_let(form_data, url = '', cl = 'loading', element_type = 'input' ) {
    let originalval;  
    let classconstruct = $('.'+cl);
    if (element_type == 'input') originalval = classconstruct.val();
    else originalval = classconstruct.text();
    
    let data;
    $.ajax({
        url : 'https://mizizi.profileexpo.com/flutterapp/' + url,
        type : 'post',
        async: false,
        contentType : false,
        processData : false,
        beforeSend: function() {
            if (element_type == 'input') classconstruct.val('Loading...');
            else classconstruct.text('Loading...');
             
        },
        data : form_data,
        dataType: 'json', 
        success : function(data1) {
            data = data1;     
            if (element_type == 'input') classconstruct.val(originalval);
            else classconstruct.text(originalval);
        }
        
    });

    return data;
} 