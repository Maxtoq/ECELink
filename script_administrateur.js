function Check() {
    if (document.getElementById('RadioEtudiant').checked) {
        document.getElementById('ifYes').style.display= 'block';
    }
    else document.getElementById('ifYes').style.display ='none';

    if (document.getElementById('RadioProf').checked) {
        document.getElementById('ifYes1').style.display= 'block';
    }
    else document.getElementById('ifYes1').style.display ='none';

    if (document.getElementById('RadioPro').checked) {
        document.getElementById('ifYes2').style.display= 'block'
    }
    else document.getElementById('ifYes2').style.display ='none';
}
