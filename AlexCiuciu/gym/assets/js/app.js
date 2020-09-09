function myFunction() {
  $("#myDropdown").toggle("show");
  $("#username").text(currentUser);
}

var currentUser = $("#userLogat").text();

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.drop_a')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('.show')) {
      myDropdown.classList.remove('.show');
    }
  }
};

$(document).ready(function() { 
  $("#btn-form").click(function(e){
    e.preventDefault();
    $.get("ajax.php", function(data, status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });

   // $('#scroll').sooperfish();
    $('.top').click(function() {$('html, body').animate({scrollTop:0}, 'slow'); return false;})
    

    $( "#img" ).hover(function() {
      $( this ).fadeOut( 1500 );
      $( this ).fadeIn( 1 );
    },100);

    
    $( "#img01 , #img02 , #img03" ).hover(function() {
      $( this ).fadeOut( 1500 );
    },100);

  });

 