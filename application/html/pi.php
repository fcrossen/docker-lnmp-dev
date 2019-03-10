<?php

echo '<h1 style="text-align: center;">' . date('Y-m-d H:i:s') . '</h1>';

echo '<h4 style="text-align: center;">__FILE__ = ' . __FILE__ . '</h4>';

echo "<div>";

echo "Triggering an E_USER_NOTICE error...\r\n";
trigger_error('User triggered error message', E_USER_NOTICE);
echo "...done";

echo "</div>";

echo phpinfo();
