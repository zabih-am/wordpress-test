<?php

class Asset{
	public static function css($file_name , $file_directory) {
		switch ($file_directory){
			case 'vendor':
			return THEME_URL.'/assets/css/vendor/'.$file_name;
			break;
			case 'colors':
			return THEME_URL.'/assets/css/colors/'.$file_name;
			break;
			case 'direct':
			return THEME_URL.'/assets/css/'.$file_name;
			break;
		}

	}

	public static function image( $file_name ) {
		return THEME_URL.'/assets/img/'.$file_name;
	}

	public static function js( $file_name ) {
		return THEME_URL.'/assets/js/'.$file_name;
	}

	public static function font( $file_name ) {
		return THEME_URL.'/assets/font/'.$file_name;
	}
}
