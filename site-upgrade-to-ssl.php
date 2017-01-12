<!DOCTYPE html>
<?php
$line = date('d-m-Y H:i:s') . " - $_SERVER[REMOTE_ADDR] 	$_SERVER[HTTP_USER_AGENT]";
file_put_contents('logs/site-upgrade-to-ssl.log', $line . PHP_EOL, FILE_APPEND);
?>
<html>
<head>
    <title>Darren Rainey</title>
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<meta name="Description" content="This website (https://darrenraineys.co.uk) has now been upgrade to SSl to allow a more secure connection between users and the server"></head>

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
            </div>

            <!--THE LIST -->
            
            <div id="list">
            
            <ul>
		<center><b><u>Site Wide Upgrade To SSL							[04/01/2017]</u></b></center>
		<br>
		As of 7AM this morning the entire website has been upgrade to ssl which means it can now be accessed via <a href="https://darrenraineys.co.uk">https://darrenraineys.co.uk</a> allowing a more secure and less invasive access to this website as all connections will now be encrpyted with TLS 1.2 making it almost impossiable to have a man in the middle attack (MITM) and ensuring our users remain safe and secure. This is a big upgrade as it will help with Google rankings and allows more possiablitys in the future such as a custom shop.
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

</body>
</html>