<?php

require_once 'db.php';

$salary = (isset($_POST['salary']) ? $_POST['salary'] : '');
$degree = (isset($_POST['degree']) ? $_POST['degree'] : '');
$department = (isset($_POST['department']) ? $_POST['department'] : '');
$regno = (isset($_POST['regno']) ? $_POST['regno'] : '');

$query = "select * FROM stdDetails WHERE checked=1";

$query.=($salary != '' ? " AND salaryStr='" . $salary . "'" : "");

$query.=($degree != '' ? " AND salaryStr='" . $degree . "'" : "");

$query.=($department != '' ? " AND salaryStr='" . $department . "'" : "");

$query.=($regno != '' ? " AND salaryStr='" . $regno . "'" : "");

$query.=";";

$query = "select * from stdDetails";
$result = mysqli_query($conn, $query);


// if (isset($result)) {
  $_SESSION['result'] = $result;
    mysqli_close($conn);
    header('Location: http://localhost/AluminaProject/private_html/');
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//     mysqli_close($conn);
// }
