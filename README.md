# tosec2mame
TOSEC DAT to MAME Software List Translator (alpha)

This is a lightweight web application designed to translate one XML-based database of vintage software (TOSEC) into another (MAME Software List). This has been in the works for almost six years and I am very proud of where I am with it so far.

Please note that this is both a personal and WIP project. It has not been subjected to a serious QA plan. Therefore, bugs will be encountered and it is strongly advised not to deploy this on a public web server.

After downloading this repo:

1. Upload all included files into a subdirectory in the htdocs folder, or wherever you have set HTTP documents to be read.
2. Download the latest TOSEC datfile pack from tosecdev.org and unpack it.
3. Upload DAT files from the main directory to the “dats” folder in the repo folder (ISO and PIX DATs should be supported but are not useful for this case)
4. Ensure that directory permissions are set such that the server can read input XML files and can write converted software lists to the “output” folder.

Configurable options:
Select TOSEC List: Select a TOSEC DAT file based on the contents of the “dats” directory.
Short List Name: The filename of the output MAME Software List. This is also used to determine the folder used to retrieve software in the specific list by MAME.
Long List Name: The more user-friendly name of the software list as displayed while using MAME.
Part Name: The prefix of the specific parts of each software set - a number is appended to this to fully separate them.
Interface Name: The storage device that the software should be mounted to.

Alternatively, there is a autogen.php script which generates several examples of software lists which are uploaded to my MAME fork below. Please ensure that the latest TOSEC DAT pack is uploaded before running this. I will update this script with each TOSEC update.

Special Thanks:
TOSEC (tosecdev.org)
MAME (mamedev.org / https://github.com/mamedev)

Lastly, my MAME fork containing the aformentioned software lists is available at:
https://github.com/riley110/mame

Thank you and good luck.
