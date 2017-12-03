$(document).ready(function(){
  $('.password').keyup(function(){
    if($(this).val().length < 6){
    $('.to-append-message').text('Password must contain at least 6 characters.')
    $('button#submit').attr('disabled','disabled');
  } else if ($(this).val() != $('.confirm_password').val()) {
    $('.to-append-message').text('Confirm password and password do not match.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.to-append-message').text('');
    $('button#submit').removeAttr('disabled');
  }

});


  $('.username').keyup(function(){
    if($(this).val().length < 4){
    $('.to-append-message').text('Username must contain at least 4 characters.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.to-append-message').text('');
    $('button#submit').removeAttr('disabled');
  }

  })

  $('.confirm_password').keyup(function(){
    if($(this).val() != $('.password').val()) {
    $('.to-append-message').text('Confirm password and password do not match.')
    $('button#submit').attr('disabled','disabled');
  } else if ($('.password').val().length < 6){
    $('.to-append-message').text('Password must contain at least 6 characters.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.to-append-message').text('');
    $('button#submit').removeAttr('disabled');
  }

  })

  $('.email').keyup(function(){
    // from https://stackoverflow.com/questions/46155/how-to-validate-email-address-in-javascript
    var re = /\S+@\S+\.\S+/;
    var valEmail = re.test($(this).val());

    if(!valEmail){
    $('.to-append-message').text('Please enter a valid email address.')
    $('button#submit').attr('disabled','disabled');
  } else {
    $('.to-append-message').text('');
    $('button#submit').removeAttr('disabled');
  }

  })

})
