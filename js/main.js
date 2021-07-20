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