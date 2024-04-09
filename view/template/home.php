
<?php

// check if session exists and show a message
if (isset($_SESSION['completeName'])) {
    echo "Welcome " . $_SESSION['completeName'];
} else {
    echo "Welcome Guest";
}

?>