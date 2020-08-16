<?php
/*   Подключение классов   */

use App\Config\Settings;
use App\Bootstrap;
require_once "application/Bootstrap.php";

/*===========================*/

Bootstrap::load(); // Подгружаем приложение

Settings::load(); // Подгружаем настройки приложения и классов

Bootstrap::run(); // Запуск приложения

switch(URI) {
	case "index":
		require _VIEW_PAGE_."index.html";
		break;
	case "catalog":
		require _VIEW_PAGE_."catalog.html";
		break;
	case "admin":
		require _VIEW_PAGE_."admin.html";
		break;
	case "profile":
		require _VIEW_PAGE_."profile.html";
		break;
	default:
		Bootstrap::debug(URI);
		die("Ошибка 404");
	break;
}