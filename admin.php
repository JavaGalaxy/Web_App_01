<?php

set_include_path('./php-includes'. PATH_SEPARATOR . './functions');

// Functions
require_once 'test-users.fn.php';
require_once 'show-users.fn.php';

//Includes

require_once 'connect.inc.php';
require_once 'get-variables.inc.php';
require_once 'head.inc.php';
require_once 'header.inc.php';
require_once 'navigation.inc.php';

if ($page=="users") {
    require_once 'admin-users.inc.php';
} else {
    if ($page=="movies") {
        require_once 'admin-movies.inc.php';
    } else {
        echo "<div class='message'>";
        echo "<h2 class='alert'>Please use the admin menus to navigate</h2>\n";
        echo "</div>";
		require_once 'footer.inc.php'; 
		exit;
    }
}

require_once 'footer.inc.php';
?>