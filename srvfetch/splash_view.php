<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>srvfetch - <?= $info['Server Name']?></title>
    <style>
        body{background:#1e1e1e;color:#c5c8c6;font-family:monospace;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}
        .container{max-width:800px;padding:20px;text-align:left}
        .ascii{white-space:pre;font-size:12px;line-height:1}
        .info{margin-top:20px}
        .info div{display:flex;justify-content:space-between;padding:2px 0}
        .key{color:#8abeb7}
        .value{color:#b5bd68}
        .credit{margin-top:20px;text-align:center}
        .credit a{color:#8abeb7;text-decoration:none}
    </style>
</head>
<body>
<div class="container">
    <pre class="ascii"><?= $logo ?></pre>
    <div class="info">
        <?php foreach($info as $k => $v): ?>
            <div><span class="key"><?= $k ?>:</span><span class="value"><?= $v ?></span></div>
        <?php endforeach; ?>
    </div>
    <div class="credit">
        <a href="https://github.com/checcoux/srvfetch">srvfetch v0.1</a>
    </div>
</div>
</body>
</html>

