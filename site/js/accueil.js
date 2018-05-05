function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
function myFunction2(element) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    element.value ='';
    for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
        }
    }
}

$(document).ready(function(){
    $('.btnContact').click(function(){
        $("#Modalcomment").modal();
        var id = $(this).attr('id');
        $("#to").val(id);
        return false;
    });
});
