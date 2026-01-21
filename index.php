<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
    $name = "Virgility";
    $course = "Information Technology";
    $school = "Your School Name";
    $email = "your@email.com";
?>

<div class="profile-card">
    <h1><?= $name ?></h1>
    <p><strong>Course:</strong> <?= $course ?></p>
    <p><strong>School:</strong> <?= $school ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
</div>

</body>
</html>
