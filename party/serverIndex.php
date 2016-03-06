<?php
echo "<h1>" . $_SERVER['HTTP_HOST'] . "</h1>";
if ($_SERVER['HTTP_HOST'] == "pikappcastle.org") {
    header('Location: http://pikappcastle.org/PKP');
    }
?>
<html>
<head>
    <style>
        .row {
            height: 50px;
            width: 100%;
            display: inline-block;
            text-align: center;
            background-color: #171717;
            position: fixed;
            left: 0;
        }

        .row ul {
            list-style: none;
            margin: 0 auto;
            width: 80%;
            float: right;
        }

        .row ul a li, .row a li {
            display: inline-block;
            padding: 13px 0;
            width: 100%;
        }

        .row ul a, .row a {
            display: inline-block;
            text-align: center;
            color: crimson;
            text-decoration: none;
            font-size: 20px;
            width: 13%;
        }

        .row ul a:hover li, .row ul a:active li , .row a:hover li, .row a:active li{
            background: crimson;
            -webkit-box-shadow: inset 0 0 4px 0 #000;
            box-shadow: inset 0 0 4px 0 #000;
        }

        .row ul a:hover, .row a:active, .row a:hover, .row a:active {
            color: white;
        }

        .row ul a:active:hover, .row a:active:hover {
            text-shadow: 0 0 10px #F4D8E4;
            filter: dropshadow(color=#F4D8E4, offx=0, offy=0);
        }
    </style>
</head>

<body>

    <div class="row" style="top:0">
        <a href="../"><li style="list-style: none; float: left; border: solid thin crimson; padding: 12px 0 !important;">Up One Folder</li></a>
        <ul class="list">

    <?php

    $folders = scandir('./');
    $numFolders = count($folders);

    for ($i=0, $row=0; $i < $numFolders; $i++) {
        if ($folders[$i] == 'index.php' ||
            $folders[$i] == '.' ||
            $folders[$i] == '..') {
            continue;
        }
        if ($i % 9) {
            echo "<a href=\"" . "./" . $folders[$i] . "\"><li>" . $folders[$i] . "</li></a>";
        }
        else if ($i != 0) {
            $row++;
            echo "</ul>
                </div>
                <div class='row' style=\"top:" . $row*50 . 'px;\">' . "
                  <ul class='list'>
                        <a href=\"" . "./" . $folders[$i] . "\"><li>" . $folders[$i] . "</li></a>";
        }
    }
    ?>

</body>
</html>