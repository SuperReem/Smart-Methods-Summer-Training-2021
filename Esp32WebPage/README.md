# Connect A Robot With A Router Using ESP32  🖲 📲

This repository contains an interface which consists of two input fields, SSID and Password.<br>
SSID 👉🏻 The name of the router <br>
Password 👉🏻 Router's password<br>

<img src="https://user-images.githubusercontent.com/53432438/129732161-09636660-326e-404b-b42e-127fc8c3694e.jpg" width="250" height="180" /> <br>

### Purpose 🎯
We wanna be able to connect the robot to any network without the need to update the code. 
<br><br>

First the Esp32 will be the access point, 
once the device that we wanna control the robot with, is connected to the Esp32 we can request the IP address of the Esp32 to access the interface.
Then we enter the SSID and password of our router, if it is successfully connected (now the esp32 becomes a station),
it will redirect us to the robot's control pannel, so we can control the robot now 🤖

#### How can we host the interface page on the Esp32? 📟
By running a server on the esp32 and setting the interface as the default page of the server.
