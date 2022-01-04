<?php
    if (isset($_GET["url"])) {
        $url = $_GET["url"];
        header("HTTP/1.1 302 Moved Temporarily", true);
        header("Location: $url", false);
        exit;
    } else {
        $url = '';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, height=device-height">
    <title>Open Redirect</title>
    <style>
        body {
            font-family: monospace;
            font-size: 105%;
        }
    </style>
</head>
<body>

    <h2 id="heading"></h2>
    <p>
        Use ?url= for open redirections demo. If ?url is polluted, PHP does its thing.
    </p>

    <!-- normal browser script -->
    <script id="browser-script">
        const heading = 'Open Redirect';
        document.getElementById('heading').innerHTML = `${heading}`;
    </script>
 
</body>
</html>
