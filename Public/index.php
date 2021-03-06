<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, height=device-height">
    <title>PHP Demo App</title>
    <style>
        body {
            font-family: monospace;
            font-size: 105%;
        }
    </style>
</head>
<body>

    <?php
        $NAME = "";
        $URL = "";
        if (isset($_GET["name"])) {
            $NAME = $_GET["name"];
        } else {
            $NAME = "None";
        }
        if (isset($_GET["uid"])) {
            $UID = $_GET["uid"];
        } else {
            $UID = "None";
        }
        // Function to get the client IP address
        function get_client_ip() {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if(isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'UNKNOWN';
            return $ipaddress;
        }
    ?>

    <h1 id="heading"></h1>
    <h4 id="remoteAddress">Remote Address is <?= get_client_ip() ?></h4>
    <p>
        <h3>Paths in this domain</h3>
        <ul>
            <li><a href="/config/">/config/</a> Server configuration data.</li>
            <li><a href="/gclcm.html">/gclcm.html</a> Access Google"s Closure Compiler API.</li>
            <li><a href="/github">/github</a> Redirects to https://github.com/OogleGlu/JSHP-App.</li>
            <li><a href="/headers.php">/headers.php</a> Request headers.</li>
            <li><a href="/logs/">/logs/</a> Server logs.</li>
            <li><a href="/phpinfo/">/phpinfo/</a> Display server information</li>
            <li><a href="/redirect/f.php">/redirect/f.php</a> Open redirection.</li>
            <li><a href="/rwt1">/rwt1</a> Rewrites to /config/</li>
            <li><a href="/rwt2">/rwt2</a> Rewrites to /logs/</li>
        </ul>
    </p>
    <hr>
    <h3>Using the following</h3>
    <p>
        Use ?name= and ?uid= for passing parameters. These parameters will be displayed below.
    </p>

    <p><b>Names: </b><?= $NAME ?></p>
    <p><b>UIDs: </b><?= $UID ?></p>

    <!-- normal browser script -->
    <script id="browser-script">
        const heading = 'PHP Demo App';
        document.getElementById('heading').innerHTML = `${heading}`;
    </script>

</body>
</html>
