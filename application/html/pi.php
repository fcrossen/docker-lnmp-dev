<?php

echo '<h1 style="text-align: center;">' . date('Y-m-d H:i:s') . '</h1>';

echo '<h4 style="text-align: center;">__FILE__ = ' . __FILE__ . '</h4>';

echo 'Triggering an E_USER_NOTICE error...<br>';
trigger_error('User triggered error message', E_USER_NOTICE);
echo '...done.<br><br>';

echo 'Environment variables are exposed for convenience (e.g. database credentials). For example getenv(\'MYSQL_DATABASE\') = ' . getenv('MYSQL_DATABASE') . '<br>';
echo 'Note that these are exposed by phpinfo() and is therefore a security risk.Environment variables are exposed for convenience (e.g. database credentials). For example getenv(\'MYSQL_DATABASE\') = ' . getenv('MYSQL_DATABASE') . '<br><br>';

echo phpinfo();
