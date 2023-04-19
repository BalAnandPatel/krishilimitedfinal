<?php

if(isset($_POST["update_exam"])){

 include "../../constant.php";	

 $exam_name=strtoupper($_POST["exam_name"]);
 $type=ucfirst($_POST["type"]);
 $amount=$_POST["amount"];
 $eligibility=ucfirst($_POST["eligibility"]);
 $total_post=$_POST["total_post"];
 $age=$_POST["age"];
 $exam_date_start=date("d-m-Y", strtotime($_POST["exam_date_start"]));
 $exam_date_end=date("d-m-Y", strtotime($_POST["exam_date_end"]));
 $admit_card_date=date("d-m-Y", strtotime($_POST["admit_card_date"]));
 $result_date=date("d-m-Y", strtotime($_POST["result_date"]));
 $status='1';
 $updated_on=date('d-m-Y');
 $updated_by="Admin";
 $url = $URL . "exam/update_exam.php";

 $data = array("exam_name"=>$exam_name, "amount"=>$amount, "eligibility"=>$eligibility, 
 "total_post"=>$total_post, "type"=>$type, "age"=>$age, "exam_date_start"=>$exam_date_start,
 "admit_card_date"=>$admit_card_date, "result_date"=>$result_date, "status"=>"1", "updated_by"=>"Admin",
 "exam_date_end"=>$exam_date_end, "status"=>$status, "updated_on"=>$updated_on, "updated_by"=>$updated_by);
  //print_r($data);

 $postdata = json_encode($data);
 $result_exam=url_encode_Decode($url,$postdata);
 print_r($result_exam);
   
// header('location:../exam_list.php'); 

     }
    

    function url_encode_Decode($url,$postdata){
    $client = curl_init($url);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($client, CURLOPT_POSTFIELDS, $postdata);
    $response = curl_exec($client);
    print_r($response);
    return $result = json_decode($response);

}


?>