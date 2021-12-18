<?php
// if (isset($_POST) && !empty($_POST)) {
//     $standard_name = $_POST['standard_name'];
//     $standard_number = $_POST['standard_number'];
//     $standard_meet = $_POST['standard_meet'];
//     $standard_detail = $_POST['standard_detail'];
//     $standard_mandatory = $_POST['standard_mandatory'];
//     $standard_tacking = $_POST['standard_tacking'];
//     $standard_note = $_POST['standard_note'];
// }

 $sql = "SELECT *  FROM standard_tb";
 $query = sqlsrv_query($conn, $sql);

$sql2 = "SELECT *  FROM main_std" ;
$query2 = sqlsrv_query($conn, $sql2);

$sql3 = "SELECT *  FROM dimension_agency";
$query3 = sqlsrv_query($conn, $sql3);

$sql4 = "SELECT *  FROM dimension_group";
$query4 = sqlsrv_query($conn, $sql4);

$sql5 = "SELECT *  FROM dimension_type";
$query5 = sqlsrv_query($conn, $sql5);
?>



