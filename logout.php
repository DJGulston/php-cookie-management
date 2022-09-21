<?php

// Delete all cookie data by setting their expiry dates to 1 second in the past.
setcookie('full_name', '', time() - 1, '/');
setcookie('username', '', time() - 1, '/');
setcookie('dob', '', time() - 1, '/');

echo '<h1>You are now logged out!</h1>';

echo '<br>';

// Link back to the Home Page.
echo '<a href="home.html">Back to Home Page</a>';

?>