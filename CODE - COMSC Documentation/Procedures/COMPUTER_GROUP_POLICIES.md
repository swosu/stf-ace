# Setting Group Policies on a Computer

## Go into mmc
1. **Click** the _Start button_
2. In the search bar, **Type** _mmc.exe_
3. **Right click** mmc.exe and **Click** _Run as Administrator_

## Open the Group Policy Object
1. **Click** the _File_ tab in the upper left corner of the window
2. **Click** _Add/Remove Snap-in..._
3. **Find and Select** _Group Policy Object_
4. **Add>** the Group Policy Object to the right block
5. **Click** _Finish_

## Changing Personalization Settings
1. **Expand** _User Configuration_
2. **Expand** _Administrative Templates_
3. **Expand** _Control Panel_
4. **Select** _Personalization_
5. **Change** the settings you wish to modify
**IMPORTANT NOTE:** Any time you close out of mmc, make sure that you _DO NOT SAVE_ to the console

## Changing the Default Account Picture
1. **Go into** the Group Policy Object in mmc if you are not already
2. **Find** a picture that you want to be the new account picture
3. **Save** the picture to the computer in a easy-to-access location
4. If the picture is already a .bmp file, **Continue** to step number 5, otherwise do the following:
	1. **Open** the picture in the Paint application
	2. On the upper left corner of the open Paint application, **Click** the _File_ tab
	3. **Click** _Save as_ and change the file type extension to .bmp
5. **Click** the _Start buttom_
6. **Click** _Computer_
7. **Double Click** _Local Disk(C:)_
8. In the Search Libraries bar at the top right of the window, **Type** _User Account Pictures_
9. **Click** the file that shows up with the location _C:\ProgramData\Microsoft_
10. **Copy** your .bmp file to the location

## Keeping Others from Changing the Default Account Picture
1. **Get to** _Step 9_ of Changing the Default Account Picture
2. **Give** the _user.bmp_ file another name
3. **Copy** your .bmp file to the location and rename it user.bmp
4. While in the Group Policy Object in mmc:
	1. **Expand** _Computer Configuration_
	2. **Expand** _Administrative Templates_
	3. **Expand** _Control Panel_
	4. **Click** _User Accounts_
	5. **Enable** the policy that allows you to apply a default user logon picture to all users
**NOTE:** You may have to logout of the account before you see the effects take place.

## Changing the Desktop Wallpaper
1. **Find** an image you want to make the desktop wallpaper (the desktop picture _DOES NOT_ have to be .bmp)
2. **Make** a folder in _Local Disk(C:)-->Windows-->Web-->Wallpaper_
3. **Put** your desired desktop pic in the folder
4. **Go into** the Group Policy Object in mmc if you are not already
5. **Expand** _User Configuration_
6. **Expand** _Administrative Templates_
7. **Expand** _Desktop_
8. **Click** _Desktop_
9. **Enable** the policy that allows a desktop wallpaper
10. **Insert** the path to your picture in the box provided (Ex. C:\Windows\Web\Wallpaper\Abstract\abstract1.jpg)
**NOTE:** You may have to logout of the account before you see the effects take place.

## Changing the Login Screen Wallpaper Settings
1. **Go into** the Group Policy Object in mmc if you are not already
2. **Expand** _Computer Configuration_
3. **Expand** _Administrative Templates_
4. **Expand** _System_
5. **Click**
6. **Find and Enable** the group policy titled _Always use custom logon background_

### Setting the Login Screen Wallpaper
1. Requirements for the image:
	* The image must be less than 256KB in size
	* The image should match the resolution of your monitor (so that it won't look stretched)
	* The image must be named _backgroundDefault.jpg_
2. Windows looks looks for the custom login screen background image in the following directory: _C:\Windows\System32\oobe\info\backgrounds_
3. By default, the **info** and **backgrounds** folders do not exist, so **Navigate** to the _C:\Windows\System32\oobe_ folder to **Create** the _info_ folder in the _oobe_ folder and the _backgrounds_ folder in the _info_ folder
4. **Find** the image you want that fits the login screen wallpaper image Requirements
5. **Copy** the desired background image to the _backgrounds_ folder that you just
6. **Press** the _Start button_ and in the Search programs and files bar, **Type** _regedit.exe_ and **Right Click** the program to _Run as administrator_
7. Once in regedit.exe, **Expand** _HKEY_LOCAL_MACHINE_
8. **Expand** _SOFTWARE_
9. **Expand** _Microsoft_
10. **Expand** _Windows_
11. **Expand** _CurrentVersion_
12. **Expand** _Authentication_
13. **Expand** _LogonUI_
14. **Click** _Background_
15. **Double Click** _OEMBackground_ and **Change** the Value data type to _1_
16. **Click** _OK_
17. Your login wallpaper should now be set to the one you chose.
