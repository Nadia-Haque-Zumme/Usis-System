<?php
include 'connection.php';
$q="SELECT * from student inner JOIN taken_course on student.student_ID=taken_course.student_ID;";
  $result = mysqli_query($connection,$q);
  //echo 'x';
  $xx=mysqli_fetch_all($result,MYSQLI_ASSOC);
  //echo 'x';
  $x=1;
  foreach($xx as $a){
  	$c=$a['Name'];
  	$v=$a['course_code1'];
  	echo $c."-----".$v."</br>";
}

  ?>