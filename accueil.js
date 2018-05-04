var publi = getElementByid("murpubli");
function publi()
      {
        var $newdiv1 = $( "<div id='object1'></div>" );
      var newdiv2 = document.getElementById("mur").innerHTML;
      alert(newdiv2)

      newdiv2.^prependto("#mur");
      }

$(document).ready(function(){
  function bascule(id)
  {
    alert("yes");
    if (document.getElementById(id).style.visibility == "hidden")
        document.getElementById(id).style.visibility = "visible";
    else	document.getElementById(id).style.visibility = "hidden";
  }
});



function myFunction() {
    alert("yes");
    document.getElementById("myDropdown").classList.toggle("show");
};

function myFunction2() {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  };
