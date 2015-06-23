<?php
function headers(){
	header('X-Powered-By:interfriendz-mvc');
};
function view($name,$data = ''){

	
	include $_SERVER['DOCUMENT_ROOT'] . '/views/' . $name . '.php';
}