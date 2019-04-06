<?php

//Extension credits that show up on Special:Version
$wgExtensionCredits['parserhook'][] = array(
        'name' => 'AllowAnchorTags',
        'version' => 1.0,
        'author' => ' Amolsodhi',
        'url' => 'https://www.mediawiki.org/wiki/Extension:AllowAnchorTags',
        'description' => 'Adds <tt>&lt;anchor&gt;</tt> tag and parses it to <tt><nowiki><a href=""></a></nowiki></tt> tags',
);

# Defines the main function to be executed for this extension.
$wgExtensionFunctions[] = 'addAnchorTag';

# Sets the hook to be executed once the parser has stripped HTML tags.
$wgHooks['ParserAfterStrip'][] = 'addAnchorTag';

# This function initiates the hook for the parser to convert <anchor></anchor>
# tags to <a href=''></a> tags.
function addAnchorTag() {
	// Declaring the global parser..
	global $wgParser;

	// Setting the hook to parse <anchor></anchor> tags from the parser output..
	$wgParser->setHook( 'anchor', 'startAddAnchor' );

        // Extensions required to return true
        return true;
}

# This function extracts the parameters from the <anchor></anchor> tags and
# the text between the <anchor> and </anchor> tags and formats them as "<a href=''>"
# tags and writes them in the document.
function startAddAnchor( $input, $argv ) {
	// Matching to see if the URL matches the prefixes in $wgUrlProtocols..
	if (preg_match("/^(http:\/\/|https:\/\/|ftp:\/\/|irc:\/\/|gopher:\/\/|news:|mailto:)/", $argv['url'])) {
		// Fetching the 'url' parameter..
		$url = $argv['url'];
	} else {
		$url = '';
	}

	// Fetching the 'target' parameter..
	if(isset($argv['target'])) {$target = $argv['target'];} else { $target = '';}

	if ($url != '' && $target != '') {
		// If a target parameter exists then print the link with it..
		return "<a href=\"" . htmlspecialchars($url) . "\" target=\"" . htmlspecialchars($target) . "\">" . htmlspecialchars($input) . "</a>";
	} else if ($url != '') {
		// If a target parameter does not exist then just print the link with the 'href' URL..
		return "<a href=\"" . htmlspecialchars($url) . "\">" . htmlspecialchars($input) . "</a>";
	} else {
		return '';
	}
}
