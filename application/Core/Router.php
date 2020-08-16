<?php

namespace App\Core;

use App\Bootstrap;
use App\Config\Settings;

class Router {

	public static string $current;
	private static array $routes;

	public function run() {
		self::$routes = Settings::get("routes");
		self::$current = URI;
		if ($this->match()) {
			$this->route();
		} else {
			exit('<h1 style="font-family: \'Segoe UI\', serif; text-align: center">Ошибка 404</h1>');// TODO Error log 404 exception
		}
	}

	private function match() {
		return array_key_exists(self::$current, self::$routes);
	}

	private function route() {

	}
}