#Possible Vacation Schedules

Given a start date, an end date, and the minimum and maximum length of time for
a vacation, produces a file that gives all possible combinations from longest
time to shortest.

##Usage

Note that I have only tested on Ubuntu 14.04 LTS.

Also, I recommend using a Linux Distro like Ubuntu, since I have tested it on
this and it runs very fast on it. Mac is untested, but should be the same
instructions as Linux. Windows takes a long time because of the program that
needs to be installed, and the script takes longer to run in this program than
it does in Linux.

Therefore, if you are able to use Linux, natively or in a virtual machine, I
would recommend that over Windows.

###Windows

Download and install Babun.

To install babun:

Press the "Download now" button on [this page](https://babun.github.io/)

Download it to the Desktop for simplicity.

When it is finished downloading, unzip the zip file onto the desktop. There
should now be a folder on your desktop called "babun-1.2.0". The number may be
different, this just happens to be the version available while I am doing this.

You can now delete the zip file.

Open the folder, and double click the "install.bat" file. The installation takes
about 22 minutes.

You can now exit that folder and delete it.

At this point it is probably easier to create a shortcut on the desktop. To do
this, right click the desktop, go to "new" and then click "shortcut". In the
location, type "%USERPROFILE%\.babun\babun.bat. Click next. Now you can name the
shortcut whatever you want. It is fine to leave it as the default "babun.bat".
Now click the "Finish" button. Now to start Babun, just double click the new
shortcut on your desktop. Everything should work fine and you should eventually
see a black screen that has "{ ~ }  >>". This means that it worked.

If you see a whole bunch of errors and don't get that nice prompt, something
went wrong. What I did to solve this is restart my computer because there was
probably another process that was using the DLLs that Babun was trying to use.

######If you have babun installed start here

Now we need to get the program on this page.

Download the project as a Zip file to your desktop (Press the "Download Zip"
button). Unzip that file, and go into the folder. Cut the file called
"possible-vacation-schedules", and paste it onto your desktop screen. You may
delete the folder that the script was in now. We now need to copy that file to
"%USERPROFILE%\.babun\cygwin\home\<username>" where username is your user.

The easiest way to do this is to cut the file. Then open windows explorer and
type this into the address bar "%USERPROFILE%\.babun\cygwin\home". Now press
enter. There should only be one folder that you see which will be your username.
Double click this. Now paste the file that we cut earlier.

######If Babun is installed, and the section above has been done previously, start here

Go back to the Babun window, and enter these commands:

```bash
cd ~
bash possible-vacation-schedules
```

Answer the questions that you are prompted for with numbers only.

When the script is done, a statement that says "Done!" will appear. Note: this
script takes about 6 minutes to run on Windows when I last tried it (Mac OSX,
and Linux take about 2 seconds).

At this point a file called "schedule.txt" will be created. Now go back to
"%USERPROFILE%\.babun\cygwin\home\<username>". There will be a file called
"schedule.txt" visible now. This contains the schedule. Feel free to move it
anywhere.

### Mac OSX or Linux

Download the project as a Zip file to your desktop. Unzip that file, and go into
the folder. Cut the file called "possible-vacation-schedules", and paste it onto
your desktop screen. You may delete the folder that the script was in now.

######If you have previously done the above step, start here

Open a terminal and enter these commands:

```bash
cd ~/Desktop
bash possible-vacation-schedules
```

Answer the questions that you are prompted for with numbers only.

When the script is done, a statement that says "Done!" will appear. This should
only take a few seconds.

At this point a file called "schedule.txt" will be on you desktop screen. You
can close the terminal and open this text file to see the schedules that fit
your requirements.


