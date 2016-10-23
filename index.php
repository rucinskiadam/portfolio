<?php
/*index.php*/
echo '<!doctype html>';//*/

echo '<html>';
echo '     <head>';
echo '          <meta charset="UTF-8" />';
echo '          <title>Ar for start</title>';
echo '     </head>';
echo '     <body>	 ';
echo '		<header style="background-color:red;">';
echo '          Adam jakis baner';
echo '		</header>';
echo '    <article>
		<nav>';
echo '			<section id="nav_1" onclick="show_section(1);" style="background-color: green;padding left;  height: 20px; ">O mnie</section>';
echo '			<section id="sec_1" style="display: none;">O mnie to show..</section>';
echo '		<section id="nav_2" onclick="show_section(2);" style="background-color: blue;padding left; height: 20px; ">cos?</section>';
echo '			<section id="sec_2"  style="display: none;">O mnie to show..</section>';
echo '	</nav>';
echo '		<article>';

echo '			<section>...</section>';
echo '			<section>...</section>';
echo '		</article>';
echo '		<aside>...</aside>';
echo '		<footer style="color: grey;">
				<section style="color: grey;">Created By <strong>Adam Rucinski</strong></section>
				<section style="">rucinskiadam@op.pl</section>					
				<section style="">(+48) 733-312-794</section>	
			</footer>';
echo '     </body>';
echo '</html>';
?>
<script>
function show_section(id){
	var section_to_show=document.getElementById('sec_'+id);
	if(section_to_show.style.display=='block'){
		section_to_show.style.display='none';
	}else{
		section_to_show.style.display='block';
	}
}

</script>