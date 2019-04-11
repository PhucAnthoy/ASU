README for NEU "Ruggles" Theme

WELCOME to the Ruggles theme. This theme has been developed for implementation on NEU-hosted web servers, and makes an effort to follow NEU branding guidelines (more on those later). It is lightweight, user-friendly, and actively maintained as of release (May 2015).

#########################
### TABLE OF CONTENTS ###
#########################

	Ctrl+f/Cmd+f any section heading to zip straight to it!

1.) Overview
2.) Quick Setup Instructions
3.) Getting Started
	3a.) Initial Site Setup
	3b.) Activating Ruggles
	3c.) Customizing Ruggles
	3d.) Modifying Sidebars
	3e.) Defining Menus
	3f.) Adding Plugins (with a friendly note...)
4.) Underneath the Hood
	4a.) The Base Theme
	4b.) Customized Components
	4c.) Footer Logo Location
	4d.) NEU Universal Footer
5.) Reporting Issues
6.) Changelog

####################
### 1.) Overview ###
####################

With the lapse in support for Northeastern's Huntington and Columbia themes, many NEU websites have become incompatible with up-to-date Wordpress core files. This has led to security vulnerabilities and display issues. A new solution was necessary.

Ruggles is our attempt to create a theme for wide use by all members of the NEU community. At its most basic, it is lightweight and extremely user-friendly. It is also compatible with most any up-to-date Wordpress plugin, so expanding its functionality is straightforward. If you are not familiar with Wordpress, you will not have any trouble getting a site up and running. If you are, you will have no issues adding what you need to a Ruggles-based website.

For more in-depth information about Ruggles, head down to section 3.) Underneath the Hood.

####################################
### 2.) Quick Setup Instructions ###
####################################

If you already have a good grasp on Wordpress, these instructions will get you up and running in a handful of minutes. If you need more detailed instruction, skip down to 3.) Getting Started.

	Navigate to your site URL (e.g. https://www.northeastern.edu/sitename).
	Run the Five-minute Wordpress Installation, with your desired language, Site Title, and user credentials.
	Log in to your website.
	Within the Wordpress dashboard, go to the Themes screen (left-hand menu > Appearance > Themes).
	Select "Ruggles" and activate it. NOTE: DO NOT touch the Hueman theme. Ruggles is dependent on it.

Once Ruggles is active, customizing your site is fairly straightforward, and accomplished in the Customizer (Customize in the admin bar, or left-hand menu > Appearance > Customize from within the Dashboard). From the Customizer you can set layout, font, and color options, customize your sidebars and menus, and more. Northeastern's colors as well as a link to the university's Branding Guidelines can be found under section 3c.) Customizing Ruggles.

Out of the box, Ruggles is barebones. There are no standard plugins packaged up with it. But Ruggles is compatible with up-to-date Wordpress plugins. Before installing a plugin, please ensure that the plugin is compatible with the current version of Wordpress

###########################
### 3.) Getting Started ###
###########################

This guide will assume you have submitted a New Account request via Service Now, and been granted your new website. If you haven't, I'm not sure how you're reading this, because you need to be several steps further on in the process to have access to this document. But who am I to disagree with reality?

	### 3a.) Initial Site Setup ###

You should have received an email informing you that your website has been created. That email should contain the following information:
	Website URL
	Web Server
	Server Username
	Server Password

Your website URL should be http://www.northeastern.edu/sitename or https://www.northeastern.edu/sitename, where 'sitename' is the name you requested for your website. The first time you navigate to your website URL, you will be met by the Wordpress Installation Screen.

	Select your preferred language and click 'Continue'.
	On the next screen, fill in the form fields with your desired information.
		Site Title
		Username
			NOTE: It is very common for webmasters to use 'admin' as their username. Because it is so common, it is frequently targeted by malicious scripts. We urge you to choose a username other than 'admin' or its like (e.g., 'administrator').
		Password (twice, to confirm)
		Your E-mail (for account recovery purposes)
		Privacy
			NOTE: If you don't want users to be able to find your site via search engines until it is "finished", uncheck this box. Users will still be able to access your site by typing the URL directly into their browser, but Google, Bing, etc. will ignore it. This setting can be changed at a later date, and is entirely your preference.

		NOTE: Any of these settings can be changed at any time within Wordpress by an admin-level account.

	Once these fields are completed, click 'Install Wordpress'. You should be greeted by a confirmation screen that displays your username. Click the 'Log In' button, which will take you to the login screen.
	Enter the username and password you just used in the installation process and click 'Log In'. 
	You should arrive at the Wordpress Dashboard.

Success!

	### 3b.) Selecting the Ruggles Theme ###

The Wordpress Dashboard is where you will manage your website. Here you will select a website theme, which will determine how your site looks. The Dashboard is also where you will create Pages, Blog Posts, upload images and other files, and so on. For now, let's select Ruggles as your website theme.

The main Dashboard menu is along the left-hand side of the screen. On that menu, select Appearance > Themes. You should see a list of themes, including Hueman and Ruggles. Your active theme will be listed first, and should have a black bar at the bottom, with a button that reads 'Customize'.

To change themes, hover over your desired theme on the list. A button that says 'Activate' should appear in the bar below the theme thumbnail. Click that button to activate your desired theme.

To view changes to your website, click your Site Title in the top menu bar. This will open your home page.

	### 3c.) Customizing Ruggles ###

Ruggles comes equipped with a very convenient and user-friendly Customizer. The Customizer allows you to modify your site layout, fonts, colors, menus, sidebars, and so on, while giving you a preview of your changes. You will notice that upon first installation, your website does not sport the NEU look. The Customizer lets us fix that in short order.

From the Dashboard left-hand menu, click Appearance > Customize. This will take you to a preview of your front page, with a menu pane on the left. In that menu, do the following:

	Click 'Global Settings'
	Click 'General Design Options'
	Ensure that 'Dynamic Styles' is checked.

The color options on this menu will cascade down to many of your website elements. Backgrounds, text, links, etc. will all be affected by these color choices. Experiment with what each option changes to find a look that you like. For easy reference, here are colors common to NEU websites.

	NEU Official Colors
		Northeastern Red : #CC0000 or #c00 for short
		Warm Grey : #615445
		Black : #000000 or #000

	Colors Common to NEU Websites
		Near Black : #353535
		Graphite 1 : #636363 (used in the NEU Universal Footer)
		Graphite 2 : #666
		White : #ffffff or #fff
		Light Grey 1 : #efefef
		Light Grey 2 : #fafafa

If you are using a white background (#fff), it is not advisable to use pure black (#000) as your text color. The contrast is so extreme it accelerates eye fatigue. A slightly lighter shade of black is easier on the eyes: common shades are #333 and #444.

If you are curious about the NEU Branding Guidelines for NEU's web presence practices, see https://www.northeastern.edu/guidelines/web/generalguidelines.html. Generally speaking, NEU favors sans-serif fonts, light background colors, and judicious use of Northeastern Red. The site header should be a light or white background, featuring a Northeastern wordmark along the left. Warm Grey is commonly used for school/department/unit/etc. identifiers that lie below the Northeastern logo in the header.

	### 3d.) Modifying Sidebars ###

On launch, all Wordpress websites show a standard set of content in their sidebar areas. You may want to change what appears in your sidebars. A list of useful links, a Twitter feed, or a full-fledged navigation menu can all be added to a sidebar 