<?php include 'database.php' ?>

<?php 
$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';

// form validation
if(isset($_POST['submit'])){
  // check name
  if(empty($_POST['name'])){
    $nameErr = 'Please enter your name';
  } else {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  // check email
  if(empty($_POST['email'])){
    $emailErr = 'Please enter your email';
  } else {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  }

  // check body
  if(empty($_POST['body'])){
    $bodyErr = 'Input required';
  } else {
    $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  }

  if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
    // insert data into database
      $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

      if(mysqli_query($conn, $sql)){
        header('Location: feedback.php');
      } else{
        echo 'Error: ' . mysqli_error($conn);
      }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>FeedBack App</title>
</head>
<body>
    <!-- Nav section -->
    <nav>
        <div class="logo">FeedLoop</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="feedback.php">FeedBack</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
    </nav>

    <!-- Form section -->
    <div class="form">
        <h2>FeedBack Form</h2>
        <p>Leave a Feedback for us</p>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <label for="name">Name:</label>
            <input type="text" placeholder="Enter your name" name="name" value="<?php echo $name; ?>">
            <span class="error">* <?php echo $nameErr;?></span><br><br>

            <label for="email">Email:</label>
            <input type="email" placeholder="Enter your email" name="email" value="<?php echo $email; ?>">
            <span class="error">* <?php echo $emailErr;?></span><br><br>

            <label for="feedback">FeedBack:</label>
            <textarea placeholder="Enter your feedback" name="body"><?php echo $body; ?></textarea>
            <span class="error">* <?php echo $bodyErr;?></span><br><br>

            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
