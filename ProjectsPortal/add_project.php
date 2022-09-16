<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projects page</title>
    <link rel="stylesheet" href="projects.css">
</head>
<body>
    <form action="insert.php" method="post">
        <div class="container">
          <h1>Add Project Group</h1>
          <p>Please fill in this form to add Project Group.</p>
          <hr>
    
      
          <label for="grpno"><b>Group Number</b></label>
          <input type="text" placeholder="Enter group no" name="grpno" id="grpno" required>
      
          <label for="project-name"><b>Project Name</b></label>
          <input type="text" placeholder="Enter Project name" name="project-name" id="project-name" required>
          <hr>
          <h2>Leader Details</h2>

          <label for="leader-name"><b>Leader Name</b></label>
          <input type="text" placeholder="Enter Leader name" name="leader-name" id="leader-name" required>

          <label for="leader-roll"><b>Leader Roll No</b></label>
          <input type="text" placeholder="Enter Leader Roll No" name="leader-roll" id="leader-roll" required>
          

          <label for="email"><b>Leader KIET Email</b></label>
          <input type="text" placeholder="Enter Email" name="email" id="email" required>

          <hr>

          <h2>Student 1 Details</h2>

          <label for="student-name"><b>Student Name</b></label>
          <input type="text" placeholder="Enter  name" name="student1-name" id="student-name" required>
    

          <label for="student-roll"><b>Student Roll No</b></label>
          <input type="text" placeholder="Enter Student Roll No" name="student1-roll" id="student-roll" required>
          

          <label for="email"><b>Student KIET Email</b></label>
          <input type="text" placeholder="Enter Student Email" name="email1" id="email" required>

          <hr>

          <h2>Student 2 Details</h2>

          <label for="student-name"><b>Student Name</b></label>
          <input type="text" placeholder="Enter  name" name="student2-name" id="student-name" required>
    

          <label for="student-roll"><b>Student Roll No</b></label>
          <input type="text" placeholder="Enter Student Roll No" name="student2-roll" id="student-roll" required>
          

          <label for="email"><b>Student KIET Email</b></label>
          <input type="text" placeholder="Enter Student Email" name="email2" id="email" required>

          <hr>

          <h2>Student 3 Details</h2>

          <label for="student-name"><b>Student Name</b></label>
          <input type="text" placeholder="Enter  name" name="student3-name" id="student-name" required>
    

          <label for="student-roll"><b>Student Roll No</b></label>
          <input type="text" placeholder="Enter Student Roll No" name="student3-roll" id="student-roll" required>
          

          <label for="email"><b>Student KIET Email</b></label>
          <input type="text" placeholder="Enter Student Email" name="email3" id="email" required>

          <hr>

          <h2>Student 4 Details</h2>

          <label for="student-name"><b>Student Name</b></label>
          <input type="text" placeholder="Enter  name" name="student4-name" id="student-name" required>
    

          <label for="student-roll"><b>Student Roll No</b></label>
          <input type="text" placeholder="Enter Student Roll No" name="student4-roll" id="student-roll" required>
          

          <label for="email"><b>Student KIET Email</b></label>
          <input type="text" placeholder="Enter Student Email" name="email4" id="email" required>

      
          <!-- <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->
          <input type="submit" value="Submit">
        </div>
      
        <!-- <div class="container signin">
          <p>Already have an account? <a href="#">Sign in</a>.</p>
        </div> -->
      </form>
</body>
</html>