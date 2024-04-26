<?php 
    #data in from from
    $studentID = $_POST['Stud_ID'];
    $studentName = $_POST['Stud_name'];
    $studentCourse = $_POST['Stud_course'];
    $studentYear = $_POST['Stud_year'];
    $studentStatus = $_POST['Stud_status'];
    $gender = $_POST['Gender'];


    #connect to database;
    $host = "localhost";
    $username = "username";
    $password = "password";
    $db = "formdb1";

    $conn = new mysqli($host, $username, $password,$db);

    if ($conn-> connect_error){
        echo "Connection Error".$conn->connect_error;
    }
    
    $query = "INSERT INTO formtbl(studentID, studentName, studentCourse, studentYear, studentStatus, gender)VALUES
    ('$studentID',
     '$studentName',
     '$studentCourse',
     '$studentYear',
     '$studentStatus',
     '$gender');";

    if(mysqli_query($conn, $query)){
        echo"Form Filled Successfully";
    }else{
        "Something went Wrong";
    }


?>
