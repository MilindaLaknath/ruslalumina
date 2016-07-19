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

        <div class="container-fluid" style="margin-top: 20px">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default" role="navigation">

                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                            </button> <a class="navbar-brand">Search</a>
                        </div>

                        <form class="navbar-form navbar-left" role="search" method="post" action="../src/loadViewData.php" >

                            <div class="input-group">
                                <select class="btn dropdown-toggle" id="Salary" name="salary">
                                    <option value="" >Salary</option>
                                    <option value="20,000-30,000">20,000-30,000</option>
                                    <option value="30,000-50,000">30,000-50,000</option>
                                    <option value="50,000-75,000">50,000-75,000</option>
                                    <option value="75,000-100,000">75,000-100,000</option>
                                    <option value="100,000< above">100,000< above</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="btn dropdown-toggle" id="Degree" name="degree" >
                                    <option value="">Degree</option>
                                    <option value="B.Sc.degree in Applied Sciences">B.Sc.degree in Applied Sciences</option>
                                    <option value="B.Sc.degree in Information & Communication Technology">B.Sc.degree in Information & Communication Technology</option>
                                    <option value="B.Sc.degree in Applied Biology">B.Sc.degree in Applied Biology</option>
                                    <option value="B.Sc.degree in Health Promotion">B.Sc.degree in Health Promotion</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select class="btn dropdown-toggle" id="Department" name="department">
                                    <option value="">Department</option>
                                    <option value="Physical Sciences">Physical Sciences</option>
                                    <option value="Biological Sciences">Biological Sciences</option>
                                </select>
                            </div>


                            <div class="input-group" >
                                <input class="form-control" style="width: 300px" name="regno" type="text" placeholder="Registration Number" />
                                <span class="input-group-btn">
                                    <input class="btn btn-default" style="width: 150px" type="submit" value="Search"/>
                                </span>
                            </div>
                        </form>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Details Table-->
        <?php
        if (isset($_SESSION['result'])) {
            $result = $_SESSION['result'];
            ?>
            <div class="container-fluid" style="margin-top: 20px">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Surname</th>
                                    <th>Other Names</th>
                                    <th>Name With Initials</th>
                                    <th>Gender</th>
                                    <th>Date of Birthday</th>
                                    <th>Registration No</th>
                                    <th>Department</th>
                                    <th>Degree</th>
                                    <th>Duration</th>
                                    <th>Organization</th>
                                    <th>Designation</th>
                                    <th>Organization Address</th>
                                    <th>Organization Tel</th>
                                    <th>Starting Salary</th>
                                    <th>Current Salary</th>
                                    <th>Permanent Address</th>
                                    <th>Email</th>
                                    <th>Contact</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysql_fetch_assoc($result)) {
                                    ?>

                                    <tr>
                                        <td>
                                            <?= $row["sname"] ?>
                                        </td>
                                        <td>
                                            <?= $row["oname"] ?>
                                        </td>
                                        <td>
                                            <?= $row["nameins"] ?>
                                        </td>
                                        <td>
                                            <?= $row["gender"] ?>
                                        </td>
                                        <td>
                                            <?= $row["dob"] ?>
                                        </td>
                                        <td>
                                            <?= $row["regNo"] ?>
                                        </td>
                                        <td>
                                            <?= $row["department"] ?>
                                        </td>
                                        <td>
                                            <?= $row["degree"] ?>
                                        </td>
                                        <td>
                                            <?= $row["duration"] ?>
                                        </td>
                                        <td>
                                            <?= $row["organization"] ?>
                                        </td>
                                        <td>
                                            <?= $row["designation"] ?>
                                        </td>
                                        <td>
                                            <?= $row["orgAddress"] ?>
                                        </td>
                                        <td>
                                            <?= $row["orgTpNo"] ?>
                                        </td>
                                        <td>
                                            <?= $row["salaryStr"] ?>
                                        </td>
                                        <td>
                                            <?= $row["salaryCur"] ?>
                                        </td>
                                        <td>
                                            <?= $row["perAddress"] ?>
                                        </td>
                                        <td>
                                            <?= $row["email"] ?>
                                        </td>
                                        <td>
                                            <?= $row["contact"] ?>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

    </body>
</html>
