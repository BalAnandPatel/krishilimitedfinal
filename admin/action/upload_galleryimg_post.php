<?php
include '../../constant.php';
$url = $URL . "gallery/insert_gallery_image.php";
$url_read_maxId=$URL . "registration/read_maxId.php";   
$uploaded_file = $_FILES['uploaded_file']['name'];
$created_on=date("d-m-Y");  
$created_by="Admin";
$data = array("created_on"=>$created_on, "created_by"=>$created_by);
// print_r($data);

function url_encode_Decode($url,$postdata){
$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
$response = curl_exec($client);
print_r($response);
return $result = json_decode($response);
}
?>