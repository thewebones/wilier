<?php
if(!isset($_GET["estilo"]) && !isset($_COOKIE["estilo"])){
?>
    <style>
        .boton_amateur:hover,.boton_profesional:hover{
            background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/hover-modal.png) !important;
        }
    </style>
 <section class="section-modal">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" onClick="amateur()" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="top">
                        <img class="logo-modal" src="<?php echo get_field("logo_izquierda");?>" alt="">
                        <div class="linea"></div>
                            <img src="<?php echo get_field("logo_derecha");?>" alt="">
                        </div>
                   <div class="contenido">
                        <div class="contenido-izq">
                            <span class="title"><?php echo get_field("titulo");?></span>
                            <h4 class="pregunta"><?php echo get_field("pregunta");?></h4>
                            <div class="botones">
                               <a class="boton_amateur" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/boton-afic-pro.png)" onClick="amateur()"><?php echo get_field("boton_amateur");?></a>
                               <a class="boton_profesional" style="background-image: url(<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/boton-afic-pro.png)" onClick="profesional()"><?php echo get_field("boton_profesional");?></a>
                            </div>
                            <span class="nota"><?php echo get_field("nota");?></span>  
                            <div class="redes-sociales">
                                <?php 
                                if(get_field("redes_sociales")){
                                foreach (get_field("redes_sociales") as $item) {?>
                                <div>
                                    <a class="" href="<?php echo $item["link"]?>">
                                        <img class="ico-redes" src="<?php echo $item["ico"] ?>">
                                    </a>
                                </div>
                                <?php }} ?>
                            </div>
                        </div>
                        <div class="contenido-der">
                          <img src="<?php echo get_field("imagen");?>" alt="">
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>

