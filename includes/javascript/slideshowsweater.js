var current_sweater = 1;
updatingslide_sweater(current_sweater);

// navigation button, next or previous
function nav_sweater(input) {
  current_sweater = current_sweater + input;
  updatingslide_sweater(current_sweater);
}

function updatingslide_sweater(index) {
  var fullslides = document.getElementsByClassName("slideshow_sweater");
  // var captionText = document.getElementById("caption");
  if (index > fullslides.length) 
  {
    current_sweater = 1;
  }
  if (index < 1) 
  {
    current_sweater = fullslides.length;
  }
  for (var i = 0; i < fullslides.length; i++) 
  {
    if(i == current_sweater-1)
    {
      fullslides[current_sweater-1].style.display = "block";

    }
    else{
      fullslides[i].style.display = "none";

    }
    
  }
  // dots[current_sweater-1].className += " active";
  // captionText.innerHTML = dots[current_sweater-1].alt;
}

