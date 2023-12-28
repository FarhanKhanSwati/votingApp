<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Candidates Profile</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles */
    /* Add your custom styles here */
    /* Adjust as per your design requirements */
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    /* Header styles */
    .navbar-custom {
      background-color: #333;
      color: white;
    }

    .navbar-custom .navbar-brand {
      color: white;
    }

    .navbar-custom .nav-link {
      color: white;
    }

    /* Footer styles */
    .footer {
      background-color: #333;
      color: white;
      text-align: center;
      padding: 20px 0;
    }
  </style>
</head>

<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-custom">
    <div class="container">
      <a class="navbar-brand" href="#">Your Logo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Candidates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Complain</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Current Status</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
  <!-- End of Header -->

  <!-- Candidate Cards Container -->
  <div class="container mt-5">
    <h1 class="mb-4">Candidates Profile</h1>
    <div class="row">
      <!-- Candidate Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg" class="card-img-top" alt="Candidate Image">
          <div class="card-body">
            <h5 class="card-title">Candidate Name</h5>
            <p class="card-text">Description of the candidate goes here.</p>
            <a href="#" class="btn btn-primary">View Profile</a>
          </div>
        </div>
      </div>
      <!-- Add more Candidate Cards here -->
            <!-- Candidate Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg" class="card-img-top" alt="Candidate Image">
                  <div class="card-body">
                    <h5 class="card-title">Candidate Name</h5>
                    <p class="card-text">Description of the candidate goes here.</p>
                    <a href="#" class="btn btn-primary">View Profile</a>
                  </div>
                </div>
              </div>
              <!-- Add more Candidate Cards here -->
                    <!-- Candidate Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg" class="card-img-top" alt="Candidate Image">
          <div class="card-body">
            <h5 class="card-title">Candidate Name</h5>
            <p class="card-text">Description of the candidate goes here.</p>
            <a href="#" class="btn btn-primary">View Profile</a>
          </div>
        </div>
      </div>
      <!-- Add more Candidate Cards here -->
            <!-- Candidate Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                  <img src="candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg" class="card-img-top" alt="Candidate Image">
                  <div class="card-body">
                    <h5 class="card-title">Candidate Name</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione nam cupiditate optio provident vel minima sed harum magni animi, libero, corporis dolores tempore aliquam doloribus!</p>
                    <a href="#" class="btn btn-primary">View Profile</a>
                  </div>
                </div>
              </div>
              <!-- Add more Candidate Cards here -->
                    <!-- Candidate Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="candidate_images/handsome-corporate-man-real-estate-agent-assistant-smiling-hold-hands-together-how-may-i-help-you-smiling-friendly-polite-assist-customer-white-background.jpg" class="card-img-top" alt="Candidate Image">
          <div class="card-body">
            <h5 class="card-title">Candidate Name</h5>
            <p class="card-text">Description of the candidate goes here.</p>
            <a href="#" class="btn btn-primary">View Profile</a>
          </div>
        </div>
      </div>
      <!-- Add more Candidate Cards here -->
    </div>
  </div>
  <!-- End of Candidate Cards Container -->

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <p>Contact Us: example@email.com</p>
      <nav>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">About</a></li>
          <li class="list-inline-item"><a href="#">Terms of Service</a></li>
          <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
      </nav>
    </div>
  </footer>
  <!-- End of Footer -->

  <!-- Bootstrap JS and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
