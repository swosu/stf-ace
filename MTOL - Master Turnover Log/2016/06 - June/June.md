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
