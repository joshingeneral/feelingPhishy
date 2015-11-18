# feelingPhishy
This tool allows you to create a spam campaign against your users so you can train them not to click on real spam. 
A Demo site can be found at http://feelingphishy.com

# Special Thanks
- Thanks go to Kim from UNC Charlotte for expressing her need for a tool like this, and prompting me to start building it one night. NovaHackers for allowing me to get the presentation a test run, and CarolinaCon for giving me the stage to release the code. 

#Legal things our lawyers make us say
By using this code you agree to not hold joshingeneral or his affiliates liable for what you do with it. As such, you should only email those that you have been given permission to email by the individual holding the account or have been authorized by their authoritative parties. You should also read the state and local laws and country laws act in order to ensure compliance and not face legal fines, much of which is covered by the CAN-SPAM act of 2003 in the US. 

#Requirements
A server connected to the internet running PHP and mail functionality for PHP scripts. 

#Install
Install should be pretty easy, it should not scare you, it should not make you feel uncomfortable in any way. 

Step 1 - Copy all the files to the folder that you wish to run it from on your PHP enabled server.

Step 2 - Make sure the changed the permissions of the logs folder to 760, or another writable permission.

Step 3 - Visit the index.php page to start

#Simple Instructions
Step 1 - Fill out the form using the instructions on the left found on index.php

Step 2 - You should make sure that in the content area there is an [image] tag and [link] tag to enable tracking

Step 3 - Hit submit

Step 4 - Wait for users to open / click on the links (or if you are testing, do that yourself)

Step 5 - Open the admin key email

        1) Click the link provided
        
        2) Enter the key you made at the next screen, or if you didn't fill one in leave it blank
        
        3) If there are log results copy them to a text file on your system
        
        4) Create a file containing all the emails you sent your message to, one on each line
        
         (if you don't remember go back to the main form double click the sender box & most 
         
         times the browser remembers it for you)
         
        5) Run feelingPhishy.py -h and follow the instructions to decrypt your log file 
        
Step 6 - In the words of porky pig, "That's all folkes!" 

#Output Email Parser
When emails are sent out, we tag the email url and image with a md5+salt representation of the email. 
In order to get this back into something human redable you can use the python script created in the "EmailParser" Folder

Step 1 - Put the list of emails phished in a file with one email per line.

Step 2 - Download the output of the email tracking csv.

Step 3 - Run FeelingPhishyEmailParser.py -i \<emaillistfile\> -l \<logfile\>

Step 4 - Enjoy knowing who got phished :-)

