<?php
    session_start();
    $mysqli = new mysqli('localhost','root_ad','sanaol','labsql') or die(mysqli_error("Error Parse!".$mysqli->error));

    $id = 0;
    $fname ='';
    $lname ='';
    $age ='';
    $addr ='';
    $update = false;

    if (isset($_POST['save'])){
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $age =$_POST['age'];
        $address =$_POST['address'];

    $mysqli->query("INSERT INTO studsol (fname, lname, age, addr) VALUES ('$fname','$lname','$age','$address')") or die($mysqli->error);

    header("location: CjMateoHTML.php");
    }
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM studsol WHERE id=$id") or die($mysqli->error());
        header("location: CjMateoHTML.php");
    }
    if (isset($_GET['edit'])){
        $id=$_GET['edit'];
        $update = true;
        $result = $mysqli->query("SELECT * FROM studsol WHERE id=$id") or die($mysqli->error());
        if(count(array($result))==1){
            $row = $result->fetch_array();
            $fname = $row['fname'];
            $lname = $row['lname'];
            $age = $row['age'];
            $addr = $row['addr'];
        }
    }
    if (isset($_POST['update'])){
        $id = $_POST['ID'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $age = $_POST['age'];
        $addr = $_POST['addr'];
        $mysqli->query("UPDATE studsol SET fname='$fname', lname ='$lname', age='age', addr='addr' WHERE  id=$id") or die ($mysqli->error);

        header('location: CjMateoHTML.php');
    }
?>