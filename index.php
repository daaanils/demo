<?php 

    #This is my comment
    // $first_name = 10 + 10 / 2 * 50;

    // echo $first_name;

    // $age = 18;

    // if($age >= 18) {
    //     echo "You are in legal age";
    // }else {
    //     echo "You are not in legal age";
    // }

    // $counter = 1;

    // while($counter <= 10) {
    //     echo $counter;
    //     $counter++;
    // }

    // for ($count = 0; $count <= 10; $count++) {
    //     echo $count;
    // }

    // $students = array("Jordan", "Jhayel", "Jaycel");

    // foreach($students as $student) {
    //     echo $student. " is present!";
    // }

    // $first_name = "Jaycel";
    // $last_name = "Montes";

    // echo $first_name. " ". $last_name;
    

    // function addNumbers($x, $y) {
    //     echo $x + $y;
    // }

    // addNumbers(10, 15);

    $students = array("Jaycel Montes", "Jordan Montes", "Jhayel Montes",)

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container m-5 p-5 border shadow">
        <h2 class="fw-bold">PHP DEMO</h2>

        <hr>

        <form method="POST" action="newstudent.php">
            
            <label for="studentname">Add new student:</label>
            <input type="text" id="studentname" name="studentname" class="form-control">
            <button class="mt-1 btn btn-dark" type="submit">Add</button>

        </form>
            <ul>
                <?php 
                    foreach ($students as $student) {
                        echo "<li>". $student ."</li>";
                    }

                
                
                ?>
            </ul>

    </div>


    
   


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</body>
</html>