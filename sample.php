<?php
include_once "src/gpt2com.php";

$gpt2= new gpt2com;
$gpt2->user_id="YOUR_USER_ID";
$gpt2->api_key="YOUR_API_KEY";

echo $gpt2->generate("Online casino gambling, in the past few years, has become a multi billion dollar industry");
echo "\n";