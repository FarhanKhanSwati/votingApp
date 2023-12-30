<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Bootstrap Navbar with dropdown -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="#">Your Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="candidates.php">Candidate Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="complain">Complain</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Current Status</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <!-- Add other user-related options as needed -->
              <a class="dropdown-item" href="#">Action</a>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <form class="login-form">
      <h2 class="mb-4">Login</h2>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter your username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>
      <div class="form-group">
        <a href="#" class="float-right">Forgot Password?</a>
      </div>
      <div class="form-group">
        <a href="create new account.html" class="float-right">Don't have account? Create now!</a>
      </div>
      <br><br>
      &nbsp;
      <button type="submit" class="btn btn-primary btn-block" onclick="">Login</button>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>