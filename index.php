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
      <form action="">
        <label for="name">Name:</label>
        <input type="text" placeholder="Enter your name" >
      </form>
      <form action="">
        <label for="email">Email:</label>
        <input type="email" placeholder="Enter your email" >
      </form>
      <form action="">
        <label for="feedback">FeedBack:</label>
        <input type="text-area" placeholder="Enter your feedback" >
      </form>
      <form action="">
        <input type="submit" name="submit" >
      </form>
      </div>
</body>
</html>