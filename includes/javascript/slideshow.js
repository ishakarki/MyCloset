var current_top = 1;
updatingslide_top(current_top);

// navigation button, next or previous
function nav_top(input) {
  current_top = current_top + input;
  updatingslide_top(current_top);
}

function updatingslide_top(index) {
  var fullslides = document.getElementsByClassName("slideshow_top");
  // var captionText = document.getElementById("caption");
  if (index > fullslides.length) 
  {
    current_top = 1;
  }
  if (index < 1) 
  {
    current_top = fullslides.length;
  }
  for (var i = 0; i < fullslides.length; i++) 
  {
    if(i == current_top-1)
    {
      fullslides[current_top-1].style.display = "block";

    }
    else{
      fullslides[i].style.display = "none";

    }
    
  }
  // dots[current_top-1].className += " active";
  // captionText.innerHTML = dots[current_top-1].alt;
}

