<!DOCTYPE html>
<?php
$line = date('d-m-Y H:i:s') . " - $_SERVER[REMOTE_ADDR] 	$_SERVER[HTTP_USER_AGENT]";
file_put_contents('logs/Using-Ardunio-As-HID-Device.log', $line . PHP_EOL, FILE_APPEND);
?>
<html>
<head>
    <title>Darren Rainey</title>
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<meta name="Description" content="HID (Human Interface Device Attacks using an ardunio nano or arduino leonardo">
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
            </div>

            <!--THE LIST -->
            
            <div id="list">
            
            <ul>
		<center><b><u>Best Linux Distributions For ARM Devices							[08/09/2018]</u></b></center>
<br>
Over time I have had experience with various ARM based devices these include everything your typical Android phone to more hobbyist/hacker/maker focused boards such as the Raspberry Pi and its various competitors. Below is a list of some the best and most widely used/support Linux distributions for these devices.

<br>
<br><ul>
	<li>Termux - While Termux isn't a actual Linux distribution it is a useful emulator for Android that allows hobbyists and developers to easy use mainly Linux based tools on their phone or tablet.<li>
	<li>ARMBIAN - ARMBIAN is a Debian Linux based for ARM devices they feature a wide range of supported devices and are usually the easiest to setup while supporting a wide range of tools and hardware.</li>
	<li>Diet Pi - Diet Pi is an ARMBIAN based distribution however it removes allot of tools that many people may consider bloatware and strips the OS to the bare essentials leading to an increase in performance compared to other distributions.</li>
	<li>TinyCore - Tiny Core is possible the smallest Linux distribution that is still under active development. This isn't recommended for the average user and is more tailored towards hobbyist/hackers as many tools need to be compiled and ported to the platform</li>
	</ul>
	            </div>
            
            <!--FOOTER SECTION -->

            <div id="footer">
                <pre>------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</pre>
                <div class="filter">
                <a href="index.php">HOME</a>

                <span class="footdogs">  &#215; </span>
                <a href="http://pitchinbox.com/widget/widget.swf?id=2876191853">DONATE</a>
                
                <span class="footdogs">  &#215; </span>
                <a target="_blank" href="https://youtube.com/DarrenRainey">YOUTUBE</a>

                <span class="footdogs">  &#215; </span>
                <a target="_blank" href="https://github.com/DarrenRainey">GITHUB</a>


		<span class="footdogs">  &#215; </span>
                <a target="_blank" href="sitemap.php">SITEMAP</a>

                </div>

        </div>

        </div>

</body>
</html>
