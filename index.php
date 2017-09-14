<?php
//include_once "common.php";
$path = 'path.pdf';
$content = 'ankit ';

// save PDF buffer
file_put_contents($path, $content);

// ensure we don't have any previous output
if(headers_sent()){
    exit("PDF stream will be corrupted - there is already output from previous code.");
}

header('Cache-Control: public, must-revalidate, max-age=0'); // HTTP/1.1
header('Pragma: public');
header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); // Date in the past
header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');

// force download dialog
header('Content-Type: application/force-download');
header('Content-Type: application/octet-stream', false);
header('Content-Type: application/download', false);

// use the Content-Disposition header to supply a recommended filename
header('Content-Disposition: attachment; filename="'.basename($path).'";');
header('Content-Transfer-Encoding: binary');
header('Content-Length: '.filesize($path));
header('Content-Type: application/pdf', false);

// send binary stream directly into buffer rather than into memory
readfile($path);

// make sure stream ended
exit();

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

