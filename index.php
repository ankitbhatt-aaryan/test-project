<?php
//include_once "common.php";

phpinfo();
exit;

$_GET['test_key'] = Array(); 
$request = RequestHandler::createFromGlobals(array('POST'=>array('name','amount')));

//var_dump($request->server()->get('http_host'));
//$request2 = RequestHandler::createFromGlobals();

echo '<pre> Debug Print :<br>';
print_r($request);
//print_r($request2);
echo '</pre>';
exit;

exit;
/*

function _open(){
	ECHO 'sess open <br>';
}

function _close(){
	ECHO 'sess close <br>';
}

function _read($id){
	ECHO 'sess read '.$id.' => '.time().'<br>';
}

function _write($id,$data){

	ECHO 'sess write '.$id.'=>'.$data.' => '.time().'<br>';
}

function _destroy($id){
	ECHO 'sess destroy <br>';
}

function _clean(){
	ECHO 'sess clean <br>';
}


session_set_save_handler('_open','_close','_read','_write','_destroy','_clean');

session_start();


$_SESSION['name'] = 'ankit';
$_SESSION['sname'] = 'bhatt';

echo($_SESSION['name'].'<br>');
echo($_SESSION['sname'].'<br>');

