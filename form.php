<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Add Student Information</h3>

    <div class="format">
    <form action="formdatabase.php" method="POST" class="form">
        Enter Student ID: <input type="text" name="Stud_ID" id="ID" placeholder="Ex. 22BGU1188" required><br>
        Enter Student Name: <input type="text" name="Stud_name" id="name" placeholder="Ex. Juan Dela Cruz"required><br>
        Choose Student Course: <select name="Stud_course" id="course" required>
            <option value="BSIT">BS Information Technology</option>
            <option value="BSCS">BS Computer Science</option>
            <option value="BSDS">BS Data Science</option>
            <option value="BSIS">BS Information System</option>
            <option value="BSMIS">BS Management Information System</option>
        </select><br>

        Choose Year Level: <select name="Stud_year" id="level"required>
        <option value="First">First Year</option>
        <option value="Second">Second Year</option>
        <option value="Third">Third Year</option>
        <option value="Fourth">Fourth Year</option>
        </select><br>

        Student Status: <input type="Radio" name="Stud_status" value="Regular" id="status"required>Regular Student
        &nbsp; &nbsp;&nbsp;&nbsp;
                        <input type="Radio" name="Stud_status" value="Irregular">Irregular Student
        <br>


        Gender: <input type="Radio" name="Gender" value="Male" id="gender">Male
        &nbsp; &nbsp;&nbsp;&nbsp;
                <input type="Radio" name="Gender" value="Female">Female

        <br>
        <input type="submit" value="Add Student" id="submit">
    </form>
    </div>
<?php

?> 
</body>
</html>