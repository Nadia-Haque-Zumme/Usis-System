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
    <table id="tabledata" class=" table table-striped table-dark">

                    <tr >
                        <th> ID </th>
                        <th> Name </th>
                        <th> Department </th>
                        <th> Gender </th>
                        <th> Phone Number</th>
                        <th> Email ID </th>
                        <th> Update </th>
                        <th> Delete </th>


                    </tr>
</body>