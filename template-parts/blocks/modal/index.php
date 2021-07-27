<section class="section-modal">

       <!-- Button trigger modal -->
            <button type="button" class="btn btn-modal" data-toggle="modal" data-target="#exampleModal">
            Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <span><?php echo get_field("titulo");?></span>
                             <h4><?php echo get_field("pregunta");?></h4>
                             <div class="botones">
                               <a class="boton_amateur" href=""></a>
                               <a class="boton_profesional" href=""></a>
                             <span><?php echo get_field("nota");?></span>  
                        </div>
                        <div class="contenido-der">
                            <img src="<?php echo get_field("imagen");?>" alt="">
                        </div>    
                   </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
<h3>dasdasdasd</h3>
</section>


<script language='javascript'> 
document.getElementsByClassName('btn-modal')[0].click();  
console.log(document.getElementsByClassName('btn-modal')[0]);
</script>