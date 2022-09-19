<?php 
 include 'conn.php';
if(isset($_POST['insert'])){
    $stdid=$_POST['StudentId'];
    $stdname=$_POST['StudentName'];
    $stdclass=$_POST['StudentClass'];

    $query="insert into student(id,name,class) values('$stdid','$stdname','$stdclass')";
    $res=$conn->query($query);
    if($res){
        echo "successfully added";
    }else{
        echo $conn->error;
    }
} else if(isset($_POST['update'])){
    $stdid=$_POST['StudentId'];
    $stdname=$_POST['StudentName'];
    $stdclass=$_POST['StudentClass'];

    $query="update student set name='$stdname', class='$stdclass' where id='$stdid'";
    $res=$conn->query($query);
    if($res){
        echo "successfully update";
        
    }else{
        echo $conn->error;
    }
}
if(isset($_GET['id'])){
    $stdid=$_GET['id'];
    $query="DELETE FROM student WHERE id='$stdid'";
    $res=$conn->query($query);
    if($res){
        echo "successfully Deleted";
        header("location:details.php");
    }else{
        echo $conn->error;
    }

}

?>