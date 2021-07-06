function modalOpen(){

  var modal = document.getElementById("myModal");

  // Get the button that opens the modal
  var btn = document.getElementById("dwn_btn");


  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal
  modal.style.display = "block";

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
    modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}

var txt = "Suvaliste tsitaatide generaator";
var i = 0;
var speed = 100;

function typeWriter(){
  if(i < txt.length){
    document.getElementById("titleHead").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

typeWriter();
