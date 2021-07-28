<div class="modal " id="myModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<section class="section-modal">

       <!-- Button trigger modal -->
            <button type="button" onClick="prueba()" class="btn-modal" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="top">
                       <img src="<?php echo get_field("logo_izquierda");?>" alt="">
                       <div class="linea"></div>
                       <img src="<?php echo get_field("logo_derecha");?>" alt="">
                   </div>
                   <div class="contenido">
                        <div class="contenido-izq">
                            <span class="title"><?php echo get_field("titulo");?></span>
                             <h4 class="pregunta"><?php echo get_field("pregunta");?></h4>

                             <div class="botones">
                               <a class="boton_amateur" onClick="amateur()"><?php echo get_field("boton_amateur");?></a>
                               <a class="boton_profesional" onClick="profesional()"><?php echo get_field("boton_profesional");?></a>
                            </div>

                             <span class="nota"><?php echo get_field("nota");?></span>  

                             <div class="redes-sociales">
                            <?php 
                                if(get_field("redes_sociales")){
                                foreach (get_field("redes_sociales") as $item) {?>
                                <div>
                                    <a class="" href="<?php echo $item["link"]?>">
                                    <img class="ml-3" src="<?php echo $item["ico"] ?>">
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
</section>


<script language='javascript'> 

</script>