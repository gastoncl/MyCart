	<div id="nav">		<ul>	<?php		if(isset($menu)):			foreach($menu as $k=>$v):				echo "<li>".anchor($v,$k)."</li>\n";			endforeach;		else:	?>			<li><?php echo anchor('carrito/inicio/',"Inicio")?></li>			<li><?php echo anchor('carrito/perfil/registrar',"Registrar")?></li>			<li><a href="">Nosotros</a></li><?php   endif;  ?>		</ul>	</div>