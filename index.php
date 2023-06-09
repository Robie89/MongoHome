<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

require_once 'vendor/autoload.php';
require_once 'system/Req.php';
require_once 'system/Model.php';
require_once 'system/View.php';
require_once 'system/views/begin.php';

Model::Init();

if(Req::NewContactSubmitted())
{
	$contact = Req::GetContactPostData();
	Model::InsertContact($contact);
}
View::CreationForm();

$contacts = Model::SelectPlayers();
View::ShowPlayers($contacts);

require_once 'system/views/end.php';
?>