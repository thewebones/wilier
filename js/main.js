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

const dimensiones=document.getElementsByClassName("imageInfoContainer")[0].getBoundingClientRect();
const width=dimensiones.width;
const widthRelative=width*0.6;
const poligonos=document.getElementsByClassName("poligon");
for(let i=0;i<poligonos.length;i++)
poligonos[i].setAttribute("points",`0,0 ${width},0 ${widthRelative},400 0,400`);
