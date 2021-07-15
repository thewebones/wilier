<div class="slider_container <?php if(get_field('radio')=='dark') echo 'dark'; ?>">
    <h1 class="slider_title <?php if(get_field('radio')=='dark') echo 'white'; ?>">Te recomendamos explorar estas bicicletas</h1>
    <div id="carouselExampleIndicators" class="carousel slide mt-5 slider_carousel" data-ride="carousel">
    <button class="btn btn-slider-change <?php if(get_field('radio')=='dark') echo 'borderWhite'; ?>" data-target="#carouselExampleIndicators" data-slide-to="0">
        <span>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/webandres/img/robe_recursos/light/prev.svg"/>
        </span>
    </button>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slider_item">
                        <div class="imagen_slider_container">
                            <img src="<?php echo get_site_url(); ?>/wp-content/themes/webandres/img/robe_recursos/bicicleta.svg"/>
                        </div>
                        <div class="slider_text ml-3">
                            <p class="slider_categoria">Categoria</p>
                            <p class="slider_modelo mb-3 <?php if(get_field('radio')=='dark') echo 'white'; ?>">Modelo</p>
                            <p class="slider_description mb-5 <?php if(get_field('radio')=='dark') echo 'white'; ?>">Descripcion referente a la categoria y la bici</p>
                            <div class="slider_button_price mt-5">
                                <p class="slider_price">Desde $0000.00</p>
                                <button class="btn btn-slider ml-3 <?php if(get_field('radio')=='dark') echo 'borderWhite white'; ?>">
                                Consultar 
                                <span>
                                    <img 
                                        src="<?php if(get_field('radio')=='light')
                                        echo get_site_url();?>/wp-content/themes/webandres/img/robe_recursos/light/whatsapp.svg"                                   
                                        />
                                </span>
                            </button>
                            </div>
                        </div> 
                    </div>
                </div>
                
            </div>
    <button class="btn btn-slider-change <?php if(get_field('radio')=='dark') echo 'borderWhite'; ?>" data-target="#carouselExampleIndicators" data-slide-to="1">
        <span>
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/wilier/img/robe_recursos/light/next.svg"/>
        </span>
    </button>
</div>
