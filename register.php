<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles can be added here */
    .login-form {
      max-width: 400px;
      margin: 50px auto; /* Center the form vertically and horizontally */
      padding: 30px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }
    .form-group {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <form class="login-form">
      <div class="form-group">
        <label for="validationDefault01">First name</label>
        <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
      </div>
      <div class="form-group">
        <label for="validationDefault02">Last name</label>
        <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
      </div>
      <div class="form-group">
        <label for="validationDefaultUsername">Username</label>
        <input type="text" class="form-control" id="validationDefaultUsername" required>
      </div>
      <div class="form-group">
        <label for="validationDefault03">City</label>
        <input type="text" class="form-control" id="validationDefault03" required>
      </div>
      <div class="form-group">
        <label for="validationDefault04">State</label>
        <select class="form-select" id="validationDefault04" required>
          <option selected disabled value="">Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group">
        <label for="validationDefault05">Zip</label>
        <input type="text" class="form-control" id="validationDefault05" required>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
        <label class="form-check-label" for="invalidCheck2">
          Agree to terms and conditions
        </label>
      </div>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
