<!DOCTYPE html>
<html>
 
<head>
    <title>Submit student feedback</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => student_feedback
        $conn = mysqli_connect("localhost", "root", "", "student_admissions");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all values from the form data(input)
        $name =  $_REQUEST['name'];
        $department = $_REQUEST['department'];
        $campus_rating =  $_REQUEST['campus_rating'];
        $college_visit_date = $_REQUEST['college_visit_date'];
        $website_rating = $_REQUEST['website_rating'];
        $helpful_content = $_REQUEST['helpful_content'];
        $email_address = $_REQUEST['email_address'];
        
        
         
        // Performing insert query execution
        // here our table name is student_feedback
        $sql = "INSERT INTO student_feedback VALUES ('$name','$department','$campus_rating','$college_visit_date','$website_rating','$helpful_content','$email_address')";
         
        if (mysqli_query($conn, $sql)) {
            echo "<h3>Feedback submitted successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo "Data Entered: <br>";
            echo "Your Name: $name<br>";
            echo "Your Department Name: $department<br>";
            echo "Campus Rating given by you to our college: $campus_rating<br>";
            echo "Your college visiting date: $college_visit_date<br>";
            echo "Rating given by you to our college website: $website_rating<br>";
            echo "Your found our website content helpful: $helpful_content<br>";
            echo "Your Email: $email_address<br>";
            
            
            
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
