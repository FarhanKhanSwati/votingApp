<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta tags, title, and CSS links -->
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link rel="stylesheet" href="style.css">
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
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="candidates.php">Candidates</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="complain.php">Complain</a>
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


  <!-- Complaint Section -->
  <div class="container mt-4">
    <!-- First Preset Complaint -->
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Preset Complaint 1</h5>
        <!-- Voting mechanism (buttons and count display.) -->
        <div class="voting-section">
          <button class="btn btn-success" onclick="upvote()">Upvote</button>
          <button class="btn btn-danger" onclick="downvote()">Downvote</button>
          <span class="vote-count">0</span>
        </div>
        <!-- Show number of votes -->
        <p class="card-text">Description of the complaint...</p>
      </div>
    </div>

    <!-- Second Preset Complaint -->
    <div class="card mb-3">
      <div class="card-body">
        <h5 class="card-title">Preset Complaint 2</h5>
        <!-- Voting mechanism (buttons and count display.) -->
        <div class="voting-section">
          <button class="btn btn-success" onclick="upvote()">Upvote</button>
          <button class="btn btn-danger" onclick="downvote()">Downvote</button>
          <!-- Show number of votes -->
          <span class="vote-count">0</span>
          <!-- ye vote-count ki class call hogi or iska textcontent update ho k display hota jaega -->
        </div>

        <p class="card-text">Description of the complaint...</p>
      </div>
    </div>

    <!-- Complain Form -->
    <div class="col-md-6">
      <h3>Submit a New Complaint</h3>
      <form>
        <!-- Complaint submission form fields -->
        <div class="form-group">
          <label for="complaint">New Complaint</label>
          <textarea class="form-control" id="complaint" rows="4" placeholder="Describe your complaint"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  <br>

  <footer class="footer">
    <div class="footer-content">
      <p>Contact Us: example@email.com</p>
      <nav>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Terms of Service</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </nav>
    </div>
  </footer>

  <!-- Bootstrap JS and any custom scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Your custom scripts -->
  <script>

    //VOTE COUNT:

    let voteCount = 0; // Initial vote count

    // Function to handle upvoting
    function upvote() {
      voteCount++;
      updateVoteCount();
    }

    // Function to handle downvoting
    function downvote() {
      voteCount--;
      updateVoteCount();
    }

    // Function to update the displayed vote count
    function updateVoteCount() {
      const voteCountElement = document.querySelector('.vote-count');
      //  document.querySelector() is usedto select the element with the class name 'vote-count'. 
      //This function looks through the entire document and finds the first element that matches the specified CSS selector.

      voteCountElement.textContent = voteCount;
      // It sets the textContent property of the HTML element with the class 'vote-count'
      // to the value stored in the voteCount variable.
    }
  </script>
</body>

</html>