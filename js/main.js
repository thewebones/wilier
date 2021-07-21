const load=(event)=>{
    const imagenLoad=event.currentTarget.parentElement.children[3].value;
    document.getElementsByClassName("showImagen")[0].setAttribute("src",imagenLoad);
}

document.getElementsByClassName("radio_container")[0].children[0].children[0].click();

$('p.expandable').expander({
    slicePoint:50,
    expandText:'leer mas',
    collapseTimer:5000,
    userCollapseText:'cerrar'
});

document.getElementById("primary").addEventListener("click",(e)=>{
    if(document.getElementById("sideNavigation")!=e.target)
    closeNav();
    closeNav2()
 },false);

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

function returnNav() {
    document.getElementById("sideNavigation2").style.width = "0";
}