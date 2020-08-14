<?php
include "db.php";

if(isset($_POST['mid'])){
    $sql1 = "SELECT * FROM `categories` WHERE categories.Menu=".$_POST['mid'];
    $statement = $db->prepare($sql1);
    $statement->execute(); // Execute the statement.
    $result = $statement->get_result();
    $data=[];
while ($json=$result->fetch_assoc()){
    $data[] = array(
        'ID'=> $json['ID'],
            'Name' => $json['name']  
    );
}
echo json_encode($data);
}
?>