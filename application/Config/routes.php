<?php

return [
	"index" => [
		"template" => "index",
		"model" => "index",
		"controller" => "index",
		"access" => 1, // 1 - All
	],
	"catalog" => [
		"template" => "catalog",
		"model" => "catalog",
		"controller" => "catalog",
		"access" => 1, // 1 - All
	],
	"profile" => [
		"template" => "profile",
		"model" => "profile",
		"controller" => "profile",
		"access" => 2, // 2 - ONLY User & Admin
	],
	"admin" => [
		"template" => "admin",
		"model" => "admin",
		"controller" => "admin",
		"access" => 3, // 3 - ONLY Admin
	]
];