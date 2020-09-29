
<?php include 'connection.php'; ?>

<?php

include 'connection.php';

if(isset($_POST['done'])){


 $id = $_POST['inputID'];
 $name = $_POST['inputName'];
 $dep = $_POST['inputDepartment'];
 $gen = $_POST['inputGender'];
 $pn = $_POST['inputNumber'];
 $eid = $_POST['inputEmail'];
 
 

 $query1 = " INSERT INTO `student`(`student_ID`,`name`,`department`,`gender`,`phone_number`,`email_id`) VALUES ('$id','$name', '$dep', '$gen', '$pn',  '$eid')";

  $query = mysqli_query($connection,$query1);


}
?>

<!doctype html>
<html lang="en">

<head>

<style>
body  {
    background-image: url("paper.gif");
    background-color: #FFF6EB;
}
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Student info</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>

<body>
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@mdo">Insert Student Data</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Insert Student Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                        
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Student ID</label>
                                            <input name="inputID" type="text" class="form-control" placeholder="Student ID">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Student name</label>
                                            <input name="inputName" type="text" class="form-control" placeholder="Student Name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Department</label>
                                            <input name="inputDepartment" type="text" class="form-control" placeholder="Department">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Gender</label>
                                            <input name="inputGender" type="text" class="form-control" placeholder="Gender">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Phone Number</label>
                                            <input name="inputNumber" type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Email ID</label>
                                            <input name="inputEmail" type="text" class="form-control" placeholder="Email ID">
                                        </div>
                                    
                                    <div class="modal-footer ml-auto">
                                        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
</body>