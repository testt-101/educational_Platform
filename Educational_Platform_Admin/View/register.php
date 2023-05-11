<html>
<?php include("NavBar.php"); ?>
<head>
	<title>Add new Lecturer</title>
</head>
<h1>Enter lecturer information</h1>
<body>
    <div  class="container mt-5">
      <form class="form-control" method="post" action="../Core/Backend.php">
        <!-- Name input -->
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="Name" name="Name" required>
        </div>
        <!-- Email input -->
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- Password input -->
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <!-- Office hours input -->
        <div class="mb-3">
          <label for="office-hours" class="form-label">Office Hours</label>
          <input type="text" class="form-control" id="Office_Hours" name="Office_Hours" required>
        </div>
        <!-- Type input (select) -->
        <div class="mb-3">
          <label for="type" class="form-label">Type</label>
          <select class="form-select" id="Type" name="Type" required>
            <option value="Type">Choose...</option>
            <option value="professor">Professor</option>
            <option value="teacher-assistant">Teacher Assistant</option>
          </select>
        </div>
        <!-- Submit button -->
		<div  class="d-flex justify-content-center">
        <button type="submit"name="submit" id="submit" class="btn btn-dark">Save</button>
</div>
      </form>
    </div>
    </body>

</html>
