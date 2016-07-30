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
require_once 'favourites.inc.php';

if (isset($movieID)) {
	require_once 'movie-single.inc.php';
} else {
	require_once 'movie-list.inc.php';
}

require_once 'footer.inc.php';

?>