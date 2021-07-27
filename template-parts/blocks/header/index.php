<?php
$estilo=get_field("estilo");

$args=array(
    'taxonomy'=>'category',
    'order'    =>'ASC'
);
$cats=get_categories($args);

?>
<div class="<?php if($estilo=="Profesional") echo "dark_background"; ?>">
<div id="sideNavigation" class="sidenav <?php if($estilo=="Profesional") echo "dark_background sidenav_dark"; ?>">
			<div class="menuHeader">
				<div>
					<img src="<?php if($estilo=="amateur") echo get_field("logo_menu_lateral"); else echo get_field("logo_menu_lateral_profesional"); ?>"/>
				</div>
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
			</div>
			<div class="menuBody">
  			<?php if(get_field("repeater_menu")){
				foreach(get_field("repeater_menu") as $menu){ ?>
			 <a href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
			<?php }}?>
			<?php if(is_front_page()){ ?>
			<button onClick="openNav2()">menu2</button>
			<?php } ?>
			</div>
			<div class="btnLateralContainer">
			<a class="btn btnMenuLateral" href="<?php echo get_field("boton_menu")["url"] ?>"><?php echo get_field("boton_menu")["title"] ?></a>
			</div>		
		</div>
		<div id="sideNavigation2" class="sidenav2 <?php if($estilo=="Profesional") echo "dark_background sidenav_dark"; ?>">
			<div class="menuHeader">
				<div>
				<a href="javascript:void(0)" class="returnbtn"><</a>
				</div>
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">×</a>
			</div>
			<div class="menuBody">
			<div class="inner-addon left-addon form-group">
				 <span class="glyphicon glyphicon-user"></span>
				 <input class="form-control" placeholder="buscar modelo" id="df" name="Usuario">
			 </div>
			 <?php foreach($cats as $cat){ 
				$argsPost = array(
				'post_type'=> 'bicicleta',
				'order'    => 'ASC',
				'category_name'=> $cat->name
			);
			$the_query_post = new WP_Query( $argsPost );
			if($the_query_post->posts){
				 ?>
			 	<a href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php }} ?>	
			</div>
		</div>				
	<nav class="topnav container">
		<div class="logoContainer">
		<img width="200px" 
					src=
					"<?php if($estilo=="Profesional")echo get_field("logo_profesional"); else echo get_field("logo_amateur");?>"/>
		</div>
		<div class="menuContainer <?php if($estilo=="Profesional") echo "menuContainerDark";?>">
			<?php if(get_field("repeater_menu")){
				foreach(get_field("repeater_menu") as $menu){ ?>
			 <a href="<?php echo $menu["item_menu"]["url"] ?>"><?php echo $menu["item_menu"]["title"] ?></a>	
			<?php }}?>
		    <a class="btn btnMenu" href="<?php echo get_field("boton_menu")["url"] ?>"><?php echo get_field("boton_menu")["title"] ?></a>
		</div>
  		<a class="openNavButton" href="#" onclick="openNav()">
    	<svg width="30" height="30" id="icoOpen">
		<?php if($estilo=="Amateur") {?> 
        	<path d="M0,5 30,5" stroke="#000" stroke-width="5"/>
        	<path d="M0,14 30,14" stroke="#000" stroke-width="5"/>
        	<path d="M0,23 30,23" stroke="#000" stroke-width="5"/>
		<?php }else{
		 ?>
			<path d="M0,5 30,5" stroke="white" stroke-width="5"/>
        	<path d="M0,14 30,14" stroke="white" stroke-width="5"/>
        	<path d="M0,23 30,23" stroke="white" stroke-width="5"/>
		 <?php } ?>
    	</svg>

  		</a>
	</nav>
    <?php if(get_field("ver_menu_inferior")){ ?>
		<div class="topnav container mt-3 menuInferior">
			<div class="logoContainer">
			<img src="<?php if($estilo=="Amateur") echo get_field("logo_menu_lateral"); else echo get_field("logo_menu_lateral_profesional"); ?>"/>
			</div>
			<div class="menuContainer <?php if($estilo=="Profesional") echo "menuContainerDark";?>">
			<?php 
			foreach($cats as $cat){ 
			$argsPost = array(
				'post_type'=> 'bicicleta',
				'order'    => 'ASC',
				'category_name'=> $cat->name
			);
			$the_query_post = new WP_Query( $argsPost );
			if($the_query_post->posts){
				?>
			 	<a href="<?php echo esc_url(get_category_link(get_cat_ID($cat->name))) ?>"><?php echo $cat->name ?></a>	
			 <?php } }?>	
			 <div class="inner-addon left-addon form-group">
				 <span class="glyphicon glyphicon-user"></span>
				 <input class="form-control" placeholder="buscar modelo" id="df" name="Usuario">
			 </div>
			</div>
	
		</div>
		<?php } ?>
	</div>
</div>