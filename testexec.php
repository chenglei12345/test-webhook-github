<?php
exec("cd /mnt/www/test-webhook-github && git reset && git pull");
exec("whoami",$r);
var_dump($r);
print_r(shell_exec("ls"));
#shell_exec('unoconv -f pdf test.odt');
shell_exec('pwd');
exec('ls -a');