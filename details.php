<?php include 'conn.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
   <div class="container m-2">
       <div class="row justify-content-center">
           <div class="col-sm-8">
               <table class="table">
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>Name</th>
                           <th>Class</th>
                           <th>Actions</th>
                       </tr>
                   </thead>
                   <tbody>
                       <?php 
                       
                       $query="select * from student";
                       $res=$conn->query($query);
                       $htmltable="";
                       if($res){
                         $htmltable .="<tr>";
                         while($row=$res->fetch_assoc()){
                        $htmltable .="<td>".$row['id']."</td>";
                        $htmltable .="<td>".$row['name']."</td>";
                        $htmltable .="<td>".$row['class']."</td>";

                        $link="index.php?" . "id=" .$row['id']. "&name=". $row['name']. "&class=" .$row['class'];
                        $del_link="operation.php?" . "id=" .$row['id'];
                        $htmltable .="<td>".'<a  href="'.$link.'"class="btn btn-success m-1" >Update</a><a  href="'.$del_link.'"class="btn btn-danger">Delete</a>'."</td>";
                        $htmltable .="</tr>";
                         }
                         echo $htmltable;   

                       }

                       else{
                           echo $conn->error;
                       }
                       
                       
                       
                       
                       
                       ?>
                       
                       
                       
                   </tbody>
               </table>
           </div>
       </div>
   </div>    
</body>
</html>