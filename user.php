<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    // If data has been posted to user.php, we refresh the page so the cookie
    // data can be displayed.
    header('Refresh:0');

    // Data retrieved from the POST request are assigned to the COOKIE data.
    // All cookie data expires after only 30 seconds for demonstration purposes.
    if(isset($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
        setcookie('full_name', $full_name, time() + 30, '/');
    }
    
    if(isset($_POST['username'])) {
        $username = $_POST['username'];
        setcookie('username', $username, time() + 30, '/');
    }
    
    if(isset($_POST['dob'])) {
        $dob = $_POST['dob'];
        setcookie('dob', $dob, time() + 30, '/');
    }
}

?>
<!-- Styling for the error message. -->
<style>
    .error {
        color:red;
        font-weight:bold;
    }
</style>

<?php

// Prints a custom error message as a list item.
function print_error_message($message) {
    echo '<li class="error">' . $message . '</li>';
}

echo '<h1>User Page</h1>';

// Opening tag for an unordered list.
echo '<ul>';

// If the full name cookie data variable is set, print it as a list item.
// Otherwise, print an error message.
if(isset($_COOKIE['full_name'])) {
    echo '<li><b>Full Name:</b> ' . $_COOKIE['full_name'] . '</li>';
}
else {
    print_error_message('Full name not found!');
}

// If the username cookie data variable is set, print it as a list item.
// Otherwise, print an error message.
if(isset($_COOKIE['username'])) {
    echo '<li><b>Username:</b> ' . $_COOKIE['username'] . '</li>';
}
else {
    print_error_message('Username not found!');
}

// If the date of birth cookie data variable is set, print it as a list item.
// Otherwise, print an error message.
if(isset($_COOKIE['dob'])) {
    echo '<li><b>Date Of Birth:</b> ' . $_COOKIE['dob'] . '</li>';
}
else {
    print_error_message('Date of birth not found!');
}

// Closing tag for an unordered list.
echo '</ul>';

echo '<br>';

// Logout button that takes the user to the logout.php page.
echo '<form action="logout.php" method="post">';
echo '<button type="submit">Logout</button>';
echo '</form>';

/*
 * References:
 * 
 * Why you have to refresh the page after posting cookie data:
 * - https://stackoverflow.com/questions/16347443/php-array-from-cookie-info-only-shows-up-after-you-refresh-the-page
 * 
 * How to refresh a page in PHP:
 * - https://stackoverflow.com/questions/12383371/refresh-a-page-using-php
 * 
 */

?>