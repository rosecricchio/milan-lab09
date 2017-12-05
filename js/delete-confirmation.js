$('#deleteBtn').click(function(e){
  // code from https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_confirm2
    var txt;
    var r = confirm("Are you sure?");
    if (r == true) {
       return true;
     } else {
       e.preventDefault();
     }
})
