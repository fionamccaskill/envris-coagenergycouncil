Redirect and show URL
=====================

Document version: 1.0
Date of document:20/07/2015
Type: Feature/custom module
Module version: 7.x-1.41
Stash URL: https://industrygit.slicedtech.com.au/scm/mod/redirect_and_show_url.git
Creator:Margery Tongway
Contact:Margery Tongway  web.development@industry.gov.au (02) 6102 8051

/**Purpose:**/
--------------

The Redirect & show URL module is to be used on all departmental Drupal websites to 
ensure that passwords & content authoring will be more secure than ever before. 

Although no security problems have occurred, we’d like to keep on top with the best 
currently available solution. We have applied an SSL certificate to all internal 
site URLs that end with *.industry.slicedtech.com.au.

This module will automatically redirect users (when logged in) to the secure internal 
url of the live website. As an example https://ministers.industry.gov.au will 
redirect to https://prod-minister-industry-gov-au.industry.slicedtech.com.au . 

To assist content authors who need to supply others or a 3rd party with the live URL, 
the site also has a “block” set up that will show the logged in user what the live URL is, 
even though they’re logged into the internal URL.

/**Who this document is for:**/
---------------------------------

This document is intended for administrators or others given permission to enable and set up the 
“Redirect and show URL module” on the departments Drupal websites. It also includes technical 
notes for web developers creating sites in aegir.

The document will step through enabling the module, how to configure two separate functions of 
this module & run through possible troubleshooting tips.

The Ministers site is being used as an example in this document.

/**Installation **/
---------------------

A new platform for a site will need to be created, and will need to include the Redirect and show URL module:

projects[redirect_and_show_url][type] = "module"
projects[redirect_and_show_url][download][url] = "https://industrygit.slicedtech.com.au/scm/mod/redirect_and_show_url.git"
projects[redirect_and_show_url][download][type] = "git"
projects[redirect_and_show_url][subdir] = "custom"

The dependencies are: entity, fe_block, features, filter, rules, rules_admin & token_filter.

/**Enabling and Setup**/
-------------------------

/***Enable***/

Go to Modules > Select the Redirect and show URL tab to “ON”: > Select Save (bottom of screen). 

This module has a number of dependencies that may need to be enabled.

Select continue. When complete it will take you back to the module list. 

/***Enable/Disable***/
-----------------------

You can enable or disable the rule by going to Configuration > System > Redirect to Secure URL >Enable (or disable). 
A confirmation screen will ask you if you wish to proceed.

/***Configuring***/
--------------------

To configure you can either select “configure” in the module list, or go to Configuration > System > Redirect to Secure URL

The first change is to the rule to redirect the content author on login, where the Value will need to be changed 
from http://prod-SITENAME-industry-gov-au.industry.slicedtech.com.au/user to the 
internal URL eg: http://prod-minister-industry-gov-au.industry.slicedtech.com.au/user

At this point right click/open new tab on the text “live link” to open the blocks page.

Select save for the Rule, then switch to the blocks listing page.  Alternatively press save, then select Structure> Blocks.

/***Live Link***/
-----------------

Set the live URL of the site that the public see - eg: http://SITENAME.industry.gov.au/[current-page:url:path] 
becomes http://minister.industry.gov.au/[current-page:url:path] Select Save Block (bottom of screen).

Scroll down the blocks list & select “configure” on the "live link" block.

Depending on the setup of the site, you will either need to set the Live Link block to only be available 
for users who are logged in & put into a region, or alternatively, add it to a panel/page & set the permissions 
for authenticated users only.

Panel setup: Edit panel, Add content (where you would like the live link to appear)

Select Custom blocks > Live Link
Set title (eg Live URL)
Select the cog > Add new rule
Select User:role
Select anonymous user, and Reverse (NOT)
Select update & save, then go back to a content page.

/**Troubleshooting**/
----------------------
/***User cannot log on (redirect is wrong or not working)***/

If the user receives a 404 error when logging on, this could mean that the site has had an upgrade and a 
different internal URL has been used by accident, or the URL has been entered incorrectly during configuration.

Firstly go to Configuration > System > Redirect to Secure URL

If the correct URL is listed, please contact web.development@industry.gov.au to ask if the site has recently 
been updated. The outcome will either be:
*a different URL to replace the existing in the Value box, or 
*the web development team to fix internal URL ASAP


/***Live Link is wrong/not working***/
-----------------------------------------

If the Live Link is not showing correctly on screen, it could mean that it wasn’t configured correctly. 
To check, go to Structure> Blocks, then select configure Live Link.
If you’re unable to identify the problem, please contact web.development@industry.gov.au for assistance.

/***Live Link not displaying page URL correctly***/
---------------------------------------------------

If the live link is appearing like this: http://minister.industry.gov.au/[current-page:url:path]

You will need to check the Full HTML text settings under Configuration > Content Authoring > Text  Formats > Full HTML.
Make sure that “Replace tokens” is ticked.
If this does not solve the problem, please contact web.development@industry.gov.au for further assistance.
