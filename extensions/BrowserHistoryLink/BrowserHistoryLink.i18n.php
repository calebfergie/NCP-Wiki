<?php
// BrowserHistoryLink extension messages
$messages = array();

// Message documentation
$messages['qqq'] = array(
	'browserhistorylink-desc'           => 'Short description of the BrowserHistoryLink extension, shown on [[Special:Version]].',
	'browserhistorylink-error-badtype'  => 'Error message for bad type.',
	'browserhistorylink-error-notype'   => 'Error message for no type.',
	'browserhistorylink-error-gotoolow' => 'Error message for "go" parameter being less than 1.',
	'browserhistorylink-back'           => 'Default "back" link.',
	'browserhistorylink-forward'        => 'Default "forward" link.'
);

// English
// @author Techjar
$messages['en'] = array(
	'browserhistorylink-desc'           => 'Adds a tag to create a link with a JavaScript event to go forward or back in the client\'s web browser.',
	'browserhistorylink-error-badtype'  => 'Link type "$1" not recognised. Please specify "forward" or "back".',
	'browserhistorylink-error-notype'   => 'You have not specified the type of link. Please specify "forward" or "back".',
	'browserhistorylink-error-gotoolow' => 'The "go" parameter cannot be less than one.',
	'browserhistorylink-back'           => 'Go Back',
	'browserhistorylink-forward'        => 'Go Forward'
);

// Spanish
// @author Techjar
$messages['es'] = array(
	'browserhistorylink-desc'           => 'Añade una etiqueta para crear un vínculo con un evento de JavaScript para ir hacia delante o hacia atrás en el navegador web del cliente.',
	'browserhistorylink-error-badtype'  => 'Enlace de tipo "$1" no se reconoce. Por favor, especifique "forward" o "back".',
	'browserhistorylink-error-notype'   => 'Usted no ha especificado el tipo de enlace. Por favor, especifique "forward" o "back".',
	'browserhistorylink-error-gotoolow' => 'El "go" parámetro no puede ser inferior a uno.',
	'browserhistorylink-back'           => 'Regresar',
	'browserhistorylink-forward'        => 'Ir Adelante'
);