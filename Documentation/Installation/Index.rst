..  include:: /Includes.rst.txt

..  _installation:

============
Installation
============

Installation from TYPO3 Extension Repository (TER)
===

Go to extension manager in TYPO3 backend, choose "install extension" and search for accessibility4typo3. Then click on "install".

Installation using composer
===

The extension is not availabel in a public repository, but nevertheless it can be installed using composer. Add a section for a local istall of packages like this:

..  code-block:: json
	"repositories": [
		{
			"type": "path",
			"url": "./packages/*/",
			"options": {
			 	"symlink": true
			 }
		}
	],

Then copy the extension to the /packages directory. Install using

..  code-block:: bash
	composer require gsp/accessibility4typo3:@dev


Include TypoScript
==================


#. Switch to the root page of your site.

#. Switch to the :guilabel:`Template module` and select *Info/Modify*.

#. Press the link :guilabel:`Edit the whole template record` and switch to the tab
   *Advanced Options*.

#. Select :guilabel:`GSP accessibility tool` at the field *Include TypoScript sets*