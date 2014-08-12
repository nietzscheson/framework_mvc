<?php 

class menuModelWidget extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function getMenu(){
		$menu = array(
			array(
				"id"		=>		"home",
				"icono" 	=> 		"home",
				"titulo"	=>		"Portada",
				"enlace"	=>		BASE_URL

			),
			array(
				"id"		=>		"post",
				"icono" 	=> 		"th-large",
				"titulo"	=>		"Posts",
				"enlace"	=>		BASE_URL . "post"
			),

			array(
				"id"		=>		"ajax",
				"icono" 	=> 		"random",
				"titulo"	=>		"Ajax",
				"enlace"	=>		BASE_URL . "ajax"

			),

			array(
				"id"		=>		"pdf",
				"icono" 	=> 		"file",
				"titulo"	=>		"PDF",
				"enlace"	=>		BASE_URL . "pdf/pdf1/Usuario/prueba"

			),

			array(
				"id"		=>		"usuarios",
				"icono" 	=> 		"user",
				"titulo"	=>		"Usuarios",
				"enlace"	=>		BASE_URL . "usuarios"

			),

			array(
				"id"		=>		"cerrar",
				"icono" 	=> 		"off",
				"titulo"	=>		"Cerrar",
				"enlace"	=>		BASE_URL . "login/cerrar/"

			),

			array(
				"id"		=>		"login",
				"icono" 	=> 		"log-in",
				"titulo"	=>		"Login",
				"enlace"	=>		BASE_URL . "login"
			),

			array(
				"id"		=>		"registro",
				"icono" 	=> 		"list-alt",
				"titulo"	=>		"Registro",
				"enlace"	=>		BASE_URL . "registro"
			)
		);

		return $menu;
	}


}


?>