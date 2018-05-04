
$(document).ready(function(){
	$("#modifCv").click(function(){
    	$('#CV').replaceWith('<p id="CV">'+$("#ameliorer1").val()+'</p>');

    });
});

$(document).ready(function(){
	$("#ModifDescPerso").click(function(){
    	$('#loisirs').replaceWith('<p id="loisirs">'+$("#areaLoisirs").val()+'</p>');
    	$('#sports').replaceWith('<p id="sports">'+$("#areaSports").val()+'</p>');
    	$('#voyages').replaceWith('<p id="voyages">'+$("#areaVoyages").val()+'</p>');
    	
    });
});