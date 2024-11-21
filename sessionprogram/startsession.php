<?php
// Start the session
session_start();

// Set some session variables
$_SESSION['user_name'] = 'Kushal Verma';
$_SESSION['user_email'] = 'verma.kushal9287@gmail.com';

// Display a message indicating session variables are set
echo '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Example</title>
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

        /* Link styling */
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Session Started</h1>
        <p>Session variables are successfully set:</p>
        <p><strong>Name:</strong> ' . $_SESSION['user_name'] . '</p>
        <p><strong>Email:</strong> ' . $_SESSION['user_email'] . '</p>
        <p><a href="displaysession.php">display session</a></p>
    </div>

</body>
</html>
';
?>
