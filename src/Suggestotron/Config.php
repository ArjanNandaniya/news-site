<?php
namespace Suggestotron;

class Config {
	static public $directory;
	static public $config = [];

	static public function setDirectory($path) {
		self::$directory = $path;
	}

	static public function get($config) {
		$config = strtolower($config);

		self::$config[$config] = require self::$directory . '/' . $config . '.php';

		return self::$config[$config];
//11-1-18
		if (empty($route) || $route == '/') {
			if (isset($this->config['default'])) {
				$route = $this->config['default'];
			} else {
				$this->error();
			}
		}
	}

}
