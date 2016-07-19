<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './db.php';

$salary = (isset($_POST['salary']) ? $_POST['salary'] : '');
$degree = (isset($_POST['degree']) ? $_POST['degree'] : '');
$department = (isset($_POST['department']) ? $_POST['department'] : '');
$regno = (isset($_POST['regno']) ? $_POST['regno'] : '');

$query = "SELECT (sname, oname, nameins, gender, dob, regNo, "
        . "department, degree, duration, organization, designation, orgAddress, "
        . "orgTpNo, salaryStr, salaryCur, perAddress, email, contact) FROM stdDetails WHERE checked='1'";

$query.=($salary != '' ? " AND salaryStr='" . $salary . "'" : "");

$query.=($salary != '' ? " AND salaryStr='" . $degree . "'" : "");

$query.=($salary != '' ? " AND salaryStr='" . $department . "'" : "");

$query.=($salary != '' ? " AND salaryStr='" . $regno . "'" : "");

$query.=";";


$result = mysqli_query($conn, $query);

$_SESSION["result"] = $result;


header('Location: http://localhost/AluminaProject/private_html/');
exit;
