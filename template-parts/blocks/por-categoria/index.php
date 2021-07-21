<?php $args = array(
    'post_type'=> 'bicicletas',
    'order'    => 'ASC',
    'category_name'=> 'china'
);
$the_query = new WP_Query( $args );
?>
<section class="section-por-categoria <?php echo get_field("estilo")?>">

<div class="docsContainer">
    <div class="searchContainer">
        <form class="selectContainer" action="" method="post">
            <label class="textSearch">Select a department</label>
            <select class="selectSearch" onChange="submitForm(event)" onClick="select(event)" name="categoria" >
                 <?php if($catSelect==="all"){
                    ?>
                    <option value="all">all</option>
                <?php foreach($cats as $index=>$cat) {?>
                    <option value="<?php echo $cat->name?>"><?php echo $cat->name ?></option>
                <?php } ?>
                <?php }else {?>
                    <option value="$catSelect"><?php echo $catSelect ?></option>
                    <option value="all">all</option>
                    <?php foreach($cats as $index=>$cat) {
                    if($catSelect!==$cat->name)  {  
                    ?>
                        <option value="<?php echo $cat->name?>"><?php echo $cat->name ?></option>
                <?php } } ?>
                <?php } ?> 
            </select>
            <span class="separarFlecha"></span>
        </form>
    </div>
    <div class="allDocs">
        <?php if($the_query->have_posts()) :
            while($the_query->have_posts()) :
                $the_query->the_post();
                $aux=get_post_meta(get_the_ID(),'enlace',true);
               
        ?>
            <div class="singleDocs" onClick="goLink(event)">
            <?php if($aux) {?>
            <a href="<?php echo $aux["url"] ?>"></a>
            <?php } ?>
            <div>
			<div class="iconDoc">  
				<?php the_post_thumbnail();?>
			</div>
            </div>
			<div class="textContainer">
                <h1 class="tituloDoc"><?php echo the_title() ?></h1>
                <p class="descriptionDoc"><?php echo get_the_excerpt() ?></p>
            </div>
            </div>  
            
        <?php 
        endwhile;
        wp_reset_postdata();
    else:
        ?>
        <p class="classNotFound">No se encontró ningun documento de la categoría seleccionada</p>
        <?php
    endif;
        ?>      
    </div>
</div>

</section>