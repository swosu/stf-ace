#2016 - June

##Mon, June 20th

###Completed
* >88 Server updates
* Talk to IT about Respondus Lock-Down Browser Lab Edition

###Problems That Arose
* Server connection failed              Status: Fixed             How: Removed Hyper-V feature
* WSUS service continues to stop        Status: Not Fixed         What Next: Remove WSUS

###Need to Do
* Install RAM and HDDs (Must wait for few days with no classes)
* Talk to professors about programs required for classes
* Send email to IT about Respondus Lock-Down Browser Lab Edition

###Research
* Researched ways to add RAID/Backup structure
  * No luck in discovering restoration from previous backup to different RAID type
  * Did find information on adding to previous RAID, just cannot change RAID without starting server clean

###In Progress
* Server Backup                         Status: System Reserved 100%, Local Disk 44%, System State 0%, Bare Metal Recovery 0%     Time: 1703

##Tue, June 21st

###Completed
* Uninstalled WSUS
* Deleted duplicate files
* Excluded addresses 10.70.5.2 & 10.70.5.3 for ITS use
* Toggled DNS & DHCP (to make sure needed excluded addresses are not and will not be in use)
* Full server backup initialized previous day completed

###Problems That Arose
* Limited server internet connection    Status: Fixed             How: Removed WSUS & Toggled DNS & DHCP after excluded addresses were added
* ISO not showing on commands           Status: Not Fixed         What Next: Get new CDs and mount ISOs to them

###Need to Do
* Install RAM and HDDs (Must wait for few days with no classes)
* Talk to professors about programs required for classes
* Send email to IT about Respondus Lock-Down Browser Lab Edition
* Full server backup on 2nd external HD

###Research
####General
* ISO on CD issue
* Adding HDDs & Backup structure to pre-existing system

####Errors
* Error ID#36888, Source: Schannel, Log: System
* Error ID#5722, Source: NETLOGON, Log: System

###In Progress
* (C:) Drive Optimization                Status: Pass 1: 87% Defragmented                                                          Time: 1652

###NOTE
####Critical
* Keep watch in Event Viewer log for Critical error ID#41, Source: Kernel Power, Log:System. First Recorded Date and Time of Error: Date: 6-20-2016 Time: 2101. Keep an eye on how often this occurs. May have to switch to 2nd UPS and replace the battery for the 1st UPS.

##Wed, June 22nd
###Completed
* In attempt to fix Schannel error ID#36888, gpedit.msc -->Computer Configuration-->Administrative Templates-->System-->Distributed COM-->Application Compatibility-->Enable "Allow local activation security check exemptions" (Failed, so changed back to default settings [Not Configured])
* In GP Management, under GPO-->Default Domain Policy-->Computer Configuration-->Administrative Templates-->Windows Components-->Security Center-->Enable "Turn on security center (Domain PCs only)"
* In GP Management, under GPO-->Device Driver Searching-->Computer Configuration-->Administrative Templates-->System-->Internet Communication Settings-->Disable "Turn off Windows Update device driver searching"
* Downloaded Google Admin Template
* In GP Management, under GPO-->Browser Updates-->Computer Configuration-->Administrative Templates-->Classic Administrative Templates-->Google-->Google Update-->Preferences-->Enable "Auto-update check period override"-->1400 minutes (24 hours)
* In GP Management, under GPO-->Browser Updates-->Computer Configuration-->Administrative Templates-->Classic Administrative Templates-->Google-->Google Update-->Applications-->Enable "Update policy override default"-->Always allow updates (Recommended)
* In GP Management, under GPO-->Browser Updates-->Computer Configuration-->Administrative Templates-->Classic Administrative Templates-->Google-->Google Update-->Applications-->Google Chrome-->Enable "Allow installation"
* In GP Management, under GPO-->Browser Updates-->Computer Configuration-->Administrative Templates-->Classic Administrative Templates-->Google-->Google Update-->Applications-->Google Chrome-->Enable "Update policy override"-->Always allow updates (Recommended)
* In GP Management, under GPO-->Browser Updates-->Computer Configuration-->Administrative Templates-->Classic Administrative Templates-->Google-->Google Update-->Applications-->Google Chrome Binaries-->Enable "Allow installation"
* In GP Management, under GPO-->Browser Updates-->Computer Configuration-->Administrative Templates-->Classic Administrative Templates-->Google-->Google Update-->Applications-->Google Chrome Binaries-->Enable "Update policy override"-->Always allow updates (Recommended)
* Added Windows Server Desktop Experience to server

