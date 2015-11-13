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
6. **Click** _OK_

**IMPORTANT NOTE:** Any time you close out of mmc, make sure that you **DO NOT SAVE** to the console. Also, "Current Personalization Settings" is a topic below (in case you may not know which policies you want/need to configure)

## Changing the Default Account Picture
1. **Go into** the Group Policy Object in mmc if you are not already
2. **Find** a picture that you want to be the new account picture
3. **Save** the picture to the computer in a easy-to-access location
4. If the picture is already a .bmp file, **Continue** to step number 5, otherwise do the following:
	1. **Open** the picture in the Paint application
	2. On the upper left corner of the open Paint application, **Click** the _File_ tab
	3. **Click** _Save as_ and change the file type extension to .bmp
5. **Click** the _Start button_
6. **Click** _Computer_
7. **Double Click** _Local Disk(C:)_
8. In the Search Libraries bar at the top right of the window, **Type** _User Account Pictures_
9. **Click** the file that shows up with the location _C:\ProgramData\Microsoft_ below
10. **Copy** your .bmp file to the location

## Keeping Others from Changing the Default Account Picture
1. **Get to** _Step 9_ of "Changing the Default Account Picture"
2. **Give** the current _user.bmp_ file another name
3. **Copy** your .bmp file to the location and **Rename** it _user.bmp_
4. While in the Group Policy Object in mmc:
	1. **Expand** _Computer Configuration_
	2. **Expand** _Administrative Templates_
	3. **Expand** _Control Panel_
	4. **Click** _User Accounts_
	5. **Enable** the policy titled _Apply the default user logon picture to all users_
	6. **Click** _OK_

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
11. **Click** _OK_

**NOTE:** You may have to logout of the account before you see the effects take place.

## Changing the Login Screen Wallpaper Settings
1. **Go into** the Group Policy Object in mmc if you are not already
2. **Expand** _Computer Configuration_
3. **Expand** _Administrative Templates_
4. **Expand** _System_
5. **Click**
6. **Find and Enable** the group policy titled _Always use custom logon background_
7. **Click** _OK_

## Setting the Login Screen Wallpaper
1. Requirements for the image:
	* The image must be less than 256KB in size
	* The image should match the resolution of your monitor (so that it won't look stretched)
	* The image must be named _backgroundDefault.jpg_
2. Windows looks looks for the custom logon screen background image in the following directory: _C:\Windows\System32\oobe\info\backgrounds_
3. By default, the **info** and **backgrounds** folders do not exist, so **Navigate** to the _C:\Windows\System32\oobe_ folder to **Create** the _info_ folder in the _oobe_ folder and the _backgrounds_ folder in the _info_ folder
4. **Find** the image you want that fits the logon screen wallpaper image Requirements
5. **Copy** the desired background image to the _backgrounds_ folder that you just
6. **Click** the _Start_ button and in the Search programs and files bar, **Type** _regedit.exe_ and **Right Click** the program to _Run as administrator_
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
17. Your logon wallpaper should now be set to the one you chose.

## Setting the Theme
1. **Right Click** the Desktop
2. **Click** _Personalize_
3. **Click** _Save Theme_
4. **Name** your theme something you will remember
5. **Click** the _Start_ button
6. **Click** _Computer_
7. **Double Click** _Local(C:)_
8. In the Search Libraries bar, **Type** your _ThemeName.theme_ to **Discover** your theme location
9. **Go into** the Group Policy Object in mmc if you are not already
10. **Expand** _User Configuration_
11. **Expand** _Administrative Templates_
12. **Expand** _Control Panel_
13. **Click** _Personalization_
14. **Find and Enable** the policy titled _Load a specific theme_
15. **Type** the location of your theme (should be something like: _C:\Users\LAB\AppData\Local\Microsoft\Windows\ThemeName.theme_)
16. **Click** _OK_

## Changing Internet Explorer (IE) Settings
1. **Go into** the Group Policy Object in mmc if you are not already
2. **Expand** _User Configuration_
3. **Expand** _Administrative Templates_
4. **Expand** _Windows Components_
5. **Click** _Internet Explorer_
6. **Find and Enable** the policy titled _Disable changing home page settings_
7. **Set** the URL to http://www.swosu.edu/students

## Setting the Internet Explorer Search Provider
1. **Get to** _Step 5_ of "Changing Internet Explorer (IE) Settings"
2. **Find and Enable** the policy _Add a specific list of search providers to the user's list of search providers_
3. **Get into** the Internet Explorer application
4. **Click** the _Tools_ gear-looking icon in the upper right corner
5. **Click** _Manage Add-ons_
6. **Click** the _Search Providers_ button under Add-on Types
7. **Click** the _Find more search providers_ link on the bottom left of the window
8. **Find and Install** _Google Search_ as a search providers
9. **Go back** to the _Search Provider_ window and **Delete** the _Bing_ search provider
10. Now, **Click** the _Start_ button and in the Search programs and files bar, **Type** _regedit.exe_ and **Right Click** the program to _Run as administrator_
11. Once in regedit.exe, **Expand** _HKEY_CURRENT_USER_
12. **Expand** _Software_
13. **Expand** _Microsoft_
14. **Expand** _Internet Explorer_
15. **Click** _SearchScopes_
16. **Delete** the key name that says it has been deleted, but make sure to **Keep** _Google_

## Current Personalization Settings
> Go into the Group Policy Object in mmc if you are not already
> User Configuration --> Administrative Templates --> Control Panel --> Personalization

### Enabled Policies
* Prevent changing color scheme
* Prevent changing theme
* Prevent changing visual style for windows and buttons
* Prohibit selection of visual style font size
* Prevent changing window color and appearance
* Prevent changing desktop background
* Prevent changing Desktop icons
* Prevent changing mouse pointers
* Prevent changing screen saver
* Prevent changing sounds
* Force specific screen saver
* Load specific theme

### Disabled Policies
* Enable screen  saver
* Password protect screen saver
* Screen saver timeout
* Force specific visual style file or force Windows Classic

## Current Taskbar and Start Menu Settings
> Go into the Group Policy Object in mmc if you are not already
> User Configuration --> Administrative Templates --> Start Menu and Taskbar

### Enabled Policies
* Clear history of recently opened documents on exit
* Clear the recent programs list for new users
* Turn off personalized menus
* Lock the Taskbar
* Remove frequent programs list from the Start Menu
* Turn off user tracking
* Do not keep history of recently opened documents
* Remove Recent Items menu from Start Menu
* Prevent changes to Taskbar and Start Menu Settings
* Do not display any custom toolbars in the the taskbar
* Do not allow pinning items in Jump Lists
* Do not allow pinning programs to the Taskbar
* Lock all taskbar settings
* Prevent users from adding or removing toolbars
* Prevent users from rearranging toolbars
* Prevent users from moving taskbar to another screen dock location

**NOTE:** All of the policies not listed under "Enabled Policies" are **Not Configured**

## Current Desktop Settings
> Go into the Group Policy Object in mmc if you are not already
> User Configuration --> Administrative Templates --> Desktop --> Desktop

### Enabled Policies
* Disable Active Desktop
* Desktop Wallpaper
* Prohibit adding items

### Disabled Policies
* Enable Active Desktop

**NOTE:** All of the policies not listed under "Enabled Policies" or "Disabled Policies" are **Not Configured**

## Other Enabled Policies
> Go into the Group Policy Object in mmc if you are not already

1. Computer Configuration --> Administrative Templates --> System --> Group Policy
	* User Group Policy loopback processing mode **Mode: Replace**
