<?php
// Start the session
session_start();

// Start HTML structure with styling
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Display</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Main container styling */
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        /* Heading styling */
        h1 {
            font-size: 24px;
            color: #333;
        }

        /* Paragraph styling */
        p {
            font-size: 16px;
            color: #555;
        }

        /* Strong text for labels */
        strong {
            color: #333;
        }

        /* Link styling */
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
            display: inline-block;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Optional styling for session message */
        .session-info {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Session Information</h1>';

    // Check if the session variables are set and display them
    if (isset($_SESSION['user_name']) && isset($_SESSION['user_email'])) {
        echo '<div class="session-info">';
        echo '<p><strong>User Name:</strong> ' . $_SESSION['user_name'] . '</p>';
        echo '<p><strong>User Email:</strong> ' . $_SESSION['user_email'] . '</p>';
        echo '</div>';
    } else {
        echo '<p>Session variables are not set.</p>';
    }

    // Logout link
    echo '<a href="logoutsession.php">Logout</a>';

echo '</div>

</body>
</html>';
?>
