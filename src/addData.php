<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'db.php';


$sname = (isset($_POST['surname']) ? $_POST['surname'] : '');
$oname = (isset($_POST['othername']) ? $_POST['othername'] : '');
$nameins = (isset($_POST['initials']) ? $_POST['initials'] : '');
$gender = (isset($_POST['gender']) ? $_POST['gender'] : '');
$dob = (isset($_POST['birthday']) ? $_POST['birthday'] : '');
$regNo = (isset($_POST['regsterd']) ? $_POST['regsterd'] : '');
$department = (isset($_POST['department']) ? $_POST['department'] : '');
$degree = (isset($_POST['degree']) ? $_POST['degree'] : '');
$duration = (isset($_POST['duration']) ? $_POST['duration'] : '');
$organization = (isset($_POST['organization']) ? $_POST['organization'] : '');
$designation = (isset($_POST['designation']) ? $_POST['designation'] : '');
$orgAddress = (isset($_POST['organizationAdd']) ? $_POST['organizationAdd'] : '');
$orgTpNo = (isset($_POST['organizationTelephone']) ? $_POST['organizationTelephone'] : '');
$salaryStr = (isset($_POST['salary']) ? $_POST['salary'] : '');
$salaryCur = (isset($_POST['currentSalary']) ? $_POST['currentSalary'] : '');
$perAddress = (isset($_POST['permanentAddress']) ? $_POST['permanentAddress'] : '');
$email = (isset($_POST['email']) ? $_POST['email'] : '');
$contact = (isset($_POST['contactNumber']) ? $_POST['contactNumber'] : '');


$query = "INSERT INTO stdDetails (sname, oname, nameins, gender, dob, regNo, "
        . "department, degree, duration, organization, designation, orgAddress, "
        . "orgTpNo, salaryStr, salaryCur, perAddress, email, contact) VALUES "
        . "('" . $sname . "','" . $oname . "','" . $nameins . "','" . $gender . "','" . $dob . "','" . $regNo . "',"
        . "'" . $department . "','" . $degree . "','" . $duration . "','" . $organization . "','" . $designation . "',"
        . "'" . $orgAddress . "','" . $orgTpNo . "','" . $salaryStr . "','" . $salaryCur . "','" . $perAddress . "',"
        . "'" . $email . "','" . $contact . "')";


if (mysqli_query($conn, $query)) {
    echo "New record created successfully.";
    mysqli_close($conn);
    header('Location: http://localhost/AluminaProject/public_html/');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    mysqli_close($conn);
}