###Problems That Arose
* Errors in Event Viewer log

###Need to Do
* Install RAM and HDDs (Must wait for few days with no classes)
* Talk to professors about programs required for classes
* Send email to IT about Respondus Lock-Down Browser Lab Edition
* Full server backup on 2nd external HD

###Research
####General
* ISO on CD issue
* Adding HDDs & Backup structure to pre-existing system

####Errors
* Error ID#36888, Source: Schannel
* Error ID#5722, Source: NETLOGON
* Warning ID#910, Source: ESENT
* Warning ID#1530, Source: Microsoft-Windows-User Profile Service
* Warning ID#27, Source: E1iexpress
* Warning ID#2511, Source: Server
* Error ID#8193, Source: VSS
* Warning ID#3, Source: SQL Browser
* Warning ID#10020, Source: Microsoft-Windows-DHCP-Server
* Warning ID#12, Source: Microsoft-Windows-Time Service
* Warning ID#10154, Source: Microsoft-Windows-Windows Remote Management
* Warning ID#12317, Source: SRMSVC
* Warning ID#6038, Source: Microsoft-Windows-LSA
* Warning ID#63, Source: Microsoft-Windows-WMI
* Warning ID#396, Source: MR_MONITER
* Warning ID#6004, Source: Microsoft-Windows-WINLOGIN
* Warning ID#10149, Source: Microsoft-Windows-Windows Remote Management

###In Progress
* Master PC Windows Updates               Status: 45/72 Updates Installed                                                         Time: 1637

###NOTE
* Most errors show right after a server reboot

##Mon, June 27th
###Completed
* MTOL for June 20th, 21st, and 22nd
* Installed 3 updates on Master PC
* Installed 12 updates on Server

###Problems That Arose
* Errors in Event Viewer log (See Below)

###Need to Do
* Install RAM and HDDs (Must wait for few days with no classes)
* Talk to professors about programs required for classes
* Send email to IT about Respondus Lock-Down Browser Lab Edition
* Full server backup on 2nd external HD
* Update all existing applications on Master PC

###Research
####General
* ISO on CD issue
* Continued research on Schannel error & found something for removing TSL, but large security risk so will not do
* Adding HDDs & Backup structure to pre-existing system
* Watched Instructional Videos:
  * Intro to Web Administration by Eli the Computer Guy (Finished Watching)
  * Network Cabling by Eli the Computer Guy (Finished Watching)
  * Physical Network Segmentation by Eli the Computer Guy (Finished Watching)

####Errors
* Error ID#36888, Source: Schannel (MOST FREQUENTLY OCCURRING)
* Error ID#5722, Source: NETLOGON
* Warning ID#910, Source: ESENT
* Warning ID#1530, Source: Microsoft-Windows-User Profile Service
* Warning ID#27, Source: E1iexpress
* Warning ID#2511, Source: Server
* Error ID#8193, Source: VSS
* Warning ID#3, Source: SQL Browser
* Warning ID#10020, Source: Microsoft-Windows-DHCP-Server
* Warning ID#12, Source: Microsoft-Windows-Time Service
* Warning ID#10154, Source: Microsoft-Windows-Windows Remote Management
* Warning ID#12317, Source: SRMSVC
* Warning ID#6038, Source: Microsoft-Windows-LSA
* Warning ID#63, Source: Microsoft-Windows-WMI
* Warning ID#396, Source: MR_MONITER
* Warning ID#6004, Source: Microsoft-Windows-WINLOGIN
* Warning ID#10149, Source: Microsoft-Windows-Windows Remote Management
* Warning ID#1309, Source: ASP.NET 4.0.30319.0

###In Progress
* NONE

###NOTE
* Most errors show right after a server reboot

