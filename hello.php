<?php
/**
 * Created by PhpStorm.
 * User: qinwen
 * Date: 15/4/23
 * Time: 上午11:22
 */
$echoStr = "Hello World!";
$echoStr1 = $_GET["echo_str"];
if($echoStr!=''){
    $echoStr = $echoStr1;
}
echo "<h1>$echoStr</h1>";