var current_onepiece = 1;
updatingslide_onepiece(current_onepiece);

// navigation button, next or previous
function nav_onepiece(input) {
  current_onepiece = current_onepiece + input;
  updatingslide_onepiece(current_onepiece);
}

function updatingslide_onepiece(index) {
  var fullslides = document.getElementsByClassName("slideshow_onepiece");
  // var captionText = document.getElementById("caption");
  if (index > fullslides.length) 
  {
    current_onepiece = 1;
  }
  if (index < 1) 
  {
    current_onepiece = fullslides.length;
  }
  for (var i = 0; i < fullslides.length; i++) 
  {
    if(i == current_onepiece-1)
    {
      fullslides[current_onepiece-1].style.display = "block";

    }
    else{
      fullslides[i].style.display = "none";

    }
    
  }
  // dots[current_onepiece-1].className += " active";
  // captionText.innerHTML = dots[current_onepiece-1].alt;
}