##Tue, June 28th
###Completed
* MTOL for June 27th and 28th
* Sent Rene email about Respondus Lock-Down Browser Lab Edition (Still awaiting Response)
* Updates almost all of Master PC applications:
  * Acrobat Adobe Reader DC; Version 15.016.20045
  * Android Studio; Version 2.1.2
  * Atom.io; Version 1.8.0
  * Autodesk Maya; Version 2016; Addition to Epic Games Launcher
  * BOINC; Version 7.6.22
  * Eclipse; Eclipse Java Neon Version 4.6.0; Old Version (Java Mars) Deleted
  * Epic Games Launcher; Version 4.10.4
  * Git; Version 2.9.0.0
  * Google Chrome; Version 51.0.2704.106
  * InfraRecorder; Version 0.53.0.0
  * Java; Version 8 Update 91
  * Java Development Kit (JDK); Version 8 Update 91
  * KeePass 2; Version 2.31
  * LEGO Mindstorms NXT; Version 2.0
  * Microchip MPLAB; Version 3.20
  * Microsoft Office Professional; Version 2013
  * Microsoft SQL Server Management Studio 2008; Version 10.0.5538.0
  * Microsoft Visual Studio; Version 2010 Ultimate; Visual Studio 2015 Community
  * Minecraft; Minecraft Launcher 1.6.61
  * Model Sim Altera Starter Edition; Version 10.3d
  * Riverbed Modeler Academic Edition; Version 17.5
  * Mozilla Firefox; Version 47.0.1
  * Nios II EDS; Version  15.0
  * Notepad ++; Version 6.9.2
  * Oracle VM VirtualBox; Version 5.0.22 r108108
  * Putty; Version 0.65
  * Python; Version 3.5.2
  * Quartus II Web Edition; Version 15.0
  * Rainmeter; Version 3.3.2
  * TeraCopy; Version 2.31
  * VLC Media Player; Version 2.2.4 Weatherwax
  * WinMerge; Version 2.14.0.0 Unicode
  * WinSCP; Version 5.8.4 RC (Build 6736)
  * Wireshark; Version 2.0.4

###Problems That Arose
* Errors in Event Viewer log (See Below)

###Need to Do
* Install RAM and HDDs (Must wait for few days with no classes)
* Email professors about programs required for classes (Get Dr. Sweeney's opinion)
* Send email to IT about Respondus Lock-Down Browser Lab Edition
* Full server backup on 2nd external HD
* Update leftover Master PC applications:
  * National Instruments LabVIEW (32-bit); Version 10.0.1; 30 DAYS OF LICENSE REMAINING (SEE MRS. BAUGHER)
  * Respondus Lockdown Browser Lab Edition; WAITING FOR RESPONSE FROM RENE
  * Visio 2013; NEED LICENSE (SEE MRS. BAUGHER)

###Research
####General
* ISO on CD issue
* Adding HDDs & Backup structure to pre-existing system
* Watched Instructional Videos:
  * Adding Hard Drives and Creating Volumes in Windows Server 2012 by Eli the Computer Guy (8:06/30:11 Finished Watching)

####Errors
* Error ID#36888, Source: Schannel (MOST FREQUENTLY OCCURRING)
* Error ID#5722, Source: NETLOGON
* Warning ID#910, Source: ESENT
* Warning ID#1530, Source: Microsoft-Windows-User Profile Service
* Warning ID#27, Source: E1iexpress
* Warning ID#2511, Source: Server
* Error ID#8193, Source: VSS
* Warning ID#3, Source: SQL Browser
* Warning ID#10020, Source: Microsoft-Windows-DHCP-Server
* Warning ID#12, Source: Microsoft-Windows-Time Service
* Warning ID#10154, Source: Microsoft-Windows-Windows Remote Management
* Warning ID#12317, Source: SRMSVC
* Warning ID#6038, Source: Microsoft-Windows-LSA
* Warning ID#63, Source: Microsoft-Windows-WMI
* Warning ID#396, Source: MR_MONITER
* Warning ID#6004, Source: Microsoft-Windows-WINLOGIN
* Warning ID#10149, Source: Microsoft-Windows-Windows Remote Management
* Warning ID#1309, Source: ASP.NET 4.0.30319.0

###In Progress
* Server Backup 2nd HDD                 Status: System Reserved 100%, Local Disk 80%, System State 0%, Bare Metal Recovery 0%     Time: 1724
* Master PC to IMG                      Status: 61% Completed                                                                     Time: 1724

###NOTE
* Most errors show right after a server reboot
