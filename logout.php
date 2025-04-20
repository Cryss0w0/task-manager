<?php
include_once("analyticstracking.php");
session_start();

echo "<script>
    gtag('event', 'user_logout', {
        'event_category': 'User',
        'event_label': 'User Logout'
    });
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 1000);
</script>";

session_destroy();
?>