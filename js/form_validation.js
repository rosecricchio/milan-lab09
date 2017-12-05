$(document).ready(function(){
  // Clear error messages when User 'keyup's a new value
  // Works with all error messages
  $('.username, .password, .confirm_password, .email').keyup(function(){
    $('.password_err, .confirm_password_err, .email_err, .error_message, .username_err').text('');
  })


  // Validate Create Form on Submit
  $('#signUpForm').submit(function(e){
    // password has to be longer than 6

    if($('.password').val().length < 6){
      e.preventDefault()
      $('.password_err').text('Password must contain at least 6 characters.')
    } else {
      $('.password_err').text('');
    }


    // password and confirm passowrd must match
    if($('.password').val() != $('.confirm_password').val()){
      e.preventDefault()
      $('.confirm_password_err').text('Password must match Confirm Password')
    } else {
      $('.confirm_password_err').text('');
    }

    // email must be valid
    // regular expression from https://stackoverflow.com/questions/9347282/using-jquery-preventing-form-from-submitting
    var re = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var valEmail = re.test($('.email').val());

    if(!valEmail){
      e.preventDefault()
       $('.email_err').text('Please enter a valid email address.')
    } else {
       $('.email_err').text('');
    }




})

});
