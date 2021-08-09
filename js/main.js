

$('pre.expandable').expander({
    slicePoint:130,
    expandText:'leer mas',
    collapseTimer:5000,
    userCollapseText:'cerrar'
});

document.getElementById("primary").addEventListener("click",function(e){
    if(document.getElementById("sideNavigation")!=e.target){
    closeNav();
    closeNav2();}
    if(document.getElementsByClassName("openNavButton")[0]==e.target){
        openNav();
    }
    if(document.getElementsByClassName("returnbtn")[0]==e.target){
        closeNav2();
        openNav();
    }
},true);


function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
}

function openNav2() {
    document.getElementById("sideNavigation2").style.width = "250px";
}

function closeNav2() {
    document.getElementById("sideNavigation2").style.width = "0";
    closeNav();
}
function returnBtn(){
    document.getElementById("sideNavigation2").style.width = "0";
    openNav();
}
function ocultarNombre(){
    document.getElementsByClassName("containerNombre")[0].style="display:none";
}
function ocultarEmail(){
    document.getElementsByClassName("containerEmail")[0].style="display:none";
}
function ocultarTel(){
    document.getElementsByClassName("containerTel")[0].style="display:none";
}
function mostrarNombre(){
    if(document.getElementsByClassName("inputnombre")[0].value=="")
    document.getElementsByClassName("containerNombre")[0].style="display:flex";
    
}
function mostrarEmail(){
    if(document.getElementsByClassName("inputemail")[0].value=="")
    document.getElementsByClassName("containerEmail")[0].style="display:flex";
}
function mostrarTel(){
    if(document.getElementsByClassName("inputtel")[0].value=="")
    document.getElementsByClassName("containerTel")[0].style="display:flex";
}

$( document ).ready(function() {
    $('#myModal').modal('toggle');
});
