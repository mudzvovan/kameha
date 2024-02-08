<?php

/**
 * Kameha Configuration Class.
 *
 * Grab Global Configuration settings set in Initialisation file.
 *
 * @version 1.0
 * @author Kameha Inv
 * @package Kameha
 * @copyright Copyright 2024 Kameha Inv
 * @license https://opensource.org/licenses/MIT
 * @link https://kamehainv.com
 */

namespace kameha\Kameha;

class Config{
	public static function get($path = null){
		if($path){
			$config = $GLOBALS['config'];
			$path = explode('/', $path);	// print_r($path);

			foreach ($path as $keys => $bit) {
				// This simply checks array key and goes dipper of value.
				if(isset($config[$bit])){
					$config = $config[$bit];
				}
			}
			return $config;
		}
		return false;
	}
}