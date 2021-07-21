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


function openNav() {
    document.getElementById("sideNavigation").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}
 
function closeNav() {
    document.getElementById("sideNavigation").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}