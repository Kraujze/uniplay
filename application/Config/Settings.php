<?php

namespace App\Config;

use App\Bootstrap;

class Settings {

	/**
	 * Настройки приложения, базы данных и роутера.
	 * @var array|array[]
	 */
	static array $settings = [
		"config" => [
			//config for application
		],
		"database" => [
			//config for database
		],
		"routes" => [
			//config for routes
		]
	];



	/**
	 * Загрузка настроек.
	 */
		static function load() {
		self::setDefine();
		self::setConfig("config");
		self::setConfig("database");
		self::setConfig("routes");
	}

	/**
	 * Создание констант.
	 */
	private static function setDefine() {
		if($_GET["dev"] == 1) { define("_ROOT_", str_replace("\\", "/", "C:\\xampp\htdocs\uniplay\\")); } else { define("_ROOT_", "/home/u/unifyost/unifyost/public_html/uniplay/"); }
		define("_CONFIG_", _ROOT_."application/Config/");
		define("_VIEW_", _ROOT_."application/View/");
			define("_VIEW_PAGE_", _VIEW_."Page/");
			define("_VIEW_MODELS_", _VIEW_.'VModels/');
		define("URI", Bootstrap::getURI());
	}

	/**
	 * Загрузка определённых настроек.
	 * @param $config
	 */
	private static function setConfig($config) {
		self::$settings[$config] = require_once(_CONFIG_.$config.'.php');
	}

	/**
	 * Получение определённых настроек.
	 * @param $config
	 * @return array|mixed
	 */
	public static function get($config) {
		return self::$settings[$config];
	}

	public static function getTemplate($route) {

	}

	public static function getController($route) {

	}

	public static function getModel($route) {

	}

	public static function getAction($route) {

	}









}