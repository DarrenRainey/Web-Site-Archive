<!DOCTYPE html>
<?php
$line = date('d-m-Y H:i:s') . " - $_SERVER[REMOTE_ADDR] 	$_SERVER[HTTP_USER_AGENT]";
file_put_contents('logs/single-point-of-failure.log', $line . PHP_EOL, FILE_APPEND);
?>
<html>
<head>
    <title>Darren Rainey</title>
    <link href='https://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
<meta name="Description" content="Since Xbox Live was release in 2001 it has grown to have more than 48 million active however there are people that want to play with their friends but don't want to pay for xbox live or they want to understand how the xbox live system functions. But one of the main reason that people like me are starting to reverse engineering the xbox live protocol is because Microsoft will and have shut down support and access to older consoles. In 2010 Microsoft annouced that they would be shutting down the xbox live servers for the original xbox. 
So in this fourm people are discussing and working together to deconstruct the xbox protocols and create a free and open source alternative and if we can get a working version on the orginal xbox then we could gain allot of knowledge about how the system works and potentially adapt it in the future to allow other systems such as the xbox 360 or xbox one to communicate with the older systems or even play some backward compatiable games such as Halo 1/2.">
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
		<center><b><u>Reverse Shell To Meterpeter						[14/05/2017]</u></b></center>
		
<br>
When you are doing a pentest or other <u><b>LEGAL</u></b> system exploitation you will ussaly want to avoid detection one of the best ways is to create a reverse shell using built it system commands such as netcat on linux or a powershell script on windows this allows you to use the system native functions to get access and avoid downloading programs onto the target system but somethings you want more than just a shell well thats where metasploit comes in. Metasploit's meterperter payload lets you do allot more than just standard windows commands with meterperter you can do stuff like keylogging, taking pictures, recording microphones and a whole lot more but you don't want to just create a metasploit binary and run that on the target machine as that will likely get detected by the antivirus so the solotion is to use the following steps to upgrade your reverse shell to a full meterpeter session : <li><br> Load up metasploit</li><li>Set LPORT <br> Set LHOST <br> Set payload/windows/shell/reverse_tcp <br>Exploit</li> <br> <li>Ok so now you should be able to run your reverse shell on the victim machine and get a shell with metasploit but we want to upgrade this so now we do this : <br><li>Press CTRL + Z to background the session </li><li>Type sessions --list to get your current sessions if you have more than one</li><li> Run sessions -u [ID] eg. sessions -u 1.</li> <br> So now you should be able to use sessions -i [ID] to reconnect to your shell now with meterperter commands.
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