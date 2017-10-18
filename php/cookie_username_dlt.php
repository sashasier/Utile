<?php

if (!isset($_COOKIE['username'])) {
	setcookie('username', 'mriera', time()-3660, '/');	
}

?>
