			<h1>CODE - COMSC Documentation</h1>
				<h2>Door Status</h2>
					<h3>Rooms 342 &amp; 343</h3>
						<ul class="list">
							<li>The door should be locked at all times.</li>
							<li>To gain access, knock on the door.</li>
							<li>If no response is heard, access can be gained by contacting Erin Hawkins in room 334, Dr. Karen Sweeney in room 308, or Hayden Harrington in room 314.</li>
						</ul>
				<h2>Formatting</h2>
					<h3>Headers</h3>
						<ul class="list">
							<li>h1 should only be used for Document titles or main sections of the document.</li>
							<li>Headers are used in a heiarchial manner from h1 to h5.</li>
							<li>Headers 2-5 are used for each new section in a heiarchial pattern.</li>
						</ul>
					<h3>Plain Text</h3>
						<ul class="list">
							<li>Plain text that follows a header should use a p tag. (See Source)</li>
						</ul>
						<!-- Example Code 
						<h3>Example Header</h3>
						<p class="list">Example plain text under a header with whitespace.</p>
						-->
						<h3>Example Header</h3>
						<p class="list">Example plain text under a header with whitespace.</p>
					<h3>Use of Whitespace</h3>
						<ul class="list">
							<li>Make sure there is a space between each header and text by either using a break, enclosing the text in a p tag, or using ordered or unordered lists.</li>
						</ul>
					<h3>Keystrokes / Instructions</h3>
						<ul class="list">
							<li>Keystrokes are represented in <strong>bold</strong> and surrounded by brackets [].  Example: Press the <strong>[Enter]</strong> key.</li>
							<li>Key combinations should be represented the same as the above with plus signs (+) separating them.  Example: Press and hold the <strong>[Ctrl] + [Alt] + [Del]</strong> keys together.</li>
							<li>Actions required by the user should be represented in <strong>bold</strong>.</li>
							<ul>
								<li>Buttons should be represented in <em>italics</em>.<br>Example: <strong>Click</strong> <em>Next</em></li>
							</ul>
							<li>Code that should be written, text that should be typed, commands that should be entered into the command line should be represented in <code>monospace font using the code tag</code>.  Example: <strong>Type</strong> <code>*.bat</code> into the Search Box, then hit <strong>[Enter]</strong>.</li>
							<li>All linkable text should be linked where appropriate.  Example:
							<ol>
								<li><strong>Browse</strong> to <a href="http://google.com" title="Google.com">Google</a>.
								<ul>
									<li>Links should have default formatting.</li>
								</ul>
								</li>
							</ol>
							</li>
						</ul>
			<h1>Procedures</h1>
				<h2>Lab Setup</h2>
					<h3>On Equipment Arrival</h3>
						<ul class="list">
							<li>Take note of the number of machines.</li>
							<li>Unpack the CPU Tower for each machine.</li>
							<li>Unpack the monitor for each machine and attach to included stand, if necessary.</li>
							<li>Take note of any extra unneeded cables and place them in a separate container for surplus.</li>
							<li>Place any unused software in a separate bin and keep in safe and accessable place.</li>
							<li>Unpack mouse and keyboard for each machine.</li>
							<!-- TODO: finish procedures for setting up lab -->
						</ul>
					
				<!-- TODO: Put procedures for incemental backup. -->

				<h2>Performing a Full File Backup</h2>
					<ol class="list">
						<li>Log into the server.</li>
						<li>Insert an external HDD into an available USB port.</li>
						<li>Press the <strong>[Windows key]</strong> on the keyboard (located between the Ctrl and Alt keys)</li>
						<li><strong>Click</strong> on the <strong>Computer</strong> option in the Start Menu.</li>
						<li>When Windows detects the external HDD, open the drive from the window that pops up.
							<ul>
								<li>To create a new folder for the backup, <strong>Click the Right Mouse Button</strong>.</li>
								<li><em>Move</em> your mouse over the <strong>New</strong> menu option.</li>
								<li><strong>Click the Left Mouse Button</strong> on the <strong>Folder</strong> menu option.</li>
								<li>A folder icon should appear labeled as "New Folder" with the immediate option to change its name.  Note: If you click away from this, the folder will have a default name of "New Folder".</li>
								<li>Name the folder something meaningful such as the time and date the backup is for and the name of the machine, then press the <strong>[Enter]</strong> key.</li>
								<li><strong>Click the Right Mouse Button</strong> on <strong>Desktop</strong> in the left sidebar and <em>select</em> the <strong>Copy</strong> menu option.</li>
								<li>If your external HDD is still in focus, <strong>Double-click the Left Mouse Button</strong> on the folder you created a moment ago.  The folder should now be in focus.</li>
								<li><strong>Click the Right Mouse Button</strong> within the folder and <em>select</em> the <strong>Paste</strong> option.
									<ul>
										<li>A progess window should now appear and display the status of the copy operation.</li>
										<li>Depending on the number of files, this operation could take several minutes to hours.</li>
										<li>Once the operation has run for a couple of minutes, there should be an estimate for the amount of time it will take for the operation to complete.</li>
									</ul>
								</li>									
							</ul>
						</li>
						<li>There will not be a audio notification when the operation completes, but you will know it has finished when the progress window disappears.</li>
					</ol>

					<!-- TODO: How to setup RAID on the server -->
					
					<h2>Server Installation</h2>
						<h3>Recommended Reference</h3>
							<p class="list">MCSA Guide to Administering Microsoft Windows Server 2012/R2</p>
								<ol class="list">
									<li>Install Windows
										<ol>
											<li><strong>Press</strong> <strong>[F12]</strong> when booting screen begins</li>
											<li>Select device that Windows will be booting from</li>
											<li><strong>Press</strong> <strong>[Enter]</strong></li>
											<li>On the Windows Server 2012 pop-up, make sure the language is set to English
											<li><strong>Click</strong> <em>Next</em></li>
											<li><strong>Click</strong> <em>Install Now</em> </li>
											<li><strong>Input</strong> the product key information</li>
											<li><strong>Click</strong> <em>Next</em></li>
											<li><strong>Select</strong> <em>Windows Server 2012 Standard (Server with GUI)</em></li>
											<li><strong>Click</strong> <em>Next</em></li>
											<li><strong>Accept</strong> terms</li>
											<li><strong>Click</strong> <em>Next</em></li>
											<li><strong>Click</strong> <em>Custom</em></li>
											<li><strong>Click</strong> <em>Drive 0 Unallocated Space</em></li>
											<li>Wait for Windows to install</li>
										</ol>
									</li>
									<li>Create a password
										<ol>
											<li>From Settings, <strong>Create</strong> a password</li>
											<li><strong>Add</strong> the password to 1Password</li>
											<li><strong>Click</strong> <em>Next</em></li>
											<li><strong>Login</strong> to server</li>
										</ol>
									</li>
									<li>Place backup on the server
										<ol>
											<li><strong>Insert</strong> the device with the server backup into the server</li>
											<li><strong>Copy</strong> the server backup</li>
											<li><strong>Paste</strong> the server backup onto the server desktop</li>
										</ol>
									</li>
									<li>Add the server IP Address
										<ol>
											<li><strong>Right click</strong> on the network options icon in the bottom right of the server screen</li>
											<li><strong>Click</strong> <em>Open Network and Sharing Center</em></li>
											<li><strong>Click</strong> <em>Change adapter settings</em></li>
											<li><strong>Click</strong> <em>Ethernet</em></li>
											<li><strong>Right click</strong> <em>Ethernet</em></li>
											<li><strong>Click</strong> <em>Properties</em></li>
											<li><strong>Click</strong> <em>Internet Protocol Version 4 (TCP/IPv4)</em></li>
											<li><strong>Click</strong> <em>Properties</em></li>
											<li><strong>Input</strong> the following IP Addresses:
												<ul>
													<li>IP Address: 10.70.5.10</li>
													<li>Subnet Mask: 255.255.255.0</li>
													<li>Default Gateway: 10.70.5.1</li>
												</ul>
											</li>
											<li><strong>Input</strong> the following DNS Server IP Addresses:
												<ul>
													<li>Preferred DNS Server Address: 8.8.8.8</li>
													<li>Alternate DNS Server Address: 8.8.4.4</li>
												</ul>
											</li>
											<li><strong>Click</strong> <em>Okay</em></li>
											<li><strong>Click</strong> <em>Close</em></li>
										</ol>
									</li>
									<li>Add Server Manager Roles and Features
										<ol>
											<li><strong>Open</strong> the Server Manager application</li>
											<li><strong>Click</strong> <em>Manage</em></li>
											<li><strong>Click</strong> <em>Add Roles and Features</em></li>
											<li><strong>Click</strong> <em>Next</em> three times</li>
											<li>Different options should be showing</li>
											<li><strong>Look for</strong> and <strong>Add</strong> the following:
												<ol>
													<li>Active Directory Domain Services (AD DS)</li>
													<li>Domain Name System (DNS) Server</li>
													<li>Dynamic Host Configuration Protocol (DHCP) Server</li>
													<li>Web Server</li>
													<li>Windows Deployment Services (WDS)</li>
													<li>Windows Server Update Services (WSUS)</li>
												</ol>
											</li>
											<li>Once these are all checked, <strong>Click</strong> <em>Next</em> until you reach Features</li>
											<li><strong>Check</strong> TFTP and Remote Differential Compression</li>
											<li><strong>Click</strong> <em>Next</em> until you reach Role Services</li>
											<li><strong>Look for</strong> and <strong>Add</strong> the following:
												<ol>
													<li>In Common HTTP Features:
														<ul>
															<li>HTTP Redirection</li>
														</ul>
													</li>
													<li>In Health and Diagnostics:
														<ul>
															<li>Custom Logging</li>
															<li>Logging Tools</li>
															<li>FTP Server</li>
															<li>FTP Service</li>
														</ul>
													</li>
													<li>In Security:
														<ul>
															<li>Basic Authentication</li>
															<li>Centralized SSL Certificate Support</li>
															<li>URL Authorization</li>
														</ul>
													</li>
											</li>
											<li><strong>Click</strong> <em>Next</em> until you reach the WSUS tab</li>
											<li>Once you reach WSUS, take the following actions:
												<ol>
													<li><strong>Go to</strong> <em>Content</em></li>
													<li>For the store updates remote path <strong>Type</strong>: 
														<ul>
															<li>C:\WSUS-Updates</li>
														</ul>
													</li>
													<li><strong>Click</strong> <em>Next</em></li>
													<li><strong>Click</strong> <em>Install</em></li>
													<li><strong>Close</strong> after installation is complete</li>
												</ol>
											</li>
										</ol>
									<li>Complete Notification Tasks
										<ol>
											<li>From Notifications, <strong>Go to</strong> the Post Deployment Configurations
												<ol>
													<li><strong>Launch</strong> the Post Installation Tasks</li>
													<li>After the Post Installation Tasks have been launched, <strong>Go to</strong> the Local Server</li>
													<li>From the Local Server, <strong>Find</strong> Windows Updates and <strong>Click</strong> <em>Not Configured</em></li>
													<li><strong>Turn on</strong> Auto Updates</li>
													<li><strong>Click</strong> <em>Install Now</em> <strong>ONLY</strong> after the Server Backup has completed</li>
												</ol>
											</li>
											<li>From Notifications, <strong>Go to</strong> the Post Deployment Configurations
												<ol>
													<li><strong>Complete</strong> DHCP configuration</li>
													<li><strong>Click</strong> <em>Commit</em></li>
													<li><strong>Click</strong> <em>Close</em></li>
												</ol>
											</li>
											<li>From Notifications, <strong>Go to</strong> the Post Deployment Configurations
												<ol>
													<li><strong>Promote</strong> this server to domain controller</li>
													<li><strong>Add</strong> a new forest</li>
													<li><strong>Make</strong> the Root domain name:
														<ul>
															<li>STFACE.local</li>
														</ul>
													</li>
													<li><strong>Click</strong> <em>Next</em></li>
													<li><strong>Make</strong> the Directory Service Restore Mode Password</li>
													<li><strong>Add</strong> the password to 1Password</li>
													<li><strong>Confirm</strong> password</li>
													<li><strong>Click</strong> <em>Next</em> until you can <strong>Click</strong> <em>Install</em></li>
													<li><strong>Click</strong> <em>Install</em></li>
													<li><strong>Restart</strong> the server</li>
												</ol>
											</li>
										</ol>
									</li>
									<!-- TODO:  -->


								</ol>

					<!-- TODO: How to restore the server -->
					<!-- TODO: How to handle a harddrive failure -->