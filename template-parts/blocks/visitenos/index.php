<section class="section-visitenos"> 
    <div class="visitenos">
        <div class="titulo container">
            <h2><?php echo get_field('titulo-visitenos') ?></h2>
        </div> 
       <?php 
       if(get_field("repeater-visitenos")){
       foreach (get_field("repeater-visitenos") as $item) { ?>
            <div class="contenido container mt-5">
                
                <div class="foto container">
                    <img class="img-fluid img-visitenos" src="<?php echo $item["imagen-visitenos"] ?>">
                </div>

                <div class="descripcion container">    
                    <span class="destribuidor-visitenos"><?php echo $item["destribuidor-visitenos"] ?></span>
                    <h5 class="nombre-visitenos"><?php echo $item["nombre-visitenos"] ?></h5>
                    <p class="direccion-visitenos"><?php echo $item["direccion-visitenos"] ?></p>
                </div>
            </div>
            <div class="fondo-visitenos" style="background-image: url(<?php echo $item["fondo-visitenos"] ?>)">

            </div>

      <?php }} ?> 
    </div>
  
       
</section>