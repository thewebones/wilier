

$('p.expandable').expander({
    slicePoint:50,
    expandText:'leer mas',
    collapseTimer:5000,
    userCollapseText:'cerrar'
});

document.getElementById("primary").addEventListener("click",(e)=>{
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
function returnbtn(){
    document.getElementById("sideNavigation2").style.width = "0";
    openNav();
}

$( document ).ready(function() {
    $('#myModal').modal('toggle');
});