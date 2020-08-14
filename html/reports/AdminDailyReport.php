<?php

include '../usersession.php';
include '../db.php';

$sql = "SELECT engro.order.id,members.PersonalNumber,members.Username,GROUP_CONCAT(item.Name) as items,GROUP_CONCAT(item.Price) as prices,GROUP_CONCAT(orderdetails.Quantity) as quantities,GROUP_CONCAT(item.Category) as categoriess,GROUP_CONCAT(item.PreparationTime) as pTime,engro.order.Date FROM engro.order join members on engro.order.User = engro.members.ID join orderdetails on engro.Order.ID=engro.orderdetails.Order join item on item.ID=orderdetails.Item GROUP by engro.order.id ";

$sth = $db->query($sql);

$file = "Engro Food Hub Report" . date(" (d-m-y)") . ".csv";
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename=' . $file);
$content = "Personal Number,Username,Item Name,Preparation Time,Date,Item Price,Quantity,Total Price\n";

while ($result = mysqli_fetch_array($sth)) {

    $content .= strval($result["PersonalNumber"]) . ",";
    $content .= strval($result["Username"]) . ",";
    $content .= strval(str_replace(",", "_", $result["items"])) . ",";
    $content .= strval(date("h:i:sa", strtotime($result["pTime"]))) . ",";
    $content .= strval(date('Y-m-d', strtotime($result["Date"]))) . ",";
    $content .= strval(str_replace(",", "_", $result["prices"])) . ",";
    $content .= strval(str_replace(",", "_", $result["quantities"])) . ",";
    $content .= strval(str_replace(",", "_", $result["prices"] * $result["quantities"])) . "\n";
}

echo $content;