<?php
$dollars = intval(readline());
$pounds = round($dollars * 1.31, 3);
printf('%.3f', $pounds);