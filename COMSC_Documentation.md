# CODE - COMSC Documentation

## Door Status

### Rooms 342 & 343

*   The door should be locked at all times.
*   To gain access, knock on the door.
*   If no response is heard, access can be gained by contacting Erin Hawkins in room 334, Dr. Karen Sweeney in room 308, or Hayden Harrington in room 314.

## Formatting

### Headers

*   h1 should only be used for Document titles or main sections of the document.
*   Headers are used in a heiarchial manner from h1 to h5.
*   Headers 2-5 are used for each new section in a heiarchial pattern.

### Plain Text

*   Plain text that follows a header should use a p tag. (See Source)

### Example Header

Example plain text under a header with whitespace.

### Use of Whitespace

*   Make sure there is a space between each header and text by either using a break, enclosing the text in a p tag, or using ordered or unordered lists.

### Keystrokes / Instructions

*   Keystrokes are represented in **bold** and surrounded by brackets []. Example: Press the **[Enter]** key.
*   Key combinations should be represented the same as the above with plus signs (+) separating them. Example: Press and hold the **[Ctrl] + [Alt] + [Del]** keys together.
*   Actions required by the user should be represented in **bold**.

*   Buttons should be represented in _italics_.  
    Example: **Click** _Next_

*   Code that should be written, text that should be typed, commands that should be entered into the command line should be represented in `monospace font using the code tag`. Example: **Type** `*.bat` into the Search Box, then hit **[Enter]**.
*   All linkable text should be linked where appropriate. Example:
    1.  **Browse** to [Google](http://google.com "Google.com").
        *   Links should have default formatting.

# Procedures

## Lab Setup

### On Equipment Arrival

*   Take note of the number of machines.
*   Unpack the CPU Tower for each machine.
*   Unpack the monitor for each machine and attach to included stand, if necessary.
*   Take note of any extra unneeded cables and place them in a separate container for surplus.
*   Place any unused software in a separate bin and keep in safe and accessable place.
*   Unpack mouse and keyboard for each machine.

## Performing a Full File Backup

1.  Log into the server.
2.  Insert an external HDD into an available USB port.
3.  Press the **[Windows key]** on the keyboard (located between the Ctrl and Alt keys)
4.  **Click** on the **Computer** option in the Start Menu.
5.  When Windows detects the external HDD, open the drive from the window that pops up.
    *   To create a new folder for the backup, **Click the Right Mouse Button**.
    *   _Move_ your mouse over the **New** menu option.
    *   **Click the Left Mouse Button** on the **Folder** menu option.
    *   A folder icon should appear labeled as "New Folder" with the immediate option to change its name. Note: If you click away from this, the folder will have a default name of "New Folder".
    *   Name the folder something meaningful such as the time and date the backup is for and the name of the machine, then press the **[Enter]** key.
    *   **Click the Right Mouse Button** on **Desktop** in the left sidebar and _select_ the **Copy** menu option.
    *   If your external HDD is still in focus, **Double-click the Left Mouse Button** on the folder you created a moment ago. The folder should now be in focus.
    *   **Click the Right Mouse Button** within the folder and _select_ the **Paste** option.
        *   A progess window should now appear and display the status of the copy operation.
        *   Depending on the number of files, this operation could take several minutes to hours.
        *   Once the operation has run for a couple of minutes, there should be an estimate for the amount of time it will take for the operation to complete.
6.  There will not be a audio notification when the operation completes, but you will know it has finished when the progress window disappears.

## Server Installation

### Recommended Reference

MCSA Guide to Administering Microsoft Windows Server 2012/R2

1.  Install Windows
    1.  **Press** **[F12]** when booting screen begins
    2.  Select device that Windows will be booting from
    3.  **Press** **[Enter]**
    4.  On the Windows Server 2012 pop-up, make sure the language is set to English
    5.  **Click** _Next_
    6.  **Click** _Install Now_
    7.  **Input** the product key information
    8.  **Click** _Next_
    9.  **Select** _Windows Server 2012 Standard (Server with GUI)_
    10.  **Click** _Next_
    11.  **Accept** terms
    12.  **Click** _Next_
    13.  **Click** _Custom_
    14.  **Click** _Drive 0 Unallocated Space_
    15.  Wait for Windows to install
2.  Create a password
    1.  From Settings, **Create** a password
    2.  **Add** the password to 1Password
    3.  **Click** _Next_
    4.  **Login** to server
3.  Place backup on the server
    1.  **Insert** the device with the server backup into the server
    2.  **Copy** the server backup
    3.  **Paste** the server backup onto the server desktop
4.  Add the server IP Address
    1.  **Right click** on the network options icon in the bottom right of the server screen
    2.  **Click** _Open Network and Sharing Center_
    3.  **Click** _Change adapter settings_
    4.  **Click** _Ethernet_
    5.  **Right click** _Ethernet_
    6.  **Click** _Properties_
    7.  **Click** _Internet Protocol Version 4 (TCP/IPv4)_
    8.  **Click** _Properties_
    9.  **Input** the following IP Addresses:
        *   IP Address: 10.70.5.10
        *   Subnet Mask: 255.255.255.0
        *   Default Gateway: 10.70.5.1
    10.  **Input** the following DNS Server IP Addresses:
        *   Preferred DNS Server Address: 8.8.8.8
        *   Alternate DNS Server Address: 8.8.4.4
    11.  **Click** _Okay_
    12.  **Click** _Close_
5.  Add Server Manager Roles and Features
    1.  **Open** the Server Manager application
    2.  **Click** _Manage_
    3.  **Click** _Add Roles and Features_
    4.  **Click** _Next_ three times
    5.  Different options should be showing
    6.  **Look for** and **Add** the following:
        1.  Active Directory Domain Services (AD DS)
        2.  Domain Name System (DNS) Server
        3.  Dynamic Host Configuration Protocol (DHCP) Server
        4.  Web Server
        5.  Windows Deployment Services (WDS)
        6.  Windows Server Update Services (WSUS)
    7.  Once these are all checked, **Click** _Next_ until you reach Features
    8.  **Check** TFTP and Remote Differential Compression
    9.  **Click** _Next_ until you reach Role Services
    10.  **Look for** and **Add** the following:
        1.  In Common HTTP Features:
            *   HTTP Redirection
        2.  In Health and Diagnostics:
            *   Custom Logging
            *   Logging Tools
            *   FTP Server
            *   FTP Service
        3.  In Security:
            *   Basic Authentication
            *   Centralized SSL Certificate Support
            *   URL Authorization
        4.  **Click** _Next_ until you reach the WSUS tab
        5.  Once you reach WSUS, take the following actions:
            1.  **Go to** _Content_
            2.  For the store updates remote path **Type**:
                *   C:\WSUS-Updates
            3.  **Click** _Next_
            4.  **Click** _Install_
            5.  **Close** after installation is complete
    11.  Complete Notification Tasks
        1.  From Notifications, **Go to** the Post Deployment Configurations
            1.  **Launch** the Post Installation Tasks
            2.  After the Post Installation Tasks have been launched, **Go to** the Local Server
            3.  From the Local Server, **Find** Windows Updates and **Click** _Not Configured_
            4.  **Turn on** Auto Updates
            5.  **Click** _Install Now_ **ONLY** after the Server Backup has completed
        2.  From Notifications, **Go to** the Post Deployment Configurations
            1.  **Complete** DHCP configuration
            2.  **Click** _Commit_
            3.  **Click** _Close_
        3.  From Notifications, **Go to** the Post Deployment Configurations
            1.  **Promote** this server to domain controller
            2.  **Add** a new forest
            3.  **Make** the Root domain name:
                *   STFACE.local
            4.  **Click** _Next_
            5.  **Make** the Directory Service Restore Mode Password
            6.  **Add** the password to 1Password
            7.  **Confirm** password
            8.  **Click** _Next_ until you can **Click** _Install_
            9.  **Click** _Install_
            10.  **Restart** the server