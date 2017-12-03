$(document).ready(function(){
  $('.password').keyup(function(){
    if($(this).val().length < 6){
    $('.password_err').text('Password must contain at least 6 characters.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.password_err').text('');
    $('button#submit').removeAttr('disabled');
  }

});


  $('.username').keyup(function(){
    if($(this).val().length < 4){
    $('.username_err').text('Username must contain at least 4 characters.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.username_err').text('');
    $('button#submit').removeAttr('disabled');
  }

  })

  $('.confirm_password').keyup(function(){
    if($(this).val() != $('.password').val()) {
    $('.confirm_password_err').text('Confirm password and password do not match.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.confirm_password_err').text('');
    $('button#submit').removeAttr('disabled');
  }

  })

  $('.email').keyup(function(){
    // from https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
    var re = /\S+@\S+\.\S+/;
    var valEmail = re.test($(this).val());

    if(!valEmail){
    $('.email_err').text('Please enter a valid email address.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.email_err').text('');
    $('button#submit').removeAttr('disabled');
  }

  })

})
