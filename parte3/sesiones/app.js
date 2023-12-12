var check=document.querySelector(".check");
check.addEventListener('click',idioma);

function idioma(){
    let id=check.checked;
    if(id==true){
        location.href="pag_espanol.php";
        
    }else{
        location.href="pag_ingles.php";
    }

}