<!DOCTYPE html>
<?php
$line = date('d-m-Y H:i:s') . " - $_SERVER[REMOTE_ADDR] 	$_SERVER[HTTP_USER_AGENT]";
file_put_contents('logs/index.log', $line . PHP_EOL, FILE_APPEND);
?>
<html>
<head>
    <title>Darren Rainey</title>
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
<meta charset="UTF-8">
</head>

<body>
    
    <div id="page">
        <div id="content">

        <!--HEADER SECTION -->
        <div id="header"><pre>
<a class="darren rainey" href="http://darrenraineys.co.uk">
8888888b.                                                 8888888b.           d8b                            
888  "Y88b                                                888   Y88b          Y8P                            
888    888                                                888    888                                         
888    888  8888b.  888d888 888d888 .d88b.  88888b.       888   d88P  8888b.  888 88888b.   .d88b.  888  888 
888    888     "88b 888P"   888P"  d8P  Y8b 888 "88b      8888888P"      "88b 888 888 "88b d8P  Y8b 888  888 
888    888 .d888888 888     888    88888888 888  888      888 T88b   .d888888 888 888  888 88888888 888  888 
888  .d88P 888  888 888     888    Y8b.     888  888      888  T88b  888  888 888 888  888 Y8b.     Y88b 888 
8888888P"  "Y888888 888     888     "Y8888  888  888      888   T88b "Y888888 888 888  888  "Y8888   "Y88888 
                                                                                                         888 
                                                                                                    Y8b d88P 
                                                                                                     "Y88P"  </a> 

------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</pre>
            </div></div>

            <!--THE LIST -->
            
            <div id="list">
            
            <ul>
                <li>
                    <a href="site-upgrade-to-ssl.php">
                        <span class="tag">[04/01/2017]</span><span>SITE WIDE UPGRADE TO SSL	</span>
                    </a>
                </li>

                <li>
                    <a href="Using-Ardunio-As-HID-Device.php">
                        <span class="tag">[01/01/2017]</span><span>USING ARDUNIO AS HID DEVICE		</span>
                    </a>
                </li>


                <li>
                    <a href="xbox-reverse-engineering-xbox-live.php">
                        <span class="tag">[31/12/2016]</span><span>REVERSE ENGINEEERING XBOX LIVE [PART 1]		</span>
                    </a>
                </li>

              

            </ul>
            </div>
            
            <!--FOOTER SECTION -->

            <div id="footer">
                <pre>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</pre>
                <div class="filter">
                <a href="http://darrenraineys.co.uk">HOME</a>

                <span class="footdogs">  &#215; </span>
                <a href="http://pitchinbox.com/widget/widget.swf?id=2876191853">DONATE</a>
                
                <span class="footdogs">  &#215; </span>
                <a target="_blank" href="https://youtube.com/DarrenRainey">YOUTUBE</a>

                <span class="footdogs">  &#215; </span>
                <a target="_blank" href="https://github.com/DarrenRainey">GITHUB</a>

		<span class="footdogs">  &#215; </span>
                <a target="_blank" href="http://darrenraineys.co.uk/sitemap.php">SITEMAP</a>
                </div>

        </div>
</div>

</body>
</html>