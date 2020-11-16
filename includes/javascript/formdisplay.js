// IN CHARGE OF RESPONDING TO THE TYPE SELECTED IN THE UPLOAD FORM
$("#type_").change(function(){
    if((this.options[this.selectedIndex].value) == "Bottom") {
      // if the type chosen is bottom, then the bottom category will show and hide the rest
        $("#toptype").hide();
        $("#sweatertype").hide();
        $("#onepiecetype").hide();
        $("#bottomtype").show();
    }
    else if ((this.options[this.selectedIndex].value) == "Top")
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
      $("#sweatertype").show();
      $("#onepiecetype").hide();
      $("#toptype").hide();

    }
    else if ((this.options[this.selectedIndex].value) == "One Piece")
    {
      //if the type chosen is sweater, then the sweater category will show and hide the rest
      $("#toptype").hide();
      $("#sweatertype").hide();
      $("#onepiecetype").show();
      $("#bottomtype").hide();

    }
    else{
      //if no type is chosen yet, then every category will be hidden
      $("#toptype").hide();
      $("#sweatertype").hide();
      $("#onepiecetype").hide();
      $("#toptype").hide();
    }
});