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
		<center><b><u>The Problem With Email							[06/03/2017]</u></b></center>
		<br>

Email....Now a days everyone has atleast one account or manages one despite various new chat systems such like social networks such as Facebook and Twitter, Skype, Discord or any other text based chat Email has remained at the center of all of our accounts from Social networks and games to <u>Banking and Shopping</u>. However as technolgy has evolved at an exponential rate E-mail has fallen behind in terms of secuirty and use. Most people now a days use E-mails for activing and verify other accounts and rarely send messages to other people with E-mail However im not going to go over the entire evoltion of E-mail and its potentional future in this post im going to cover the secuirty side of E-mail. Both POP and IMAP the main protocols for E-mail haven't had any major changes since there release around 1990 back in a time where people thought more about function over secuirty this means that there are a number of secuirty issues with the base E-mail protocol that can easily be exploited and is relativly hard to defend agaist such as E-mail Spoof which we will cover below.<br><br>
<b><u>Email Spoofing</u></b>
<br>
Email Spoofing is when you fake your E-mail address so for example my real email can be darren@example.com but with E-mail spoofing I can tell the reciveing server that I am anyone in this case mark@facebook.com and because there is no real authincation system for sending emails the user that is reciving the E-mail will see that it was sent from mark@facebook.com even thought its not however luckly we cannot see any replys to that email as we would need login details to the specific email server in order to read those emails or exploit there email server in some way to download the emails. However this doesn't mean that its common for people to be exploiting as you still need a victim's email so as long as your email isn't publiclly available or given to a undertrustworthy user then is very unlikely for people to be sending spoofed emails to you and also decreasing your chance of falling for a phising email if you are an average user.    </ul>
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