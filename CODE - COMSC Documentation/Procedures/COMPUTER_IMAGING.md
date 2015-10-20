# Imaging

## Step 1: Format HDD
1. Plug the USB into the server and login
2. Once logged in:
	1. **Go to** the **Admins** folder
	2. **Go to** _Server Backup_
	3. **Go to** _ISOS_
	4. **Go to** _Rufus_
	5. **Click** _Yes_
	6. **Select** _Device no label_
	7. **Select** _New volume label_
	8. **Select** _nghost_
	9. **Select** _Quick format_
3. Continue to Step 2

## Step 2: Load VM Ware Installer onto a USB using Rufus or Unetbootin
1. **Click on** _Click to select an image icon_
2. **Go to** the _Admins_ folder
3. **Go to** the _Server Backup_
4. **Click on** _nghost.ISO_
5. **Click** _Next_
6. **Click** _Start_
7. **Click** _OK_
8. **Wait** while the USB copies the ISO files

## Step 3: Boot system and boot off of the USB
1. When Step 2 is complete, **Plug in** the USB with nghost into the computer you wish to add a pre-existing image to while the computer is off
2. **Turn on** the computer and **Immediately begin pressing** the _[F12]_ key until the boot menu appears
3. When the Boot Menu appears:
	1. **Click on** _USB Storage Device_
	2. **Quickly press** the _[Enter]_ key (or any other key) when the boot from USB screen appears

## Step 4: Start the imaging process using imaging file
1. **Wait for** the _startnet.cmd_ box to appear on the screen
2. **Plug in** the external HDD that contains the boot image
3. **Wait awhile** before the nghost prompt appears
	1. When the prompt does appear, **Click** _OK_
	2. **Select** _Local_
	3. **Select** _Disk_
	4. **Select** _From image_
