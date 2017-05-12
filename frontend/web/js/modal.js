$(document).ready(function() {
	jQuery.noConflict();
	$('#modalSignin').on('click', function() {
		$('#modal').modal('show').find('#loginTab').load($(this).attr('value'));
		$('#modal').modal('show').find('#registerTab').load($('#modalSignup').attr('value'));
		$('#modal').modal('show').find('#forgetpasswordTab').load($('#modalForgetPassword').attr('value'));
		$('#modal').modal('show').find('a[href="#loginTab"]').trigger('click');
	});

	$('#modalSignup').on('click', function() {
		$('#modal').modal('show').find('#registerTab').load($(this).attr('value'));
		$('#modal').modal('show').find('#loginTab').load($('#modalSignin').attr('value'));
		$('#modal').modal('show').find('#forgetpasswordTab').load($('#modalForgetPassword').attr('value'));
		$('#modal').modal('show').find('a[href="#registerTab"]').trigger('click');
	});
});



// $(document).ready(function() {
// 	$('#tadaaa').on('click', function(e) {
// 		e.preventDefault();
// 		$('#loginTab').tab('show');
// 	});
// });

// $(document).ready(function() {
// 	$('#signin-taba').on('click', function(e) { 
// 		e.preventDefault();
// 	    $('#signin-taba').find('#loginTab').load($(this).attr('value'));
// 	});	
// });
// 	$(document).on('click','.signin-tab',function(e){
// 	   	e.preventDefault();
// 	    $('#signin-taba').tab('show');
// 	});
	    	
// $(document).on('click','.tadaaa',function(e){
// 	 	e.preventDefault();
// 	   	$('#forgetpasswordTab').tab('show');
// 	});
// });	