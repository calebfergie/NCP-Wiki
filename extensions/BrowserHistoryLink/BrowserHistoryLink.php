<?php
/*
	-- BrowserHistoryLink Extension --
	@installation Add this line to LocalSettings.php: require_once($IP."/extensions/BrowserHistoryLink/BrowserHistoryLink.php")
	@usage <historylink> tag, see http://www.mediawiki.org/wiki/Extension:BrowserHistoryLink for more info.
	@name BrowserHistoryLink
	@author Techjar <tecknojar@gmail.com>
	@url http://www.mediawiki.org/wiki/Extension:BrowserHistoryLink
	@version 1.0.2
	@description Adds a tag to create a link with a JavaScript event to go forward or back in the client's web browser.
	@license Public domain
*/

// Check environment
if(!defined('MEDIAWIKI')) {
	die("This file is part of a MediaWiki extension, and cannot be run standalone.");
}

// Credits
$wgExtensionCredits['parserhook'][] = array(
	'path'           => __FILE__,
	'name'           => 'BrowserHistoryLink',
	'version'        => '1.1',
	'update'         => '8-02-2009',
	'author'         => array('Techjar'),
	'url'            => 'http://www.mediawiki.org/wiki/Extension:BrowserHistoryLink',
	'description'    => 'Adds a tag to create a link with a JavaScript event to go forward or back in the client\'s web browser.',
	'descriptionmsg' => 'browserhistorylink-desc',
);

// Extension directory shortcut
$dir = dirname(__FILE__).'/';

// Internationalization
$wgExtensionMessagesFiles['BrowserHistoryLink'] = $dir.'BrowserHistoryLink.i18n.php';

// Load classes
$wgAutoloadClasses['BrowserHistoryLink'] = $dir.'BrowserHistoryLink.class.php';

// Register parser hook
if(defined('MW_SUPPORTS_PARSERFIRSTCALLINIT')) {
	// Modern
	$wgHooks['ParserFirstCallInit'][] = 'BrowserHistoryLink::init';
}
else {
	// Legacy
	$wgExtensionFunctions[] = array('BrowserHistoryLink', 'init');
}