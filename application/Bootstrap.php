<?php

namespace App;

use App\Core\Router;

class Bootstrap {

	/**
	 * Bootstrap constructor.
	 */
	public function __construct()
	{
		ini_set('display_errors', 1);
	}

	/**
	 *  Подключение базовых классов.
	 */
	static function load() {

		require_once "Config/Settings.php";
		require_once "Core/Controller.php";
		require_once "Core/Model.php";
		require_once "Core/Router.php";
		require_once "Core/View.php";
	}

	/**
	 *  Запуск роутера.
	 */
	static function run() {
		(new Router())->run();
	}

	/**
	 * Функция дебага переменной.
	 * @param mixed $var
	 * @param bool $ext
	 * @param bool $dev
	 */
	static function debug($var, bool $ext = false, bool $dev = false) {
		switch($dev) {
			case true:
				if ($_GET["dev"]) {
					echo '<pre>';
					if(!$ext) { print_r($var); } else { var_dump($var); }
					echo '</pre>';
				}
				break;
			case false:
				echo '<pre>';
				if(!$ext) { print_r($var); } else { var_dump($var); }
				echo '</pre>';
				break;
		}
		exit();
	}

	/**
	 * Форматирование строки с URI.
	 * @return string
	 */
	static function getURI() {
		$uri = $_SERVER["REQUEST_URI"];
		$uri = substr($uri, strpos($uri, '/') + 1);
		$uri = substr($uri, strpos($uri, '/') + 1);
		if(($pos = strpos($uri, "?")) == 0 && $_GET || $uri == '') { $uri = "index".$uri; }
		if(($pos = strpos($uri, "?")) > 0 || $uri == '?') {
			$uri = substr($uri, 0, $pos);
		}
		return $uri;
	}
}