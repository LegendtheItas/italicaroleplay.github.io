<?php
// FROM HASH: 6a83eceb4e61ff31225b95fe19038cdd
return array('macros' => array('footerWidgets' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'block' => $__vars['block'],
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__vars['blockId'] = $__templater->func('property', array('xbFooterBlockContent' . $__vars['block'], ), false);
	$__finalCompiled .= '
			';
	if ($__vars['blockId'] == 'custom') {
		$__finalCompiled .= '
			' . $__templater->func('property', array('xbFooterBlockCustom' . $__vars['block'], ), true) . '
			';
	} else if ($__vars['blockId'] == 'customtemplate') {
		$__finalCompiled .= '
				' . $__templater->includeTemplate(('xb_footer_block' . $__vars['block']), $__vars) . '
			';
	} else if ($__vars['blockId'] == 'socialicons') {
		$__finalCompiled .= '
				';
		$__vars['socialtitle'] = $__templater->preEscaped('<h3>' . $__templater->func('property', array('xbSocialTitle', ), true) . '</h3>');
		$__finalCompiled .= '
				' . $__templater->includeTemplate('xb_social_icons', $__vars) . '
			';
	} else if ($__vars['blockId'] == 'defaultfooterlinks') {
		$__finalCompiled .= '	
				' . $__templater->callMacro(null, 'defaultFooterLinks', array(), $__vars) . '
			';
	} else if ($__vars['blockId'] == 'whatsNewLinks') {
		$__finalCompiled .= '
				' . $__templater->callMacro(null, 'whatsNewLinks', array(), $__vars) . '
			';
	} else if ($__vars['blockId'] == 'ForumStatistics') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('XF\\Widget\\ForumStatistics', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'NewestMembers') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('XF\\Widget\\NewestMembers', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'OnlineStatistics') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('XF\\Widget\\OnlineStatistics', array(), array()) . '
			';
	} else if ($__vars['blockId'] == 'SharePage') {
		$__finalCompiled .= '
				' . $__templater->renderWidget('XF\\Widget\\SharePage', array(), array()) . '
			';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'whatsNewLinks' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
	<h3><a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'overview') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new', ), true) . '">' . 'What\'s new' . '</a></h3>
	<ul class="footerList">
	' . '
	<li>' . $__templater->fontAwesome('fa-caret-right', array(
	)) . ' <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'new_thread') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/posts', ), true) . '" rel="nofollow">' . 'New posts' . '</a></li>
	' . '
	';
	if ($__templater->method($__vars['xf']['visitor'], 'canViewProfilePosts', array())) {
		$__finalCompiled .= '
		<li>' . $__templater->fontAwesome('fa-caret-right', array(
		)) . ' <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'new_profile_post') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/profile-posts', ), true) . '" rel="nofollow">' . 'New profile posts' . '</a></li>
	';
	}
	$__finalCompiled .= '
	' . '
	';
	if ($__vars['xf']['options']['enableNewsFeed']) {
		$__finalCompiled .= '
		';
		if ($__vars['xf']['visitor']['user_id']) {
			$__finalCompiled .= '
			<li>' . $__templater->fontAwesome('fa-caret-right', array(
			)) . ' <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'news_feed') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/news-feed', ), true) . '" rel="nofollow">' . 'Your news feed' . '</a></li>
		';
		}
		$__finalCompiled .= '

		<li>' . $__templater->fontAwesome('fa-caret-right', array(
		)) . ' <a class="' . $__templater->escape($__vars['baseClass']) . ' ' . (($__vars['pageSelected'] == 'latest_activity') ? $__templater->escape($__vars['selectedClass']) : '') . '" href="' . $__templater->func('link', array('whats-new/latest-activity', ), true) . '" rel="nofollow">' . 'Latest activity' . '</a></li>
	';
	}
	$__finalCompiled .= '
	</ul>
