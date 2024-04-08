<!DOCTYPE html>
<html>
<head>
    <title>Ruia Admissions</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 18px;
        }
        .required {
            color: red;
        }
        input[type="text"], select {
            width: 300px; /* Adjust the width of the text boxes here */
            padding: 5px;
        }
        input[type="submit"] {
            font-size: 20px; /* Increase the font size of the submit button */
            background-color: green;
            color: black;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .heading {
            color: darkred;
            font-size: 30px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1 class="heading">Ruia Admission Form</h1>
    <form method="post" action="submit_admission.php">
        <label for="first_name">Enter your first name<span class="required">*</span>:</label>
        <input type="text" placeholder="Your first name" name="first_name" id="first_name" required>
        <br><br>
        
        <label for="middle_name">Enter your middle name:</label>
        <input type="text" placeholder="Your middle name" name="middle_name" id="middle_name">
        <br><br>
        
        <label for="last_name">Enter your last name:</label>
        <input type="text" placeholder="Your last name" name="last_name" id="last_name">
        <br><br>
        
        <label for="mother_name">Enter your mother's name:</label>
        <input type="text" placeholder="Your mother's name" name="mother_name" id="mother_name">
        <br><br>
        
        <label for="email">Enter your email<span class="required">*</span>:</label>
        <input type="email" placeholder="Your email" name="email" id="email" required>
        <br><br>
        
        <label for="gender">Enter your gender<span class="required">*</span>:</label>
        <select name="gender" id="gender" required>
            <option value="" disabled selected>Select</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br><br>
        
        <label for="religion">Enter your religion<span class="required">*</span>:</label>
        <input type="text" placeholder="Your religion" name="religion" id="religion" required>
        <br><br>
        
        <label for="caste">Enter your caste<span class="required">*</span>:</label>
        <input type="text" placeholder="Your caste" name="caste" id="caste" required>
        <br><br>
        
        <label for="address">Enter your address<span class="required">*</span>:</label>
        <input type="text" placeholder="Your address" name="address" id="address" required>
        <br><br>
        
        <label for="city">Enter your city<span class="required">*</span>:</label>
        <input type="text" placeholder="Your city" name="city" id="city" required>
        <br><br>
        
        <label for="stream">Select your stream<span class="required">*</span>:</label>
        <select name="stream" id="stream" required>
            <option value="" disabled selected>Select</option>
            <option value="Arts">Arts</option>
            <option value="Science">Science</option>
        </select>
        <br><br>
        
        <label for="course">Enter your course<span class="required">*</span>:</label>
        <select name="course" id="course" required>
            <option value="" disabled selected>Select</option>
            <optgroup label="Arts">
                <option value="BA English">BA English</option>
                <option value="BA Hindi">BA Hindi</option>
                <option value="BA History">BA History</option>
                <option value="BA Marathi">BA Marathi</option>
                <option value="BA Philosophy">BA Philosophy</option>
                <option value="BA Sanskrit">BA Sanskrit</option>
            </optgroup>
            <optgroup label="Science">
                <option value="BSc Biotechnology">BSc Biotechnology</option>
                <option value="BSc Chemistry">BSc Chemistry</option>
                <option value="BSc Mathematics">BSc Mathematics</option>
                <option value="BSc Computer Science & IT">BSc Computer Science & IT</option>
                <option value="BSc Statistics">BSc Statistics</option>
                <option value="BSc Physics">BSc Physics</option>
            </optgroup>
        </select>
        <br><br>
        
        <label for="12th_percentage">Enter your 12th Board percentage:</label>
        <input type="text" placeholder="12th percentage" name="12th_percentage" id="12th_percentage">
        <br><br>
        
        <label for="phone_number">Enter your phone number<span class="required">*</span>:</label>
        <input type="tel" placeholder="Your phone number" name="phone_number" id="phone_number" required>
        <br><br><br>
        
        <div>
            <input type="submit" value="SUBMIT">
        </div>
    </form>
</body>
</html>
