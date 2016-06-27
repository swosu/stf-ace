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
