<?php
// Check for error in the query string
$errorMessage = isset($_GET['error']) ? $_GET['error'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Staff Login</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <?php include('../navbar/navbar.php'); ?>
  <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card p-4 shadow" style="width: 100%; max-width: 400px;">
      <h2 class="text-center mb-4">Staff Login</h2>

      <!-- Error Message -->
      <?php if (!empty($errorMessage)): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <?php echo htmlspecialchars($errorMessage); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>

      <!-- Login Form -->
      <form action="process_staff_login.php" method="POST">
        <div class="mb-3">
          <label for="staffUsername" class="form-label">Username</label>
          <input type="text" class="form-control" id="staffUsername" name="staffUsername" placeholder="Enter your username" required>
        </div>
        <div class="mb-3">
          <label for="staffPassword" class="form-label">Password</label>
          <input type="password" class="form-control" id="staffPassword" name="staffPassword" placeholder="Enter your password" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>

      <!-- Register Staff link -->
      <!-- <div class="text-center mt-3">
      <a href="../register_staff/register_staff.php" class="btn btn-secondary">Register as Staff</a>
    </div> -->
    </div>
  </div>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>