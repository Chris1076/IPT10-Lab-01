<?php
include('register.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary</title>
</head>
<body>
    <img src="https://www.auf.edu.ph/images/auf-logo.png" alt="AUF Logo">
    <table>
        <tr>
            <th>
            <h6>First Name</h6>
            </th>
            <th>
            <h6>Last Name</h6>
            </th>
        </tr>
        <tr>
            <td>
            <?php echo $firstName; ?>
            </td>
            <td>
            <?php echo $lastName; ?>
            </td>
        </tr>
    </table>
</body>
</html>