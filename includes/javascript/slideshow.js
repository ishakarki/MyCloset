var current = 1;
updatingslide(current);

// navigation button, next or previous
function nav(input) {
  current = current + input;
  updatingslide(current);
}

function updatingslide(index) {
  var fullslides = document.getElementsByClassName("slideshow");
  // var captionText = document.getElementById("caption");
  if (index > fullslides.length) 
  {
    current = 1;
  }
  if (index < 1) 
  {
    current = fullslides.length;
  }
  for (var i = 0; i < fullslides.length; i++) 
  {
    if(i == current-1)
    {
      fullslides[current-1].style.display = "block";

    }
    else{
      fullslides[i].style.display = "none";

    }
    
  }
  // dots[current-1].className += " active";
  // captionText.innerHTML = dots[current-1].alt;
}

function showHide(value) {
  if (value=='')
      document.getElementById('divShow').style.display = 'none';
  else
      document.getElementById('divShow').style.display = 'block';
}