';
	return $__finalCompiled;
},
'defaultFooterLinks' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
			<h3>' . 'Forum' . ' ' . 'Links' . '</h3>
			<ul class="footerList">				
				';
	if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
		$__finalCompiled .= '
					';
		if ($__vars['xf']['contactUrl']) {
			$__finalCompiled .= '
						<li>' . $__templater->fontAwesome('fa-caret-right', array(
			)) . ' <a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '" data-xf-click="' . (($__vars['xf']['options']['contactUrl']['overlay'] OR ($__vars['xf']['options']['contactUrl']['type'] == 'default')) ? 'overlay' : '') . '">' . 'Contact us' . '</a></li>
					';
		}
		$__finalCompiled .= '
				';
	}
	$__finalCompiled .= '
				
				';
	if ($__vars['xf']['tosUrl']) {
		$__finalCompiled .= '
					<li>' . $__templater->fontAwesome('fa-caret-right', array(
		)) . ' <a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . 'Terms and rules' . '</a></li>
				';
	}
	$__finalCompiled .= '

				';
	if ($__vars['xf']['privacyPolicyUrl']) {
		$__finalCompiled .= '
					<li>' . $__templater->fontAwesome('fa-caret-right', array(
		)) . ' <a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . 'Privacy policy' . '</a></li>
				';
	}
	$__finalCompiled .= '

				';
	if ($__vars['xf']['helpPageCount']) {
		$__finalCompiled .= '
					<li>' . $__templater->fontAwesome('fa-caret-right', array(
		)) . ' <a href="' . $__templater->func('link', array('help', ), true) . '">' . 'Help' . '</a></li>
				';
	}
	$__finalCompiled .= '

				';
	if ($__vars['xf']['homePageUrl']) {
		$__finalCompiled .= '
					<li>' . $__templater->fontAwesome('fa-caret-right', array(
		)) . ' <a href="' . $__templater->escape($__vars['xf']['homePageUrl']) . '">' . 'Home' . '</a></li>
				';
	}
	$__finalCompiled .= '

				<li>' . $__templater->fontAwesome('fa-caret-right', array(
	)) . ' <a href="' . $__templater->func('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '"><span aria-hidden="true">' . $__templater->fontAwesome('fa-rss', array(
	)) . '<span class="u-srOnly">' . 'RSS' . '</span></span></a></li>
			</ul>
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<div class="p-footer-custom">
	<div class="p-footer-inner">

		';
	if ($__templater->func('property', array('xbSocialCustomFooter', ), false) == 'above') {
		$__finalCompiled .= '
			<div class="p-footer-social p-footer-socialTop">
				';
		$__compilerTemp1 = $__vars;
		$__compilerTemp1['socialtitle'] = $__templater->preEscaped('<h3>' . $__templater->func('property', array('xbSocialTitle', ), true) . '</h3>');
		$__finalCompiled .= $__templater->includeTemplate('xb_social_icons', $__compilerTemp1) . '
			</div>
		';
	}
	$__finalCompiled .= '

		<div class="xb-footer--wrapper">

			';
	if (!$__templater->func('in_array', array($__templater->func('property', array('xbFooterBlock1Width', ), false), array('0', '0px', '0%', ), ), false)) {
		$__finalCompiled .= '
				<div class="xb-footer-block xb-footer-block-1">
					' . $__templater->callMacro(null, 'footerWidgets', array(
			'block' => '1',
		), $__vars) . '
					';
		if ($__templater->func('property', array('xbSocialFooterBlocks', ), false) == 'block1') {
			$__finalCompiled .= '
						';
			$__compilerTemp2 = $__vars;
			$__compilerTemp2['socialtitle'] = $__templater->preEscaped('<h3>' . $__templater->func('property', array('xbSocialTitle', ), true) . '</h3>');
			$__finalCompiled .= $__templater->includeTemplate('xb_social_icons', $__compilerTemp2) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

			';
	if (!$__templater->func('in_array', array($__templater->func('property', array('xbFooterBlock2Width', ), false), array('0', '0px', '0%', ), ), false)) {
		$__finalCompiled .= '
				<div class="xb-footer-block xb-footer-block-2">
					' . $__templater->callMacro(null, 'footerWidgets', array(
			'block' => '2',
		), $__vars) . '
					';
		if ($__templater->func('property', array('xbSocialFooterBlocks', ), false) == 'block2') {
			$__finalCompiled .= '
						';
			$__compilerTemp3 = $__vars;
			$__compilerTemp3['socialtitle'] = $__templater->preEscaped('<h3>' . $__templater->func('property', array('xbSocialTitle', ), true) . '</h3>');
			$__finalCompiled .= $__templater->includeTemplate('xb_social_icons', $__compilerTemp3) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

			';
	if (!$__templater->func('in_array', array($__templater->func('property', array('xbFooterBlock3Width', ), false), array('0', '0px', '0%', ), ), false)) {
		$__finalCompiled .= '
				<div class="xb-footer-block xb-footer-block-3">
					' . $__templater->callMacro(null, 'footerWidgets', array(
			'block' => '3',
		), $__vars) . '
					';
		if ($__templater->func('property', array('xbSocialFooterBlocks', ), false) == 'block3') {
			$__finalCompiled .= '
						';
			$__compilerTemp4 = $__vars;
			$__compilerTemp4['socialtitle'] = $__templater->preEscaped('<h3>' . $__templater->func('property', array('xbSocialTitle', ), true) . '</h3>');
			$__finalCompiled .= $__templater->includeTemplate('xb_social_icons', $__compilerTemp4) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

			';
	if (!$__templater->func('in_array', array($__templater->func('property', array('xbFooterBlock4Width', ), false), array('0', '0px', '0%', ), ), false)) {
		$__finalCompiled .= '
				<div class="xb-footer-block xb-footer-block-4">
					' . $__templater->callMacro(null, 'footerWidgets', array(
			'block' => '4',
		), $__vars) . '
					';
		if ($__templater->func('property', array('xbSocialFooterBlocks', ), false) == 'block4') {
			$__finalCompiled .= '
						';
			$__compilerTemp5 = $__vars;
			$__compilerTemp5['socialtitle'] = $__templater->preEscaped('<h3>' . $__templater->func('property', array('xbSocialTitle', ), true) . '</h3>');
			$__finalCompiled .= $__templater->includeTemplate('xb_social_icons', $__compilerTemp5) . '
					';
		}
		$__finalCompiled .= '
				</div>
			';
	}
	$__finalCompiled .= '

		</div>

		';
	if ($__templater->func('property', array('xbSocialCustomFooter', ), false) == 'below') {
		$__finalCompiled .= '
			<div class="p-footer-social p-footer-socialBottom">
				';
		$__compilerTemp6 = $__vars;
		$__compilerTemp6['socialtitle'] = $__templater->preEscaped('<h3>' . $__templater->func('property', array('xbSocialTitle', ), true) . '</h3>');
		$__finalCompiled .= $__templater->includeTemplate('xb_social_icons', $__compilerTemp6) . '
			</div>
		';
	}
	$__finalCompiled .= '

	</div>
</div>

' . '

' . '

';
	return $__finalCompiled;
});