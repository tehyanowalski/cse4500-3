<?php
// set the default timezone to use.
date_default_timezone_set('UTC');
echo date("l");
echo date('l jS \of F Y h:i:s A');
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo date(DATE_RFC2822);
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));
?>
