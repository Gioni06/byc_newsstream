<?php
    require_once('api.php');
        function getUrl() {
            $url  = @( $_SERVER["HTTPS"] != 'on' ) ? 'http://'.$_SERVER["SERVER_NAME"] :  'https://'.$_SERVER["SERVER_NAME"];
            $url .= ( $_SERVER["SERVER_PORT"] !== 80 ) ? ":".$_SERVER["SERVER_PORT"] : "";
            $url .= $_SERVER["REQUEST_URI"];
            return $url;
        }
        $requestURI = explode("/", getUrl());
        $scriptName = explode("/", $_SERVER["SCRIPT_NAME"]);

        for($i= 0;$i < sizeof($scriptName);$i++)
        {
            if ($requestURI[$i]     == $scriptName[$i])
            {
                unset($requestURI[$i]);
            }
        }

$command = array_values($requestURI);
$api = New Api;
//$api->getPostbyId(3);

switch($command[4])
{

    case "getPost" :
                echo($api->allData());
                break;

    case "getPostById" :
                $id =  intval($command[5]);
                echo($api->getPostbyId($id));

    case "gewinnspiel" :
        echo "Gewinnspiel";
    default:
        //echo("redirect to home");
        //break;
}
//var_dump($command[4]);
