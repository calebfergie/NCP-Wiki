<?php
# This file was automatically generated by the MediaWiki 1.33.0-alpha
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "North Central Positronics";
$wgMetaNamespace = "North_Central_Positronics";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://ncp-wiki.herokuapp.com";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@ncp-wiki.herokuapp.com";
$wgPasswordSender = "apache@ncp-wiki.herokuapp.com";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$wgDBtype = "mysql";
$wgDBserver = $url["host"];
$wgDBname = substr($url["path"], 1);
$wgDBuser = $url["user"];
$wgDBpassword = $url["pass"];

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";
## Changes to allow GIFs to display and thumbnail properly
# Increase max area to a really big number
$wgMaxAnimatedGifArea = 5e9;
# Eliminate the time limit for the transcoder per https://phabricator.wikimedia.org/T206957
$wgTranscodeBackgroundTimeLimit = 0;

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "en";

$wgSecretKey = getenv("SECRET_KEY");

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = getenv("UPGRADE_KEY");

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/publicdomain/zero/1.0/";
$wgRightsText = "Creative Commons Zero (Public Domain)";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-0.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':

#Caleb's Settings
wfLoadSkin( 'Tweeki' );
$wgDefaultSkin = "tweeki";

#Favicon :P
$wgFavicon = "$wgScriptPath/images/favicon.ico";

#Debugging info in browers when Exception happens
$wgShowExceptionDetails = true;

#AWS Extension
wfLoadExtension( 'AWS' );
// Configure AWS credentials.
// THIS IS NOT NEEDED if your EC2 instance has an IAM instance profile.
$wgAWSCredentials = [
	'key' => getenv("AWS_ACCESS_KEY_ID"),
	'secret' => getenv("AWS_SECRET_ACCESS_KEY"),
	'token' => false
];

$wgAWSRegion = 'us-east-1'; # Northern Virginia

// Replace <something> with the name of your S3 bucket, e.g. wonderfulbali234.
$wgAWSBucketName = "north-central-positronics";

#Textbox extension
wfLoadExtension( 'InputBox' );

#Text Editor
## Load wikieditor for a basic editor
wfLoadExtension( 'WikiEditor' );
## Load TinyMCE where possible - https://www.mediawiki.org/wiki/Extension:TinyMCE "Using with WikiEditor"
wfLoadExtension( 'TinyMCE' );

$wgTinyMCEPreservedTags = array(
	'ol',
	'ul',
	'li',
	'h1',
	'h2',
	'h3',
	'h4',
	'h5',
	'h6',
	'ta',
	'div'
);

#Auto-Linker
wfLoadExtension( 'LinkTitles' );
# Create links when pages are created
# Needs to have minor checkbox edit undefaulted - but breaks button links, so disabling for now
$wgDefaultUserOptions['minordefault'] = 1;
$wgLinkTitlesParseOnEdit = true;
# remove case sensitivity with smart mode
$wgLinkTitlesSmartMode = true;

#Pre-loader (for new pages)
wfLoadExtension( 'Preloader' );
$wgPreloaderSource[ NS_MAIN ] = 'Template:Useful-content';

#Security
#Limit edits from non-confirmed & anon members
$wgRateLimits['edit']['newbie'] = array( 10, 60 );
$wgRateLimits['edit']['ip'] = array( 4, 60 );
#Regex on common spam words via SpamRegex extension
$wgSpamRegex = "/online-casino|buy-viagra|adipex|phentermine|adult-website\.com|display:none|overflow:\s*auto;\s*height:\s*[0-4]px;/i";

#UI
#Tweeki
#$wgTweekiSkinHideExcept['sidebar-left'] = ['Administrators'];
#$wgTweekiSkinHideExcept['sidebar-left'] = ['sysop'];
#$wgTweekiSkinHideExcept[array( 'SEARCH' => true, 'sidebar-right' => true, 'TOOLBOX' => true, 'TOOLBOX-EXT' => true)] = ['Administrators']
$wgTweekiSkinHideAll = array('footer' => true,'firstHeading' => true, 'footer-info'=> true, 'navbar' => true, 'SEARCH' => true, 'TOOLBOX' => true, 'TOOLBOX-EXT' => true, 'sidebar-right' => true, 'first-heading' => true);
#$wgTweekiSkinHideAnon = array( 'SEARCH' => true, 'sidebar-right' => true);

#Navigation
require_once("$IP/extensions/BrowserHistoryLink/BrowserHistoryLink.php");

#TinyMCE Macros
$wgTinyMCEMacros[] = array(
	'name' => 'Go Back Button',
	'image' => '',
	'text' => '<historylink type="back">Go Back</historylink>'
);
