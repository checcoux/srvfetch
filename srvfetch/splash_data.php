<?php
$sv = strtolower($_SERVER['SERVER_SOFTWARE']);
if (strpos($sv, 'apache') !== false) {
    $logo = "
                        _
  __ _ _ __   __ _  ___| |__   ___
 / _` | '_ \\ / _` |/ __| '_ \\ / _ \\
| (_| | |_) | (_| | (__| | | |  __/
 \\__,_| .__/ \\__,_|\\___|_| |_|\\___|
      |_|
";
} elseif (strpos($sv, 'nginx') !== false) {
    $logo = "
             _
 _ __   __ _(_)_ __ __  __
| '_ \\ / _` | | '_ \\\\/ \\/ /
| | | | (_| | | | | |>  <
|_| |_|\\__, |_|_| |_/_/\\_\\
       |___/
";
} elseif (strpos($sv, 'lighttpd') !== false) {
    $logo = "
 _ _       _     _   _             _
| (_) __ _| |__ | |_| |_ _ __   __| |
| | |/ _` | '_ \\| __| __| '_ \\ / _` |
| | | (_| | | | | |_| |_| |_) | (_| |
|_|_|\\__, |_| |_|\\__|\\__| .__/ \\__,_|
     |___/              |_|
";
} else {
    $logo = "
                 __      _       _
 ___ _ ____   __/ _| ___| |_ ___| |__
/ __| '__\\ \\ / / |_ / _ \\ __/ __| '_ \\
\\__ \\ |   \\ V /|  _|  __/ || (__| | | |
|___/_|    \\_/ |_|  \\___|\\__\\___|_| |_|
";
}
$info = [
    'Host'          => gethostname(),
    'Server IP'     => $_SERVER['SERVER_ADDR'],
    'Server Name'   => $_SERVER['SERVER_NAME'],
    'Software'      => $sv,
    'PHP Version'   => phpversion(),
    'Uptime'        => trim(shell_exec('uptime -p')),
    'Load Avg'      => implode(', ', array_map(function($n){ return round($n,3); }, sys_getloadavg())),
    'Memory Usage'  => round(memory_get_usage()/1024/1024,2).' MB',
    'Disk Free'     => round(disk_free_space('/')/1024/1024/1024,2).' GB',
    'CPU Cores'     => intval(trim(shell_exec('nproc'))),
    'Timezone'      => date_default_timezone_get(),
];
