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
                            <h1>Rajarata University of Sri Lanka</h1><h2><big>RUSL</big></h2> <h2>Faculty of Applied Sciences</h2></center>
                    </div>
                </div>
            </div>
        </nav>
        <div class="panel panel-default">
            <div class="page-header" id="gallery">
                <center><h2>|Graduate  Tracer Study|</h2></center>
            </div>
            <div class="panel-body">
                <form method="post" action="../src/addData.php" role="form">
                    
                    <h3>Student Details</h3>
                    <div class="col-lg-12" style="margin-bottom: 10px;">
                        <div class="col-lg-6" >
                            <div class="form-group">
                                <lable for="surname">Surname</lable>
                                <input type="text" class="form-control" id="surname" name="surname" required="required" placeholder="Enter Surname" >
                            </div>
                            <div class="form-group">
                                <lable for="othername">Other Names</lable>
                                <input type="text" class="form-control" id="othername" name="othername"  required="required" placeholder="Enter Other Names" >
                            </div>
                            <div class="form-group">
                                <lable for="Initials">Name With Initials</lable>
                                <input type="text" class="form-control" id="Initials" name="initials"  required="required" placeholder="Enter Name With Initials" >
                            </div>
                        </div>
                        <div class="col-lg-6" >
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
                                <lable for="Birthday">Date of Birth</lable>
                                <input type="date" class="form-control" id="Birthday" name="birthday"  required="required"  >
                            </div>
                        </div>
                    </div>
                    
                    <h3>University Details</h3>
                    <div class="col-lg-12" style="margin-bottom: 10px;" >
                        <div class="col-lg-6" >
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
                                <option value="B.Sc.(General) Degree in Applied Sciences">B.Sc.(General) Degree in Applied Sciences</option>
                                <option value="B.Sc.(four-year) Degree in Applied Sciences">B.Sc.(four-year) Degree in Applied Sciences</option>
                                <option value="B.Sc.(four-year) Degree in Industrial Mathematics">B.Sc.(four-year) Degree in Industrial Mathematics</option>
                                <option value="B.Sc.(General) Degree in Information & Communication Technology">B.Sc.(General) Degree in Information & Communication Technology</option>
                                <option value="B.Sc.(four-year) Degree in Information & Communication Technology">B.Sc.(four-year) Degree in Information & Communication Technology</option>
                                <option value="B.Sc.(Special-Biodiversity Conservation) Degree in Applied Biology">B.Sc.(Special-Biodiversity Conservation) Degree in Applied Biology</option>
                                <option value="B.Sc.(Special-Microbiology) Degree in Applied Biology">B.Sc.(Special-Microbiology) Degree in Applied Biology</option>
                                <option value="B.Sc.(Special-Fisheries and Aquaculture Management) Degree in Applied Biology">B.Sc.(Special-Fisheries and Aquaculture Management) Degree in Applied Biology</option>
                                <option value="B.Sc.(Joint Major) Degree in Biology and Physics">B.Sc.(Joint Major) Degree in Biology and Physics</option>
                                <option value="B.Sc.(Joint Major) Degree in Chemistry and Physics">B.Sc.(Joint Major) Degree in Chemistry and Physics</option>
                                <option value="B.Sc.(Special) Degree in Chemistry">B.Sc.(Special) Degree in Chemistry</option>
                                <option value="B.Sc.(General) Degree in Health Promotion">B.Sc.(General) Degree in Health Promotion</option>
                                <option value="B.Sc.(Special) Degree in Health Promotion">B.Sc.(Special) Degree in Health Promotion</option>
                            </select>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group">
                                <label>Year of Admission</label>
                                <input type="text" class="form-control" id="admission" name="admission"  required="required" placeholder="2010"  >
                            </div>
                            <div class="form-group">
                                <label>Year of Graduation</label>
                                <input type="text" class="form-control" id="graduation" name="graduation"  required="required" placeholder="2014" >
                            </div>
                        </div>
                    </div>
                   
                    <h3>Employee Details</h3>
                    <div class="col-lg-12" style="margin-bottom: 10px;" >
                        <div class="col-lg-6" >
                            <div class="form-group">
                                <lable for="Organization">Organization</lable>
                                <input type="text" class="form-control" id="Organization" name="organization" required="required" placeholder="Enter Name" >
                            </div>
                            <div class="form-group">
                                <lable for="Designation">Designation</lable>
                                <input type="text" class="form-control" id="Designation" name="designation" required="required" placeholder="Enter Designation" >
                            </div>
                            <div class="form-group">
                                <lable for="Capacity">Your Capacity in the Organization</lable>
                                <textarea class="form-control" id="Capacity" name="capacity" rows="4" placeholder="Job Description" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <lable for="Relevant">Job Relevant of the Degree Obtained From RUSL</lable>
                                <textarea class="form-control" id="Relevant" name="relevant" rows="5"  required="required" placeholder="Comment"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group">
                                <lable for="OrganizationAdd">Organization Address</lable>
                                <textarea class="form-control" id="OrganizationAdd" name="organizationAdd" rows="6" placeholder="Enter Organization Address" required="required"></textarea>
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
                                <option value="100,000<above">100,000 above </option>
                            </select>
                            <div class="form-group">
                                <lable for="CurrentSalary">Current Salary</lable>
                                <input type="number" class="form-control" id="CurrentSalary" name="currentSalary" required="required" placeholder="Enter Current Salary" >
                            </div>

                        </div>
                    </div>
                    
                    <h3>Present Contact Details</h3>
                    <div class="col-lg-12" style="margin-bottom: 10px;" >
                        <div class="col-lg-6" >
                            <div class="form-group">
                                <lable for="PermanentAddress">Permanent Address</lable>
                                <textarea class="form-control" id="PermanentAddress" name="permanentAddress" rows="6" placeholder="Enter Permanent Address" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <lable for="Email">Email</lable>
                                <input type="email" class="form-control" id="Email" name="email" required="required" placeholder="Enter Email" >
                            </div>
                            <div class="form-group">
                                <lable for="ContactNumber">Contact Number</lable>
                                <input type="number" class="form-control" id="ContactNumber" name="contactNumber" required="required" placeholder="Enter Contact Number" >
                            </div>
                        </div>
                        <div class="col-lg-6" >
                            <div class="form-group">
                                <lable for="Information">Any Other Information</lable>
                                <textarea class="form-control" id="Information" name="information" rows="6" required="required" placeholder="Enter Any Other Information" ></textarea>
                            </div>
                            <br/>                        
                            <button type="reset" class="btn btn-default col-sm-6">Reset</button>
                            <button type="submit" class="btn btn-default col-sm-6">Submit</button>

                        </div>
                    </div>


                </form>
            </div>
        </div>
    </body>
</html>
