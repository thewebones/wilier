<h1>qaewqeqwe</h1>

<div class="row">
            <div class="col-12">

                <div class="carousel center-align">
                <?php 
                    if(get_field("repeater")){
                    foreach (get_field("repeater") as $item) {?>
                    <div class="carousel-item">
                        <img src="<?php echo $item["imagen"] ?>" alt="">
                    </div>
                <?php }} ?>            
                </div> 
                <div class="carousel-fixed-item center middle-indicator">
                    <div class="left">
                        <a href="#carouselContainer" onclick="movePrevCarousel()" class="middle-indicator-text waves-effect waves-light content-indicator"><i
                                class="material-icons left  middle-indicator-text">chevron_left</i></a>
                    </div>
        
                    <div class="right">
                        <a href="#carouselContainer" onclick="moveNextCarousel()" class="middle-indicator-text waves-effect waves-light content-indicator"><i
                                class="material-icons right middle-indicator-text">chevron_right</i></a>
                    </div>
                </div>        
            </div>
</div>
