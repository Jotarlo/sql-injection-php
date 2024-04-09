<?php

// close session deleting all session variables
session_start();
session_destroy();
// redirect to index.php?view=login
header('Location: ../../index.php?view=login');

?>