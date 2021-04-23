<?php
session_start();
require_once("CDatabase.php");
//require_once("CUser.php");
//require_once("CFormCreator.php");

function print_r_pre($data)
{
	echo('<pre>');
	print_r($data);
	echo('</pre>');
}

function dd($data)
{
	print_r_pre($data);
	die();
}

function redirect(string $url)
{
	header("location: $url");
	die();
}

class CApp
{
	public function __construct()
	{
		$this->m_db = new CDatabase();
		//$this->m_user = new CUser($this);
		//$this->m_formCreator = new CFormCreator($this);
	}


	public function &db()	{ return $this->m_db; }
	//public function &user()	{ return $this->m_user; }
	//public function &form()	{ return $this->m_formCreator; }

	///////////////////////////////////
	private $m_db = null;
	//private $m_user = null;
	//private $m_formCreator = null;
};


$app = new CApp();

?>