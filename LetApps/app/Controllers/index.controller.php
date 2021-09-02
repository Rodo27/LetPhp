<?php
    
namespace LetApps\App\Controllers;

class Index_Controller
{
	public function start()
	{

		$sTable = DbTable('usuarios');
		/*
		$sQuery = "CREATE TABLE IF NOT EXISTS persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
		)";
		*/

		$sQuery = "CREATE TABLE IF NOT EXISTS {$sTable}(
    usuario_id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    usuario_nombre VARCHAR(30) NOT NULL,
    usuario_email VARCHAR(70) NOT NULL UNIQUE,
    usuario_fecha VARCHAR(30) NOT NULL
		)";

		echo Db()->query($sQuery);
		//exit;
		
		$oView = View();
		$aItems = [
			['key' => 'letphp', 'route' => 'https://letphp.run' , 'text' => 'LetPHP'],
			['key' => 'docs', 'route' => 'https://docs.letphp.run' , 'text' => 'Documentación'],
			['key' => 'videos', 'route' => 'https://videos.letphp.run' , 'text' => 'Videos'],
			['key' => 'blog', 'route' => 'https://blog.letphp.run' , 'text' => 'Blog'],
			['key' => 'expo', 'route' =>  'https://expo.letphp.run', 'text' => 'Proyectos'],
		];
		$oView->setCss(['letphp.css' => 'app_app'])->setValues(['aItems' => $aItems]);
	}
}
    
?>
