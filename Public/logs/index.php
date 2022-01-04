<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, height=device-height">
    <title>Server Logs</title>
    <style>
        body {
            font-family: monospace;
            font-size: 105%;
        }
    </style>
</head>
<body>

    <h2 id="heading"></h2>

    <pre style="
        width: calc(100% - 30px);
        max-height: 50vh;
        border: 1.5px solid dodgerblue;
        border-radius: 5px;
        font-size: 0.8rem;
        line-height: 1.2rem;
        color: #333;
        background-color: #eee;
        display: block;
        margin: 20px auto 20px;
        padding: 10px;
        overflow: auto; "><?php
        echo file_get_contents("../server.log");
    ?></pre>

    <!-- normal browser script -->
    <script id="browser-script">
        const heading = 'Server Logs';
        document.getElementById('heading').innerHTML = `${heading}`;
    </script>

</body>
</html>
