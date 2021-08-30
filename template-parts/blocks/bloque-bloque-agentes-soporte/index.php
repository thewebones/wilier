<?php if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"]))
$estilo="Amateur";
else{
	if(isset($_GET["estilo"])){
		$estilo=$_GET["estilo"];
	}else
		$estilo=$_COOKIE["estilo"];
	}
$cont=0;
?>
 
<div class="<?php if($estilo=="Profesional") echo "slider_container_dark" ?>">
<div class="slider_container container">
    <h1 class="slider_title_bloque_mundo mb-4 <?php if($estilo=="Profesional") echo "whiteColorText"; ?>"><?php echo get_field("titulo_seccion") ?></h1>
    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner ">
            <?php if(get_field("repeater_agentes"))
                foreach(get_field("repeater_agentes") as $agente){
            ?>
            <div class="carousel-item <?php if($cont==0) echo "active"?>">
                <div class="agenteContainer mb-5">
                    <div class="imageInfoContainer responsive <?php if($estilo=="Profesional")echo "quitarSombra" ?>" >
                    <svg width="100%" height="100%" id="icoOpen">
                        <polygon class="poligon" fill="<?php if($estilo=="Profesional") echo "black"; else echo "white"?>" stroke="<?php if($estilo=="Profesional") echo "white"?>" stroke-width="2"
                        points="" filter="#f1"/>
                    </svg>
                    </div>
                    <div class="eventoInfoContainer">
                            <div>
                        <p class="evento_categoria"><?php echo $agente["puesto_de_trabajo"]?></p>
                        <p class="agente_nombre <?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo $agente["nombre"] ?></p>
                        <p class="slider_modelo <?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo $agente["apellido"] ?></p>
                        <p class="<?php if($estilo=="Profesional") echo "colorWhite"?>"><?php echo $agente["experiencia"] ?> </p>
                            </div>
                        <a  href="https://api.whatsapp.com/send?phone=<?php echo $agente["numero_telefono"] ?>&text=<?php echo $agente["mensaje"];?>" target="_blank" class="btn btn-slider <?php if($estilo=="Profesional")echo "borderWhite" ?>">
                            <span class="<?php if($estilo=="Profesional")echo "colorWhite" ?>">Consultar</span> 
                            <span class="iconWhatsapp <?php if($estilo=="Profesional") echo "iconWhatsappProfesional" ?>"></span>
                        </a>
                    </div>
                    <div class="fleximagenContainer">
                        <div class="imagenEventoContainer" >
                            <img src="<?php echo $agente["imagen_agente"] ?>" />
                        </div>
                    </div>
                </div>
            </div>
                <?php 
                $cont++;
            } ?>
    </div>
    <div class="btnSliderContainer">
    <button class="btn btn-slider-change mr-2 <?php if($estilo=="Profesional") echo "borderWhite"; ?>" data-target="#carouselExampleIndicators2" data-slide="prev">
        <span>
        <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/prev.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/prev.svg"/>
        <?php } ?>
        </span>
    </button>
    <button class="btn btn-slider-change ml-2 <?php if($estilo=="Profesional") echo "borderWhite"; ?>" data-target="#carouselExampleIndicators2" data-slide="next">
    <?php if($estilo=="Profesional") {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/dark/next.png"/>
        <?php }else {?>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/next.svg"/>
        <?php } ?>
    </button>
    </div>
</div>
</div>
</div>
<script>

const dimensionesAgente=document.getElementsByClassName("imageInfoContainer")[0].getBoundingClientRect();
const widthAgente=dimensionesAgente.width;
const heightAgente=dimensionesAgente.height;
const widthRelativeAgente=widthAgente*0.6;
const poligonosAgente=document.getElementsByClassName("poligon");
for(let i=0;i<poligonosAgente.length;i++)
poligonosAgente[i].setAttribute("points",`0,0 ${widthAgente},0 ${widthRelativeAgente},${heightAgente} 0,${heightAgente}`);

</script>
