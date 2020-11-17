// IN CHARGE OF RESPONDING TO THE TYPE SELECTED IN THE UPLOAD FORM
$("#type_").change(function(){
  if((this.options[this.selectedIndex].value) == "Bottom") {
    // if the type chosen is bottom, then the bottom category will show and hide the rest
      $("#toptype").hide();
      $("#sweatertype").hide();
      $("#onepiecetype").hide();
      $("#bottomtype").show();
  }
  else if ((this.options[this.selectedIndex].value) == "Shirt")
  {
      //if the type chosen is top, then the top category will show and hide the rest
      $("#bottomtype").hide();
      $("#sweatertype").hide();
      $("#onepiecetype").hide();
      $("#toptype").show();
  }
  else if ((this.options[this.selectedIndex].value) == "Sweater")
  {
    //if the type chosen is sweater, then the sweater category will show and hide the rest
    $("#toptype").hide();
    $("#onepiecetype").hide();
    $("#bottomtype").hide();
    $("#sweatertype").show();


  }
  else if ((this.options[this.selectedIndex].value) == "Onepiece")
  {
    //if the type chosen is sweater, then the sweater category will show and hide the rest
    $("#toptype").hide();
    $("#sweatertype").hide();
    $("#bottomtype").hide();
    $("#onepiecetype").show();


  }
  else{
    //if no type is chosen yet, then every category will be hidden
    $("#toptype").hide();
    $("#sweatertype").hide();
    $("#onepiecetype").hide();
    $("#bottomtype").hide();
  }
});
