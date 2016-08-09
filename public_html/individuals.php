<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require '../src/db.php';

$query = "select * FROM stdDetails WHERE checked=1";

$result = mysqli_fetch_assoc(mysqli_query($conn, $query));
?>


<html>
    <head>
        <title>RUSL ALUMNI</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="commons/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="commons/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="commons/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </head>
    <body>

        <nav class="navbar navbar navbar-static-top" role="navigation" style="margin:0px;" >
            <div class="page-header no-margin no-margin"  >
                <div class="jumbotron">
                    <div class="container">
                        <center>
                            <img src="main.png" alt="RUSL LOGO" height="180" width="140"/>
                            <h1>Rajarata University of Sri Lanka</h1><h2><big>RUSL</big></h2> <h2>Faculty of Applied Sciences</h2>
                        </center>
                    </div>
                </div>
            </div>
        </nav>
        <div class="panel panel-default">
            <div class="page-header" id="gallery">
                <center><h2>|Graduate  Tracer Study|</h2></center>
            </div>
            <div class="panel-body">

                <h3>Student Details</h3>
                <div class="col-lg-12" style="margin-bottom: 10px;">
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <lable for="surname">Surname</lable>
                            <input type="text" disabled="" class="form-control" id="surname" name="surname" value="<?=  $result["surname"] ?>" >
                        </div>
                        <div class="form-group">
                            <lable for="othername">Other Names</lable>
                            <input type="text" disabled="" class="form-control" id="othername" name="othername" value="<?=  $result["othername"] ?>" >
                        </div>
                        <div class="form-group">
                            <lable for="Initials">Name With Initials</lable>
                            <input type="text" disabled="" class="form-control" id="Initials" name="initials" value="<?=  $result["initials"] ?>" >
                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <lable>Gender</lable>
                            <input type="text" disabled="" class="form-control" id="gender" name="gender" value="<?=  $result["gender"] ?>" >                            
                        </div>
                        <div class="form-group">
                            <lable for="Birthday">Date of Birth</lable>
                            <input type="text" disabled="" class="form-control" id="Birthday" name="birthday" value="<?=  $result["dob"] ?>" > 
                        </div>
                    </div>
                </div>

                <h3>University Details</h3>
                <div class="col-lg-12" style="margin-bottom: 10px;" >
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <lable for="regsterd">Registration Number</lable>
                            <input type="text" disabled="" class="form-control" id="Regsterd" name="regsterd" value="<?=  $result["regNo"] ?>" >
                        </div>
                        <div class="form-group">
                            <label for="Department">Department</label>
                            <input type="text" disabled="" class="form-control" id="Department" name="department" value="<?=  $result["department"] ?>" >                            
                        </div>
                        <div class="form-group">
                            <label for="Degree">Degree</label>
                            <input type="text" disabled="" class="form-control" id="Degree" name="degree" value="<?=  $result["degree"] ?>" >                            
                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <label>Year of Admission</label>
                            <input type="text" disabled="" class="form-control" id="admission" name="admission" value="<?=  $result["admission"] ?>" >
                        </div>
                        <div class="form-group">
                            <label>Year of Graduation</label>
                            <input type="text" disabled="" class="form-control" id="graduation" name="graduation" value="<?=  $result["graduation"] ?>" >
                        </div>
                    </div>
                </div>

                <h3>Employee Details</h3>
                <div class="col-lg-12" style="margin-bottom: 10px;" >
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <lable for="Organization">Organization</lable>
                            <input type="text" disabled="" class="form-control" id="Organization" name="organization" value="<?=  $result["organization"] ?>" >
                        </div>
                        <div class="form-group">
                            <lable for="Designation">Designation</lable>
                            <input type="text" disabled="" class="form-control" id="Designation" name="designation" value="<?=  $result["designation"] ?>" >
                        </div>
                        <div class="form-group">
                            <lable for="Capacity">Your Capacity in the Organization</lable>
                            <textarea class="form-control" disabled="" id="Capacity" name="capacity" rows="4" ><?=  $result["capacity"] ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable for="Relevant">Job Relevance of the Degree Obtained From RUSL</lable>
                            <textarea class="form-control" disabled="" id="Relevance" name="relevance" rows="5" ><?=  $result["relevance"] ?></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <lable for="OrganizationAdd">Organization Address</lable>
                            <textarea class="form-control" disabled="" id="OrganizationAdd" name="organizationAdd" rows="6"><?=  $result["orgAddress"] ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable for="OrganizationTelephone">Organization Telephone Number</lable>
                            <input type="number" disabled="" class="form-control" id="OrganizationTelephone" name="organizationTelephone" value="<?=  $result["orgTpNo"] ?>" >
                        </div>
                        <div class="form-group">
                            <label>Starting Salary</label>
                            <input type="text" disabled="" class="form-control" id="Salary" name="salary" value="<?=  $result["salary"] ?>" > 
                        </div>
                        <div class="form-group">
                            <lable for="CurrentSalary">Current Salary</lable>
                            <input type="number" disabled="" class="form-control" id="CurrentSalary" name="currentSalary" value="<?=  $result["currentSalary"] ?>">
                        </div>
                    </div>
                </div>

                <h3>Present Contact Details</h3>
                <div class="col-lg-12" style="margin-bottom: 10px;" >
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <lable for="PermanentAddress">Permanent Address</lable>
                            <textarea class="form-control" disabled="" id="PermanentAddress" name="permanentAddress" rows="6" ><?=  $result["perAddress"] ?></textarea>
                        </div>
                        <div class="form-group">
                            <lable for="Email">Email</lable>
                            <input type="email" disabled="" class="form-control" id="Email" name="email" value="<?=  $result["email"] ?>" >
                        </div>
                        <div class="form-group">
                            <lable for="ContactNumber">Contact Number</lable>
                            <input type="number" disabled="" class="form-control" id="ContactNumber" name="contactNumber" value="<?=  $result["contact"] ?>" >
                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <div class="form-group">
                            <lable for="Information">Any Other Information</lable>
                            <textarea class="form-control" disabled="" id="Information" name="information" rows="6"><?=  $result["information"] ?></textarea>
                        </div>
                        <br/>                        
                        <!--                            <button type="reset" class="btn btn-default col-sm-6">Reset</button>
                                                    <button type="submit" class="btn btn-default col-sm-6">Submit</button>-->

                    </div>
                </div>


            </div>
        </div>
    </body>
</html>
