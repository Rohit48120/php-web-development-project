<!DOCTYPE html>
<html>
<head>
  <title>Student Feedback</title>
  <style>
    .off-white-box {
      background-color: #f8f8ff;
      width: 800px;
      height: auto;
      margin: 100px auto;
      border-radius: 10px;
      box-shadow: 5px 5px 5px #888888;
      padding: 20px; /* Add some padding for spacing inside the box */
      text-align: center; /* Center the content */
    }
    .darkred-strip {
      background-color: #8B0000;
      height: 50px;
      width: 100%;
      text-align: center;
      color: #ffffff;
      font-size: 25px;
      font-weight: bold;
      line-height: 50px;
    }
    /* Add styles for the required field indicator */
    .required {
      color: red;
    }
    /* Style for the submit button */
    .submit-button {
      background-color: #3D9DB3;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    /* Style for the submit button hover effect */
    .submit-button:hover {
      background-color: #357a8e;
    }
    /* Increase font size for labels and inputs */
    label, input, select {
      font-size: 18px;
    }
    /* Style for radio buttons */
    input[type="radio"] {
      vertical-align: middle; /* Align radio buttons vertically */
    }
    /* Style for radio button labels */
    label[for="excellent"], label[for="good"], label[for="average"], label[for="poor"], label[for="agree"], label[for="neutral"], label[for="disagree"] {
      display: inline-block; /* Display radio button labels as inline-block elements */
      text-align: left; /* Align labels to the left */
      margin-left: 10px; /* Add some spacing between radio buttons and labels */
    }
  </style>
</head>
<body>
  <div class="off-white-box">
    <div class="darkred-strip">STUDENT FEEDBACK</div>
    <br><br>
    <form action="submit_feedback.php" method="post">
      <label for="name">Enter your name: <span class="required">*</span></label>
      <input type="text" id="name" name="name" required>
      <br><br>
      <label for="department">Enter your department: <span class="required">*</span></label>
      <select id="department" name="department" required>
        <option value="" disabled selected>Select your department</option> <!-- Add this default option -->
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
          <option value="BSc Computer Science and IT">BSc Computer Science and IT</option>
          <option value="BSc Statistics">BSc Statistics</option>
          <option value="BSc Physics">BSc Physics</option>
        </optgroup>
      </select>
      <br><br>
      <label>Rate our college campus: <span class="required">*</span></label><br>
      <input type="radio" id="excellent" name="campus_rating" value="Excellent" required>
      <label for="excellent">Excellent</label><br>
      <input type="radio" id="good" name="campus_rating" value="Good" required>
      <label for="good">Good</label><br>
      <input type="radio" id="average" name="campus_rating" value="Average" required>
      <label for="average">Average</label><br>
      <input type="radio" id="poor" name="campus_rating" value="Poor" required>
      <label for="poor">Poor</label>
      <br><br>
      <label for="visitDate">Date of your college visit: <span class="required">*</span></label>
      <input type="date" id="college_visit_date" name="college_visit_date" required>
      <br><br>
      <label>Rate our college website (1-5): <span class="required">*</span></label>
      <input type="number" id="website_rating" name="website_rating" min="1" max="5" required>
      <br><br>
      <label>You found our website content helpful: <span class="required">*</span></label><br>
      <input type="radio" id="agree" name="helpful_content" value="Agree" required>
      <label for="agree">Agree</label><br>
      <input type="radio" id="neutral" name="helpful_content" value="Neutral" required>
      <label for="neutral">Neutral</label><br>
      <input type="radio" id="disagree" name="helpful_content" value="Disagree" required>
      <label for="disagree">Disagree</label>
      <br><br>
      <label for="email">Your email address:</label>
      <input type="email" id="email_address" name="email_address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
      <br><br>
      <input type="submit" class="submit-button" value="SUBMIT">
    </form>
  </div>
</body>
</html>
