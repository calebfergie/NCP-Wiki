<?php
// BrowserHistoryLink class
class BrowserHistoryLink {
	public static function init() {
		global $wgParser;

		// Register the extension
		$wgParser->setHook('historylink', array('BrowserHistoryLink', 'render'));

		// Continue
		return true;
	}
	public function render($input, $args, $parser) {
		// Internationalization - commented out as per https://www.mediawiki.org/wiki/Extension:BrowserHistoryLink#Known_Bugs
		// wfLoadExtensionMessages('BrowserHistoryLink');

		// Is type valid?
		if($args['type'] != 'forward' && $args['type'] != 'back') {
			// Report type error
			return Xml::tags('div', null,
				Xml::element('strong',
					array(
						'class' => 'error'
					),
					strlen($args['type']) > 0
					? wfMessage('browserhistorylink-error-badtype', $args['type'])
					: wfMessage('browserhistorylink-error-notype')
				)
			);
		}
		// Is go valid?
		elseif($args['go'] < 1 && ($args['go'] != null || $args['go'] != '')) {
			// Report go error
			return Xml::tags('div', null,
				Xml::element('strong',
					array(
						'class' => 'error'
					),
					wfMessage('browserhistorylink-error-gotoolow')
				)
			);
		}
		// Parse tag
		else {
			if($args['type'] == 'forward') {
				if($args['go'] != null || $args['go'] != '') {
					if($args['style'] != null || $args['style'] != '') {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(".$args['go']."); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(".$args['go']."); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								wfMessage('browserhistorylink-forward').' &#187;'
							);
						}
					}
					else {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(".$args['go']."); return false;"
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(".$args['go']."); return false;"
								),
								wfMessage('browserhistorylink-forward').' &#187;'
							);
						}
					}
				}
				else {
					if($args['style'] != null || $args['style'] != '') {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.forward(); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.forward(); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								wfMessage('browserhistorylink-forward').' &#187;'
							);
						}
					}
					else {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.forward(); return false;"
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.forward(); return false;"
								),
								wfMessage('browserhistorylink-forward').' &#187;'
							);
						}
					}
				}
			}
			elseif($args['type'] == 'back') {
				if($args['go'] != null || $args['go'] != '') {
					if($args['style'] != null || $args['style'] != '') {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(-".$args['go']."); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(-".$args['go']."); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								'&#171; '.wfMessage('browserhistorylink-back')
							);
						}
					}
					else {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(-".$args['go']."); return false;"
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.go(-".$args['go']."); return false;"
								),
								'&#171; '.wfMessage('browserhistorylink-back')
							);
						}
					}
				}
				else {
					if($args['style'] != null || $args['style'] != '') {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.back(); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.back(); return false;",
									'style'   => htmlspecialchars($args['style'], ENT_COMPAT, 'ISO-8859-1', false)
								),
								'&#171; '.wfMessage('browserhistorylink-back')
							);
						}
					}
					else {
						if($input != null || $input != '') {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.back(); return false;"
								),
								htmlspecialchars($input, ENT_COMPAT, 'ISO-8859-1', false)
							);
						}
						else {
							return Xml::tags('a',
								array(
									'href'    => '#',
									'onclick' => "history.back(); return false;"
								),
								'&#171; '.wfMessage('browserhistorylink-back')
							);
						}
					}
				}
			}
		}
	}
}
