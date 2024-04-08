<!DOCTYPE html>
<html>
 
<head>
    <title>Submit student details</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => student_admissions
        $conn = mysqli_connect("localhost", "root", "", "student_admissions");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $middle_name = $_REQUEST['middle_name'];
        $last_name =  $_REQUEST['last_name'];
        $mother_name = $_REQUEST['mother_name'];
        $email = $_REQUEST['email'];
        $gender = $_REQUEST['gender'];
        $religion = $_REQUEST['religion'];
        $caste = $_REQUEST['caste'];
        $address = $_REQUEST['address'];
        $city = $_REQUEST['city'];
        $stream_selection = $_REQUEST['stream_selection'];
        $course_selection = $_REQUEST['course_selection'];
        $twelthBoard_percentage = $_REQUEST['twelthBoard_percentage'];
        $phone_number = $_REQUEST['phone_number'];
        
         
        // Performing insert query execution
        // here our table name is student_details
        $sql = "INSERT INTO student_details VALUES ('$first_name','$middle_name','$last_name','$mother_name','$email','$gender','$religion','$caste','$address','$city','$stream_selection','$course_selection','$twelthBoard_percentage','$phone_number')";
         
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Data stored in the database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo "Data Entered: <br>";
            echo "First Name: $first_name<br>";
            echo "Middle Name: $middle_name<br>";
            echo "Last Name: $last_name<br>";
            echo "Mother Name: $mother_name<br>";
            echo "Email: $email<br>";
            echo "Religion: $religion<br>";
            echo "Caste: $caste<br>";
            echo "Address: $address<br>";
            echo "City: $city<br>";
            echo "Course selected: $course_selection<br>";
            echo "Twelth Board percentage: $twelthBoard_percentage<br>";
            echo "Phone number: $phone_number<br>";
            
            
        } else {
            echo "ERROR: Something went wrong. "
                . mysqli_error($conn);
        }

         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
