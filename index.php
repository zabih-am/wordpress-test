<?php
function user_register($name)
{
    echo "<br>this is User register {$name}";
}

function user_login($name)
{
    echo "<br>this is User login {$name}";
}

function user_exit($name)
{
    echo "<br>this is User logout {$name}";
}

//add_action('new_user_auth', 'user_register');
//add_action('new_user_auth', 'user_login');
//add_action('new_user_auth', 'user_exit');
//
//do_action('new_user_auth' , "zabih");

$test_hook = array(
    "auth" => array(
        'user_register',
        'user_login',
        'user_exit'
    ),
    "user" => array(
        'test1',
        'test2',
        'test3'
    )
);






//
//$content = 'با سلام خدمت همه کاربران عزیز امیدوارم حالتان خوب باشد . با سلام';
//
//function on_test_word($test_content){
//   $replaced = preg_replace('/سلام/', '<a href="https://www.google.com">google</a>' , $test_content);
//    return $replaced;
//}
//add_filter('replace_word' ,'on_test_word');
//$test = apply_filters('replace_word' , $content);
//
//echo $test;

interface ShippingMethod {
	public function get_name();
}

class ShippingByWalk implements ShippingMethod {
	protected $name;

	public function __construct() {
		$this->name = 'پای پیاده';
	}

	public function get_name() {
		return $this->name;
	}
}
class ShippingByTaxi implements ShippingMethod {
	protected $name;
	public function __construct() {
		$this->name;
	}

	public function get_name() {
		return $this->name = 'تحویل با تاکسی';
	}
}
class ShippingByPlain implements ShippingMethod {
	protected $name;
	public function __construct() {
		$this->name = 'تحویل با هواپیما';
	}

	public function get_name() {
		return $this->name;
	}
}

class ShippingByTrain implements ShippingMethod {
	protected $name;
	public function __construct() {
		$this->name = 'ارسال با قطار';
	}

	public function get_name() {
		return $this-> name;
	}
}

add_filter('shipping_method' , function ($methods){
	$methods[] = 'ShippingByTrain';
//	array_push( $methods , 'ShippingByTrain' );
	return $methods;
});

$shipping_method_array = array('ShippingByTaxi' , 'ShippingByWalk' , 'ShippingByPlain');
$shipping_method_filter = apply_filters('shipping_method' , $shipping_method_array);

foreach ($shipping_method_filter as $shipping_method){
	$obj = new $shipping_method;

	echo "<input type='radio' name='shipping' />" . $obj -> get_name();
}

//echo var_dump($shipping_method_filter);








































