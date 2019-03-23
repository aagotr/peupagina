<?php
/*
	Plugin Name: wp-fje-peu-de-pagina-02
	Version: 0.1
	Author: Aaron Gomez
*/
function afegPeuPagDef(){
 echo "<a href='http://www.formacioprofessional.com/ca/programes/desenvolupament-daplicacions-web-inclou-modul-de-programacio-daplicacions-en-entorns-mobils'
 style='color: red;
 font-size: 10px;
 margin: 10px;'>CFGS DAW a l'Escola del Clot</a>";
 echo "<br>";
 echo "<a href='https://clot.fje.edu/ca'> <img src='https://clot.fje.edu/sites/all/themes/escuelas_fje/images/logo_clot_fje.png'> </a>";
}
add_action('wp_footer','afegPeuPagDef');
?>
