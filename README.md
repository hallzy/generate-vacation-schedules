#Possible Vacation Schedules

Given a start date, an end date, and the minimum and maximum length of time for
a vacation, produces a file that gives all possible combinations from longest
time to shortest.

##Usage

Note that I have only tested on Ubuntu 14.04 LTS.

###Windows

Download and install cygwin (or some other terminal emulator for windows. I have
just tested cygwin).

After installation, follow the instructions for "Mac OSX or Linux", except use
your terminal emulator to open the terminal.

Note, that in my test, the script ran significantly slower in cygwin than it did
in the Ubuntu Terminal (For an execution that produced 222 combinations, it took
about 2 seconds on the Ubuntu Terminal, but it took about 6 minutes on Windows
in Cygwin).

### Mac OSX or Linux

Download the project as a Zip file to your desktop. Unzip that file, and go into
the folder. Cut the file called "possible-vacation-schedules", and paste it onto
your desktop screen. You may delete the folder that the script was in now.

Open a terminal and enter these commands:

```bash
cd ~/Desktop
bash possible-vacation-schedules
```

Answer the questions that you are prompted for with numbers only.

When the script is done, a statement that says "Done!" will appear.

At this point a file called "schedule.txt" will be on you desktop screen. You
can close the terminal and open this text file to see the schedules that fit
your requirements.


