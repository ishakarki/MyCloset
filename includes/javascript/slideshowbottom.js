var current_bottom = 1;
updatingslide_bottom(current_bottom);

// navigation button, next or previous
function nav_bottom(input) {
  current_bottom = current_bottom + input;
  updatingslide_bottom(current_bottom);
}

function updatingslide_bottom(index) {
  var fullslides = document.getElementsByClassName("slideshow_bottom");
  // var captionText = document.getElementById("caption");
  if (index > fullslides.length) 
  {
    current_bottom = 1;
  }
  if (index < 1) 
  {
    current_bottom = fullslides.length;
  }
  for (var i = 0; i < fullslides.length; i++) 
  {
    if(i == current_bottom-1)
    {
      fullslides[current_bottom-1].style.display = "block";

    }
    else{
      fullslides[i].style.display = "none";

    }
    
  }
  // dots[current_bottom-1].className += " active";
  // captionText.innerHTML = dots[current_bottom-1].alt;
}

