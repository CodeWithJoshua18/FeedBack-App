<?php include 'database.php'; ?>

<?php
   // Assuming you've already established the connection to the database and stored it in $conn

   // SQL query to select all feedback
   $sql = 'SELECT * FROM feedback';

   // Execute the query and check for errors
   $result = mysqli_query($conn, $sql);

   // Check if the query was successful
   if ($result) {
       // Fetch all the feedback as an associative array
       $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
   } else {
       // If there's an error, print it out
       echo 'Error: ' . mysqli_error($conn);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <title>FeedBack</title>
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

    <h2>Past FeedBack</h2>

    <?php if(empty($feedback)): ?>
        <p>No feedback yet!</p>
    <?php else: ?>
        <!-- Loop over each feedback item -->
        <?php foreach($feedback as $item): ?>
            <div class="card">
                <div class="card-body">
                    <?php echo htmlspecialchars($item['body']); ?>
                </div>
                <p>By <?php echo htmlspecialchars($item['name']); ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>

</body>
</html>
