# Microsoft Server 2012 Installation

## Recommended Reference

*MCSA Guide to Administering Microsoft Windows Server 2012/R2*

## Procedure

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