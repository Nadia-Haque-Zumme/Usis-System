
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>BRACU Network (BUN)</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
            <img src="bracu.png" class="img-thumbnail" alt="Cinque Terre">
            <br> <br> <br>
            <h1 class="display-6 text-center">BRACU Network (BUN)</h1>
            <h1 class="text-dark text-center"> Skill Search </h1>
            </div>
        </div>
        
                <br>
                <a href = "home.php"> <button type="button" class="btn btn-dark">Home</button></a>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal1"
                    data-whatever="@mdo"  >Update Skill</button>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Insert Student ID & Skill</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Student ID</label>
                                            <input name="id" type="text" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Skills</label>
                                            <input name="ss" type="text" class="form-control">
                                        </div>
                                    </div>
                                    


                                    
                                    <div class="modal-footer ml-auto">
                                        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                

                    
                    <div class= container>
                <div class="col-sm-6 offset-9">
                
                <form class="form-inline" method="get" action="search3.php">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Search Skill</label>
                    <input type="text" class="form-control" name="searchFor" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-dark mb-2">Search Skill</button>
             </form>

                    
                

                                        </div>
                                    </div>
                
                            
                            <div class="modal-body">
                                    <table id="tabledata" class=" table table-striped table-dark">
                                    

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Student Email ID </th> 
                                                <th> Skills </th>
                                            
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN skill_search ss on s.student_ID=ss.student_ID";
                        
                        $show5 = mysqli_query($connection,$qq);
                        
                        while($res = mysqli_fetch_array($show5)){
                        ?>
                                            <tr class="text-center">
                                                <td>
                                                    <?php echo $res['student_ID'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['Name'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['phone_number']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['email_id'];  ?>
                                                </td>
                                               <td>
                                                    <?php echo $res['skill'];  ?>
                                                </td>
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>


    </div>






    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabledata').DataTable();
        })
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>