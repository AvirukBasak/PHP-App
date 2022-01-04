<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, height=device-height">
    <title>Headers</title>
    <style>
        body {
            font-family: monospace;
            font-size: 105%;
        }
    </style>
</head>
<body>

    <h2 id="heading"></h2>
    <head>
        <meta name="viewport" content="width=device-width, height=device-height">
    </head>
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
        function getRequestHeaders() {
            $headers = array();
            foreach($_SERVER as $key => $value) {
                if (substr($key, 0, 5) <> 'HTTP_') {
                    continue;
                }
                $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
                $headers[$header] = $value;
            }
            return $headers;
        }
        
        $headers = getRequestHeaders();
        
        foreach ($headers as $header => $value) {
            $header = trim($header);
            $value = trim($value);
            echo "$header: $value\n";
        }
    ?></pre>

    <!-- normal browser script -->
    <script id="browser-script">
        const heading = 'Headers';
        document.getElementById('heading').innerHTML = `${heading}`;
    </script>

</body>
</html>
