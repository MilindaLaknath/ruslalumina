<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>RUSL ALUMNI</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>    
    </head>
    <body>

        <nav class="navbar navbar navbar-static-top" role="navigation" style="margin:0px;" >
            <div class="page-header no-margin no-margin"  >
                <div class="jumbotron">
                    <div class="container">
                        <center>
                            <img src="main.png" alt="RUSL LOGO" height="180" width="140"/>
                            <h1>Rajarata University of Sri Lanka</h1> <br><h2>Faculty of Applied Sciences</h2></center>
                    </div>
                </div>
            </div>
        </nav>
        <div class="panel panel-default">
            <div class="page-header" id="gallery">
                <center><h2>|Alumni  Tracer System|</h2></center>
            </div>
            <div class="panel-body">
                <form method="post" action="../src/addData.php" role="form">
                    <h3>Student Details</h3>
                    <div class="form-group">
                        <lable for="surname">Surname</lable>
                        <input type="text" class="form-control" id="surname" name="surname" required="required" placeholder="Enter Surename" >
                    </div>
                    <div class="form-group">
                        <lable for="othername">Other Names</lable>
                        <input type="text" class="form-control" id="othername" name="othername"  required="required" placeholder="Enter Other Name" >
                    </div>
                    <div class="form-group">
                        <lable for="Initials">Name With Initials</lable>
                        <input type="text" class="form-control" id="Initials" name="initials"  required="required" placeholder="Enter Name With Initials" >
                    </div>
                    <lable>Gender</lable>   
                    <div class="radio">
                        <label>
                            <input type="radio" name="gender" id="optionsRadios1" value="Male" checked>
                            Male
                        </label>
                        <label>
                            <input type="radio" name="gender" id="optionsRadios2" value="Female">
                            Female
                        </label>
                    </div> 
                    <div class="form-group">
                        <lable for="Birthday">Date of Birthday</lable>
                        <input type="date" class="form-control" id="Birthday" name="birthday"  required="required"  >
                    </div>

                    <h3>University Details</h3>
                    <div class="form-group">
                        <lable for="Regsterd">Registration Number</lable>
                        <input type="text" class="form-control" id="Regsterd" name="regsterd" required="required" placeholder="ICT/2011/2012/001" >
                    </div>
                    <label>Department</label>
                    <select class="selectpicker" id="Department" name="department">
                        <option value="Physical Sciences">Physical Sciences</option>
                        <option value="Biological Sciences">Biological Sciences</option>
                    </select>
                    <br> <br> <label>Degree</label>
                    <select class="selectpicker" id="Degree" name="degree">
                        <option value="B.Sc.degree in Applied Sciences">B.Sc.degree in Applied Sciences</option>
                        <option value="B.Sc.degree in Information & Communication Technology">B.Sc.degree in Information & Communication Technology</option>
                        <option value="B.Sc.degree in Applied Biology">B.Sc.degree in Applied Biology</option>
                        <option value="B.Sc.degree in Health Promotion">B.Sc.degree in Health Promotion</option>
                    </select>
                    <br><br><label>Degree Duration</label>
                    <select class="selectpicker" id="Duration" name="duration">
                        <option value="Three Year">Three Year</option>
                        <option value="Four Year">Four Year</option>
                    </select>
                    <h3>Employee Details</h3>
                    <div class="form-group">
                        <lable for="Organization">Organization</lable>
                        <input type="text" class="form-control" id="Organization" name="organization" required="required" placeholder="Enter Name" >
                    </div>
                    <div class="form-group">
                        <lable for="Designation">Designation</lable>
                        <input type="text" class="form-control" id="Designation" name="designation" required="required" placeholder="Enter Name" >
                    </div>
                    <div class="form-group">
                        <lable for="OrganizationAdd">Organization Address</lable>
                        <textarea class="form-control" id="OrganizationAdd" name="organizationAdd" rows="8" placeholder="Enter Organization Address" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <lable for="OrganizationTelephone">Organization Telephone Number</lable>
                        <input type="number" class="form-control" id="OrganizationTelephone" name="organizationTelephone" required="required" placeholder="Enter Organization Telephone Number" >
                    </div>
                    <label>Starting Salary</label>
                    <select class="selectpicker" id="Salary" name="salary">
                        <option value="20,000-30,000">20,000-30,000</option>
                        <option value="30,000-50,000">30,000-50,000</option>
                        <option value="50,000-75,000">50,000-75,000</option>
                        <option value="75,000-100,000">75,000-100,000</option>
                        <option value="100,000< above">100,000< above </option>
                    </select>
                    <div class="form-group">
                        <lable for="CurrentSalary">Current Salary</lable>
                        <input type="number" class="form-control" id="CurrentSalary" name="currentSalary" required="required" placeholder="Enter Current Salary" >
                    </div>
                    <h3>Contact Details</h3>
                    <div class="form-group">
                        <lable for="PermanentAddress">Permanent Address</lable>
                        <textarea class="form-control" id="PermanentAddress" name="permanentAddress" rows="8" placeholder="Enter Permanent Address" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <lable for="Email">Email</lable>
                        <input type="email" class="form-control" id="Email" name="email" required="required" placeholder="Enter Email" >
                    </div>
                    <div class="form-group">
                        <lable for="ContactNumber">Contact Number</lable>
                        <input type="number" class="form-control" id="ContactNumber" name="contactNumber" required="required" placeholder="Enter Contact Number" >
                    </div>
                    <center><button type="submit" class="btn btn-default">Submit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </center>  
                </form>
            </div>
        </div>
    </body>
</html>
