
$("#type_").change(function(){
    if((this.options[this.selectedIndex].value) == "Bottom") {
        $("#toptype").hide();
        $("#sweatertype").hide();
        $("#onepiecetype").hide();
        $("#bottomtype").show();
    }
    else if ((this.options[this.selectedIndex].value) == "Top")
    {
        $("#bottomtype").hide();
        $("#sweatertype").hide();
        $("#onepiecetype").hide();
        $("#toptype").show();
    }
    else if ((this.options[this.selectedIndex].value) == "Sweater")
    {
      $("#toptype").hide();
      $("#sweatertype").show();
      $("#onepiecetype").hide();
      $("#toptype").hide();

    }
    else if ((this.options[this.selectedIndex].value) == "One Piece")
    {
      $("#toptype").hide();
      $("#sweatertype").hide();
      $("#onepiecetype").show();
      $("#bottomtype").hide();

    }
    else{
      $("#toptype").hide();
      $("#sweatertype").hide();
      $("#onepiecetype").hide();
      $("#toptype").hide();
    }
});