# Server Fetch

Minimal “neofetch”-style splash for your web server.

![product image](screen-v0.1.png)

## Files

- **index.php** — loads logic and view
- **srvfetch/splash_data.php** — gathers server info and selects ASCII logo
- **srvfetch/splash_view.php** — renders HTML/CSS

## Requirements

- PHP 7+
- shell_exec or proc_open enabled

## Install

1. Copy `index.php` and `srvfetch` directrory to your vhost root
2. Ensure `index.php` is first in `DirectoryIndex`


You can also use this one-liner: 
```
wget -q https://github.com/checcoux/srvfetch/releases/download/v0.1/srvfetch.v0.1.zip -O /tmp/srvfetch.zip && \
unzip -qo /tmp/srvfetch.zip -d /tmp/srvfetch && \
cp -r /tmp/srvfetch/* /var/www/html/  # substitute with your web root path
```

## Customize

- Edit ASCII blocks in `splash_data.php`, right now it comes ready for Apache, Nginx and Lighttpd
- Add/remove entries in the `$info` array
- Tweak styles in `splash_view.php`  
