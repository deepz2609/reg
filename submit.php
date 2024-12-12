<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal Information
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $address = htmlspecialchars($_POST['address']);

    // Educational Information
    $board = htmlspecialchars($_POST['board']);
    $schoolName = htmlspecialchars($_POST['schoolName']);
    $percentage = htmlspecialchars($_POST['percentage']);

    // Course Preferences
    $preferredCourse = htmlspecialchars($_POST['preferredCourse']);
    $stream = htmlspecialchars($_POST['stream']);

    // Additional Information
    $hobbies = htmlspecialchars($_POST['hobbies']);
    $achievements = htmlspecialchars($_POST['achievements']);

    // Display the submitted data
    echo "<p><strong>Full Name:</strong> $fullName</p>";
    echo "<p><strong>Email Address:</strong> $email</p>";
    echo "<p><strong>Phone Number:</strong> $phone</p>";
    echo "<p><strong>Gender:</strong> " . ucfirst($gender) . "</p>";
    echo "<p><strong>Address:</strong> $address</p>";

    echo "<h3>Educational Information</h3>";
    echo "<p><strong>Board:</strong> $board</p>";
    echo "<p><strong>School/College Name:</strong> $schoolName</p>";
    echo "<p><strong>Percentage in 12th Grade:</strong> $percentage%</p>";

    echo "<h3>Course Preferences</h3>";
    echo "<p><strong>Preferred Course:</strong> $preferredCourse</p>";
    echo "<p><strong>Stream:</strong> $stream</p>";

    echo "<h3>Additional Information</h3>";
    echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    echo "<p><strong>Achievements:</strong> $achievements</p>";
} else {
    echo "Invalid request.";
}
?>
