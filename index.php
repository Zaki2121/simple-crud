<?php  include 'conn.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
      <?php
      
       if(isset($_GET['id'])){
           $id=$_GET['id'];
           $name=$_GET['name'];
           $class=$_GET['class'];

       }
      
      
      
      
      ?>

    
    <div class="container">
        
        <div class="row justify-content-center m-2">

        <div class="col-sm-8 m-2">
        <h1>Student Registration  Form </h1>
            <div class="card">
                
                <form action="operation.php" method="POST" >
                    <div class="form-group m-2">
                        <label for="">Student_id</label>
                        <input type="text" name="StudentId" class="form-control" value="<?php echo $id ?>">

                    </div>

                    <div class="form-group m-2">
                        <label for="Student_id">Student_Name</label>
                        <input type="text" name="StudentName" class="form-control" value="<?php echo $name ?>">
                    </div>

                    <div class="form-group m-2">
                        <label for="Student_id">Student_Class</label>
                        <input type="text" name="StudentClass" class="form-control" value="<?php echo $class ?>">
                    </div>
                 <button  type="submit" name="insert" class="btn btn-success m-2">Save Info </button>
                 <button  type="submit" name="update" class="btn btn-info m-2">Update Info </button>
                </form>
            </div>
        </div>
        </div>
    </div>


    



    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>