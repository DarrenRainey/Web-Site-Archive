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
		<center><b><u>HID Attacks Using An Ardunio							[01/01/2017]</u></b></center>
		
<br>
<p>HID or Human Interface Devices are devices that allow the user to interace with a system such as a PC. Common example of HID devices are Keyboards and Mice but there are other input devices such as webcams or even the Microsoft Kinect. These devices are ussaly required for the user to interact and use there machine which is why HID attacks are almost impossiable to prevent as the computer <b><u>DOES NOT</b></u> know the difference between a user typing at 5 characters per second and a malicious device typing at 1000 characters per second.<br>
</p><p>So now the Ardunio. an Ardunio is a open source microcontroller platform that has near infinite possibilities such as making LEDs blink,A small logic controller, A webserver or even a HID controller which is what we are going to be using.<br>
There are embedded devices similar to the Ardunio that are delicated to HID attacks such as the <a href="http://usbrubberducky.com/#!index.md">USB RUBBER DUCKY</a>. This device uses a Teensy microcontroller which is similar to the Ardunio but the main difference is cost with the USB Rubber ducky price at nearly <b><u>£40!!</u></b> it can be very expensive if you want more than one or if you lose one compare the £40 to just <b><u>£2</b></u> or <b><u>£3</b></u> for an Ardunio.<br><br>
<u>Setup</u><br>
There are a view things you need to get started:<br>
An Ardunio with a 32u4 or 16u4 Chip <br>
Ardunio IDE Free Download at <a href="https://ardunio.cc">Ardunio.cc</a><br>
A Micro USB cable or USB to Micro USB Adapter<br>
Dckuino.js Which cn be Downlod on <a href="https://github.com/Thecakeisgit/Dckuino.js">GitHub</a> Or used online <a href="http://darrenraineys.co.uk/ducky">HERE</a>
<br><br>
To make this quick and simple with are going to use a convertor that converts Ducky Script (A very simple programming lanuage for the USB Rubber Ducky) to C code that the Ardunio can understand and execute. This will allow use to program the Ardunio to act like a Keyboard below is some example code in Ducky Script that will wait 1 second after the device is plugged in and then type Hello World.<br>
<br>
<u><b>Ducky Script</u></b><br>
<code>
DELAY 1000<br>
STRING Hello World
</code>
<br>
<br>
<u><b>Functions</u></b><br>
Here are some basic commands and their functions<br><br>
STRING - Something to Type<br>
ENTER - Send the enter key or return key<br>
DELAY - Wait x amount of miliseconds<br>
GUI - Press the Windows Key or system equivalent<br>
GUI + R - Press the Windows Key + R system equivalent<br>
TAB - Send Tab Key
<br>
<br>
<u><b>Converting To Ardunio Code</u></b>
<br>Ok so now we have our Ducky Script we can just copy and paste that into Dckunio.js click compile and copy the output code into the Ardunio IDE, make sure the correct port is selected and click upload and as soon as it uploads it will run your code and now you have your own HID Attack tool or USB Rubber Ducky for £2-£3. Now whenever you plug your Ardunio into a PC or other system it will beginning running your code.

<u></b>Conclusion</b></u>
<br>There is so much more that you can do with the Ardunio if you know how to write in C or Ardunio code you can even make your Ardunio move the mouse and click on things as well as act like a keybord and type. There are some limitations such as memory but by adding a Micro SD card reader you can solve this issue.

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