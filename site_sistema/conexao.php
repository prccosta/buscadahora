<?php
define('BD_USER', 'buscadah_user');
define('BD_PASS', 'q1w2e3r4t5!');
define('BD_NAME', 'buscadah_bd');

mysql_connect('localhost', BD_USER, BD_PASS);
mysql_select_db(BD_NAME);
?>