<?php
// FROM HASH: c08cfdaaef009433b8b81e06dd7bf264
return array('macros' => array('default-footer' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="p-footer-default">
	<div class="p-footer-inner">
		<div class="p-footer-row">	
			';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeStyle', array())) {
		$__compilerTemp1 .= '
							<li class="p-linkList-changeStyle"><a href="' . $__templater->func('link', array('misc/style', ), true) . '" data-xf-click="overlay"
								data-xf-init="tooltip" title="' . $__templater->filter('Style chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
								' . $__templater->fontAwesome('fa-paint-brush', array(
		)) . '<span> ' . $__templater->escape($__vars['xf']['style']['title']) . '</span>
							</a></li>
						';
	}
	$__compilerTemp1 .= '
					';
	if ($__templater->func('property', array('xbStyleSwitch', ), false) != '0') {
		$__compilerTemp1 .= '
						';
		$__vars['StyleSwitchID'] = $__templater->preEscaped($__templater->func('property', array('xbStyleSwitch', ), true));
		$__compilerTemp1 .= '
						<li class="p-linkList-styleSwitch"><a href="' . $__templater->func('link', array('misc/style', null, array('style_id' => $__vars['StyleSwitchID'], '_xfRedirect' => $__vars['redirect'], 't' => $__templater->func('csrf_token', array(), false), ), ), true) . '"
															  data-xf-init="tooltip"
															  title="' . $__templater->func('property', array('xbStyleSwitchPhrase', ), true) . '">' . $__templater->fontAwesome($__templater->func('property', array('xbStyleSwitchIcon', ), true), array(
		)) . '<span> ' . $__templater->func('property', array('xbStyleSwitchPhrase', ), true) . '</span>
							</a></li>
					';
	}
	$__compilerTemp1 .= '
						';
	if ($__templater->func('property', array('xbAlternatePageWidth', ), false) != null) {
		$__compilerTemp1 .= '<li><a class="pageWidthToggle ' . ((!$__templater->func('is_toggled', array('_xb-width', ), false)) ? ' xb-toggle-default' : 'xb-toggled') . '" data-xf-click="toggle" data-target="html" data-active-class="xb-toggle-default" data-xf-init="toggle-storage" data-storage-type="cookie" data-storage-key="_xb-width">' . $__templater->fontAwesome('fa-sliders-h', array(
		)) . '<span> ' . 'Change' . ' ' . $__templater->filter('Width', array(array('to_lower', array()),), true) . '</span></a></li>';
	}
	$__compilerTemp1 .= '
						';
	if ($__templater->method($__vars['xf']['visitor'], 'canChangeLanguage', array())) {
		$__compilerTemp1 .= '
							<li class="p-linkList-changeLanguage"><a href="' . $__templater->func('link', array('misc/language', ), true) . '" data-xf-click="overlay"
								data-xf-init="tooltip" title="' . $__templater->filter('Language chooser', array(array('for_attr', array()),), true) . '" rel="nofollow">
								' . $__templater->fontAwesome('fa-globe', array(
		)) . '<span> ' . $__templater->escape($__vars['xf']['language']['title']) . '</span></a></li>
						';
	}
	$__compilerTemp1 .= '
					';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
				<div class="p-footer-row-main">
					<ul class="p-footer-linkList">
					' . $__compilerTemp1 . '
					</ul>
				</div>
			';
	}
	$__finalCompiled .= '
			<div class="p-footer-row-opposite">
				<ul class="p-footer-linkList">
					';
	if ($__templater->method($__vars['xf']['visitor'], 'canUseContactForm', array())) {
		$__finalCompiled .= '
						';
		if ($__vars['xf']['contactUrl']) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->escape($__vars['xf']['contactUrl']) . '" data-xf-click="' . (($__vars['xf']['options']['contactUrl']['overlay'] OR ($__vars['xf']['options']['contactUrl']['type'] == 'default')) ? 'overlay' : '') . '">' . 'Contact us' . '</a></li>
						';
		}
		$__finalCompiled .= '
					';
	}
	$__finalCompiled .= '

					';
	if ($__vars['xf']['tosUrl']) {
		$__finalCompiled .= '
						<li><a href="' . $__templater->escape($__vars['xf']['tosUrl']) . '">' . 'Terms and rules' . '</a></li>
					';
	}
	$__finalCompiled .= '

					';
	if ($__vars['xf']['privacyPolicyUrl']) {
		$__finalCompiled .= '
						<li><a href="' . $__templater->escape($__vars['xf']['privacyPolicyUrl']) . '">' . 'Privacy policy' . '</a></li>
					';
	}
	$__finalCompiled .= '

					';
	if ($__vars['xf']['helpPageCount']) {
		$__finalCompiled .= '
						<li><a href="' . $__templater->func('link', array('help', ), true) . '">' . 'Help' . '</a></li>
					';
	}
	$__finalCompiled .= '

					';
	if ($__vars['xf']['homePageUrl']) {
		$__finalCompiled .= '
						<li><a href="' . $__templater->escape($__vars['xf']['homePageUrl']) . '">' . 'Home' . '</a></li>
					';
	}
	$__finalCompiled .= '
					
					';
	if ($__templater->func('property', array('xbSocialFooter', ), false)) {
		$__finalCompiled .= '
						<li>' . $__templater->includeTemplate('xb_social_icons', $__vars) . '</li>
						';
		if (!$__templater->func('property', array('xbSocialRSS', ), false)) {
			$__finalCompiled .= '
							<li><a href="' . $__templater->func('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '"><span aria-hidden="true">' . $__templater->fontAwesome('fa-rss', array(
			)) . '<span class="u-srOnly">' . 'RSS' . '</span></span></a></li>
						';
		}
		$__finalCompiled .= '
					';
	} else {
		$__finalCompiled .= '
						<li><a href="' . $__templater->func('link', array('forums/index.rss', '-', ), true) . '" target="_blank" class="p-footer-rssLink" title="' . $__templater->filter('RSS', array(array('for_attr', array()),), true) . '"><span aria-hidden="true">' . $__templater->fontAwesome('fa-rss', array(
		)) . '<span class="u-srOnly">' . 'RSS' . '</span></span></a></li>
					';
	}
	$__finalCompiled .= '
				</ul>
			</div>
		</div>
		</div>
	</div>
';
	return $__finalCompiled;
},
'nav_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'selected' => false,
		'shortcut' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<div class="p-navEl ' . ($__vars['selected'] ? 'is-selected' : '') . '" ' . ($__vars['nav']['children'] ? 'data-has-children="true"' : '') . '>
		';
	if ($__vars['nav']['href']) {
		$__finalCompiled .= '

			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link ' . ($__vars['nav']['children'] ? 'p-navEl-link--splitMenu' : ''),
			'shortcut' => ($__vars['nav']['children'] ? false : $__vars['shortcut']),
		), $__vars) . '

			';
		if ($__vars['nav']['children']) {
			$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
				data-xf-click="menu"
				data-menu-pos-ref="< .p-navEl"
				class="p-navEl-splitTrigger"
				role="button"
				tabindex="0"
				aria-label="' . $__templater->filter('Toggle expanded', array(array('for_attr', array()),), true) . '"
				aria-expanded="false"
				aria-haspopup="true"></a>';
		}
		$__finalCompiled .= '

		';
	} else if ($__vars['nav']['children']) {
		$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
			data-xf-click="menu"
			data-menu-pos-ref="< .p-navEl"
			class="p-navEl-linkHolder"
			role="button"
			tabindex="0"
			aria-expanded="false"
			aria-haspopup="true">
			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link p-navEl-link--menuTrigger',
		), $__vars) . '
		</a>

		';
	} else {
		$__finalCompiled .= '

			' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'p-navEl-link',
			'shortcut' => $__vars['shortcut'],
		), $__vars) . '

		';
	}
	$__finalCompiled .= '
		';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
			<div class="menu menu--structural" data-menu="menu" aria-hidden="true">
				<div class="menu-content">
					';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
						' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
				), $__vars) . '
					';
			}
		}
		$__finalCompiled .= '
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
	</div>
';
	return $__finalCompiled;
},
'nav_link' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'class' => '',
		'titleHtml' => '',
		'shortcut' => false,
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__vars['tag'] = ($__vars['nav']['href'] ? 'a' : 'span');
	$__finalCompiled .= '
	<' . $__templater->escape($__vars['tag']) . ' ' . ($__vars['nav']['href'] ? (('href="' . $__templater->escape($__vars['nav']['href'])) . '"') : '') . '
		class="' . $__templater->func('trim', array($__vars['class'], ), true) . ' ' . $__templater->escape($__vars['nav']['attributes']['class']) . '"
		' . $__templater->func('attributes', array($__vars['nav']['attributes'], array('class', ), ), true) . '
		' . (($__vars['shortcut'] !== false) ? (('data-xf-key="' . $__templater->escape($__vars['shortcut'])) . '"') : '') . '
		data-nav-id="' . $__templater->escape($__vars['navId']) . '">';
	if ($__vars['nav']['icon']) {
		$__finalCompiled .= $__templater->fontAwesome($__templater->escape($__vars['nav']['icon']), array(
		)) . ' ';
	}
	$__finalCompiled .= ($__vars['titleHtml'] ? $__templater->filter($__vars['titleHtml'], array(array('raw', array()),), true) : $__templater->escape($__vars['nav']['title']));
	if ($__vars['nav']['counter']) {
		$__finalCompiled .= ' <span class="badge badge--highlighted">' . $__templater->filter($__vars['nav']['counter'], array(array('number', array()),), true) . '</span>';
	}
	$__finalCompiled .= '</' . $__templater->escape($__vars['tag']) . '>
';
	return $__finalCompiled;
},
'nav_menu_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'depth' => '0',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	' . $__templater->callMacro(null, 'nav_link', array(
		'navId' => $__vars['navId'],
		'nav' => $__vars['nav'],
		'class' => 'menu-linkRow u-indentDepth' . $__vars['depth'] . ' js-offCanvasCopy',
	), $__vars) . '
	';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
		';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
			' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
					'depth' => ($__vars['depth'] + 1),
				), $__vars) . '
		';
			}
		}
		$__finalCompiled .= '
		';
		if ($__vars['depth'] == 0) {
			$__finalCompiled .= '
			<hr class="menu-separator" />
		';
		}
		$__finalCompiled .= '
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'breadcrumbs' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'breadcrumbs' => '!',
		'navTree' => '!',
		'selectedNavEntry' => null,
		'variant' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '
	';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
			';
	$__vars['position'] = 0;
	$__compilerTemp1 .= '

			';
	$__vars['rootBreadcrumb'] = $__vars['navTree'][$__vars['xf']['options']['rootBreadcrumb']];
	$__compilerTemp1 .= '
			';
	if ($__vars['rootBreadcrumb'] AND ($__vars['rootBreadcrumb']['href'] != $__vars['xf']['uri'])) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['rootBreadcrumb']['href'],
			'value' => $__vars['rootBreadcrumb']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '

			';
	if ($__vars['selectedNavEntry'] AND ($__vars['selectedNavEntry']['href'] AND (($__vars['selectedNavEntry']['href'] != $__vars['xf']['uri']) AND ($__vars['selectedNavEntry']['href'] != $__vars['rootBreadcrumb']['href'])))) {
		$__compilerTemp1 .= '
				';
		$__vars['position'] = ($__vars['position'] + 1);
		$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
			'position' => $__vars['position'],
			'href' => $__vars['selectedNavEntry']['href'],
			'value' => $__vars['selectedNavEntry']['title'],
		), $__vars) . '
			';
	}
	$__compilerTemp1 .= '
			';
	if ($__templater->isTraversable($__vars['breadcrumbs'])) {
		foreach ($__vars['breadcrumbs'] AS $__vars['breadcrumb']) {
			if ($__vars['breadcrumb']['href'] != $__vars['xf']['uri']) {
				$__compilerTemp1 .= '
				';
				$__vars['position'] = ($__vars['position'] + 1);
				$__compilerTemp1 .= '
				' . $__templater->callMacro(null, 'crumb', array(
					'position' => $__vars['position'],
					'href' => $__vars['breadcrumb']['href'],
					'value' => $__vars['breadcrumb']['value'],
				), $__vars) . '
			';
			}
		}
	}
	$__compilerTemp1 .= '

		';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
		<div class="p-breadcrumbs--parent' . ($__vars['variant'] ? (' p-breadcrumbs--' . $__templater->escape($__vars['variant'])) : '') . '">
		<ul class="p-breadcrumbs"
			itemscope itemtype="https://schema.org/BreadcrumbList">
		' . $__compilerTemp1 . '
		</ul>
		';
		if ($__templater->func('property', array('xbSocialBreadcrumb', ), false)) {
			$__finalCompiled .= '
		' . $__templater->includeTemplate('xb_social_icons', $__vars) . '
		';
		}
		$__finalCompiled .= '
		</div>
	';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'crumb' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'href' => '!',
		'value' => '!',
		'position' => 0,
	), $__arguments, $__vars);
	$__finalCompiled .= '
	<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
		<a href="' . $__templater->escape($__vars['href']) . '" itemprop="item">
			<span itemprop="name">' . $__templater->escape($__vars['value']) . '</span>
		</a>
		';
	if ($__vars['position']) {
		$__finalCompiled .= '<meta itemprop="position" content="' . $__templater->escape($__vars['position']) . '" />';
	}
	$__finalCompiled .= '
	</li>
';
	return $__finalCompiled;
},
'header' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'searchConstraints' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
<header class="p-header" id="header">
	<div class="p-header-inner">
		<div class="p-header-content">

			<div class="p-header-logo p-header-logo--' . (($__templater->func('property', array('xbLogoType', ), false) == 'text') ? 'textlogo' : 'image') . '">
				<a href="' . (($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl']) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->func('link', array('index', ), true)) . '">
					
					';
	if ($__templater->func('property', array('xbLogoType', ), false) == 'text') {
		$__finalCompiled .= '
						';
		if ($__templater->func('property', array('xbLogoText', ), false)) {
			$__finalCompiled .= '
							' . $__templater->func('property', array('xbLogoText', ), true) . '
						';
		} else {
			$__finalCompiled .= '	
							' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '
							';
		}
		$__finalCompiled .= '
					';
	} else {
		$__finalCompiled .= '					
					<img src="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl', ), false), ), true) . '"
						alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '" class="logo-desktop"
						' . ($__templater->func('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
					';
		if ($__templater->func('property', array('xbMobileLogo', ), false)) {
			$__finalCompiled .= '
						<img src="' . $__templater->func('base_url', array($__templater->func('property', array('xbMobileLogo', ), false), ), true) . '" alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '" class="logo-mobile" />
					';
		}
		$__finalCompiled .= '
					';
	}
	$__finalCompiled .= '
				</a>
			</div>

			' . $__templater->callAdsMacro('container_header', array(), $__vars) . '
			
			';
	if (($__templater->func('property', array('xbVisitorTabsLocation', ), false) == 'logo') OR ($__templater->func('property', array('xbForumStyle', ), false) == 'canvas')) {
		$__finalCompiled .= '
			' . $__templater->callMacro(null, 'visitortabs', array(
			'searchConstraints' => $__vars['searchConstraints'],
			'navTree' => $__vars['navTree'],
		), $__vars) . '	
			';
	}
	$__finalCompiled .= '
			
			';
	if ($__templater->func('property', array('xbSocialHeader', ), false)) {
		$__finalCompiled .= '
				' . $__templater->includeTemplate('xb_social_icons', $__vars) . '
			';
	}
	$__finalCompiled .= '
			
			';
	if ($__templater->func('property', array('xbSearchLocation', ), false) == 'header') {
		$__finalCompiled .= '
				' . $__templater->callMacro('xb_search', 'xb_search_macro', array(
			'searchConstraints' => $__vars['searchConstraints'],
		), $__vars) . '
			';
	}
	$__finalCompiled .= '
		</div>
	</div>
</header>
';
	return $__finalCompiled;
},
'smallLogo' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
			<div class="p-nav-smallLogo';
	if ($__templater->func('property', array('xbLogoType', ), false) == 'text') {
		$__finalCompiled .= ' textLogo';
	}
	$__finalCompiled .= '">
				<a href="' . (($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl']) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->func('link', array('index', ), true)) . '">
					';
	if ($__templater->func('property', array('xbLogoType', ), false) == 'text') {
		$__finalCompiled .= '
						';
		if ($__templater->func('property', array('xbLogoText', ), false)) {
			$__finalCompiled .= '
							' . $__templater->func('property', array('xbLogoText', ), true) . '
						';
		} else {
			$__finalCompiled .= '	
							' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '
							';
		}
		$__finalCompiled .= '
					';
	} else {
		$__finalCompiled .= '		
					<img src="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl', ), false), ), true) . '"
						alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '" class="logo-desktop"
					' . ($__templater->func('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
					';
		if ($__templater->func('property', array('xbMobileLogo', ), false)) {
			$__finalCompiled .= '
						<img src="' . $__templater->func('base_url', array($__templater->func('property', array('xbMobileLogo', ), false), ), true) . '" alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '" class="logo-mobile" />
					';
		}
		$__finalCompiled .= '
					';
	}
	$__finalCompiled .= '
				</a>
			</div>
';
	return $__finalCompiled;
},
'visitortabs' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'searchConstraints' => '!',
		'navTree' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
			<div class="p-nav-opposite">
				<div class="p-navgroup p-account ' . ($__vars['xf']['visitor']['user_id'] ? 'p-navgroup--member' : 'p-navgroup--guest') . '">
					';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
						';
		if (($__vars['xf']['visitor']['user_state'] == 'rejected') OR ($__vars['xf']['visitor']['user_state'] == 'disabled')) {
			$__finalCompiled .= '
							<a href="' . $__templater->func('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user">
								' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">' . $__templater->escape($__vars['xf']['visitor']['username']) . '</span>
							</a>

							<a href="' . $__templater->func('link', array('logout', null, array('t' => $__templater->func('csrf_token', array(), false), ), ), true) . '" class="p-navgroup-link">
								<span class="p-navgroup-linkText">' . 'Log out' . '</span>
							</a>
						';
		} else {
			$__finalCompiled .= '
							<a href="' . $__templater->func('link', array('account', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--user"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('m', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
								aria-expanded="false"
								aria-haspopup="true">
								' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
				'href' => '',
			))) . '
								<span class="p-navgroup-linkText">';
			if ($__templater->func('property', array('xbAccountText', ), false)) {
				$__finalCompiled .= $__templater->func('property', array('xbAccountText', ), true);
			} else {
				$__finalCompiled .= $__templater->escape($__vars['xf']['visitor']['username']);
			}
			$__finalCompiled .= '</span>
							</a>
							<div class="menu menu--structural menu--wide menu--account" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->func('link', array('account/visitor-menu', ), true) . '"
								data-load-target=".js-visitorMenuBody">
								<div class="menu-content js-visitorMenuBody">
									<div class="menu-row">
										' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '
									</div>
								</div>
							</div>

							<a href="' . $__templater->func('link', array('conversations', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--conversations js-badge--conversations badgeContainer' . ($__vars['xf']['visitor']['conversations_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['conversations_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter(',', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
							    aria-label="' . $__templater->filter('Inbox', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->func('link', array('conversations/popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-convMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Conversations' . '</h3>
									<div class="js-convMenuBody">
										<div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->func('link', array('conversations', ), true) . '">' . 'Show all' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										';
			if ($__templater->method($__vars['xf']['visitor'], 'canStartConversation', array())) {
				$__finalCompiled .= '
											<span class="menu-footer-opposite">
												<a href="' . $__templater->func('link', array('conversations/add', ), true) . '">' . 'Start a new conversation' . '</a>
											</span>
										';
			}
			$__finalCompiled .= '
									</div>
								</div>
							</div>

							<a href="' . $__templater->func('link', array('account/alerts', ), true) . '"
								class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--alerts js-badge--alerts badgeContainer' . ($__vars['xf']['visitor']['alerts_unread'] ? ' badgeContainer--highlighted' : '') . '"
								data-badge="' . $__templater->filter($__vars['xf']['visitor']['alerts_unread'], array(array('number', array()),), true) . '"
								data-xf-click="menu"
								data-xf-key="' . $__templater->filter('.', array(array('for_attr', array()),), true) . '"
								data-menu-pos-ref="< .p-navgroup"
							    aria-label="' . $__templater->filter('Alerts', array(array('for_attr', array()),), true) . '"
								aria-expanded="false"
								aria-haspopup="true">
								<i aria-hidden="true"></i>
								<span class="p-navgroup-linkText">' . '' . '</span>
							</a>
							<div class="menu menu--structural menu--medium" data-menu="menu" aria-hidden="true"
								data-href="' . $__templater->func('link', array('account/alerts-popup', ), true) . '"
								data-nocache="true"
								data-load-target=".js-alertsMenuBody">
								<div class="menu-content">
									<h3 class="menu-header">' . 'Alerts' . '</h3>
									<div class="js-alertsMenuBody">
										<div class="menu-row">' . 'Loading' . $__vars['xf']['language']['ellipsis'] . '</div>
									</div>
									<div class="menu-footer menu-footer--split">
										<span class="menu-footer-main">
											<a href="' . $__templater->func('link', array('account/alerts', ), true) . '">' . 'Show all' . $__vars['xf']['language']['ellipsis'] . '</a>
										</span>
										<span class="menu-footer-opposite">
											<a href="' . $__templater->func('link', array('account/preferences', ), true) . '">' . 'Preferences' . '</a>
										</span>
									</div>
								</div>
							</div>
						';
		}
		$__finalCompiled .= '
					';
	} else {
		$__finalCompiled .= '
						<a href="' . $__templater->func('link', array('login', ), true) . '" class="p-navgroup-link p-navgroup-link--textual p-navgroup-link--logIn"
							data-xf-click="overlay" data-follow-redirects="on">
							<span class="p-navgroup-linkText">' . 'Log in' . '</span>
						</a>
						';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
							<a href="' . $__templater->func('link', array('register', ), true) . '" class="p-navgroup-link p-navgroup-link--textual p-navgroup-link--register"
								data-xf-click="overlay" data-follow-redirects="on">
								<span class="p-navgroup-linkText">' . 'Register' . '</span>
							</a>
						';
		}
		$__finalCompiled .= '
					';
	}
	$__finalCompiled .= '
					
					';
	if ($__templater->func('property', array('xbStyleSwitch', ), false) != '0') {
		$__finalCompiled .= '
						';
		$__vars['StyleSwitchID'] = $__templater->preEscaped($__templater->func('property', array('xbStyleSwitch', ), true));
		$__finalCompiled .= '
						<a href="' . $__templater->func('link', array('misc/style', null, array('style_id' => $__vars['StyleSwitchID'], '_xfRedirect' => $__vars['redirect'], 't' => $__templater->func('csrf_token', array(), false), ), ), true) . '"
						   								class="p-navgroup-link p-navgroup-link--switch"
								 						data-xf-init="tooltip"
														title="' . $__templater->func('property', array('xbStyleSwitchPhrase', ), true) . '">' . $__templater->fontAwesome($__templater->func('property', array('xbStyleSwitchIcon', ), true), array(
		)) . '
						</a>
					';
	}
	$__finalCompiled .= '
				</div>

				<div class="p-navgroup p-discovery' . ((!$__templater->method($__vars['xf']['visitor'], 'canSearch', array())) ? ' p-discovery--noSearch' : '') . '">
					<a href="' . $__templater->func('link', array('whats-new', ), true) . '"
						class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--whatsnew"
						aria-label="' . $__templater->filter('What\'s new', array(array('for_attr', array()),), true) . '"
						title="' . $__templater->filter('What\'s new', array(array('for_attr', array()),), true) . '">
						<i aria-hidden="true"></i>
						<span class="p-navgroup-linkText">' . 'What\'s new' . '</span>
					</a>
					' . $__templater->callMacro(null, 'search', array(
		'searchConstraints' => $__vars['searchConstraints'],
	), $__vars) . '					
				</div>
			</div>
';
	return $__finalCompiled;
},
'search' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'searchConstraints' => '!',
	), $__arguments, $__vars);
	$__finalCompiled .= '
					';
	if ($__templater->method($__vars['xf']['visitor'], 'canSearch', array())) {
		$__finalCompiled .= '
						<a href="' . $__templater->func('link', array('search', ), true) . '"
							class="p-navgroup-link p-navgroup-link--iconic p-navgroup-link--search"
							data-xf-click="menu"
							data-xf-key="' . $__templater->filter('/', array(array('for_attr', array()),), true) . '"
							aria-label="' . $__templater->filter('Search', array(array('for_attr', array()),), true) . '"
							aria-expanded="false"
							aria-haspopup="true"
							title="' . $__templater->filter('Search', array(array('for_attr', array()),), true) . '">
							<i aria-hidden="true"></i>
							<span class="p-navgroup-linkText">' . 'Search' . '</span>
						</a>
						<div class="menu menu--structural menu--wide" data-menu="menu" aria-hidden="true">
							<form action="' . $__templater->func('link', array('search/search', ), true) . '" method="post"
								class="menu-content"
								data-xf-init="quick-search">

								<h3 class="menu-header">' . 'Search' . '</h3>
								' . '
								<div class="menu-row">
									';
		if ($__vars['searchConstraints']) {
			$__finalCompiled .= '
										<div class="inputGroup inputGroup--joined">
											' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => 'Search' . $__vars['xf']['language']['ellipsis'],
				'aria-label' => 'Search',
				'data-menu-autofocus' => 'true',
			)) . '
											';
			$__compilerTemp1 = array(array(
				'value' => '',
				'label' => 'Everywhere',
				'_type' => 'option',
			));
			if ($__templater->isTraversable($__vars['searchConstraints'])) {
				foreach ($__vars['searchConstraints'] AS $__vars['constraintName'] => $__vars['constraint']) {
					$__compilerTemp1[] = array(
						'value' => $__templater->filter($__vars['constraint'], array(array('json', array()),), false),
						'label' => $__templater->escape($__vars['constraintName']),
						'_type' => 'option',
					);
				}
			}
			$__finalCompiled .= $__templater->formSelect(array(
				'name' => 'constraints',
				'class' => 'js-quickSearch-constraint',
				'aria-label' => 'Search within',
			), $__compilerTemp1) . '
										</div>
										';
		} else {
			$__finalCompiled .= '
										' . $__templater->formTextBox(array(
				'name' => 'keywords',
				'placeholder' => 'Search' . $__vars['xf']['language']['ellipsis'],
				'aria-label' => 'Search',
				'data-menu-autofocus' => 'true',
			)) . '
									';
		}
		$__finalCompiled .= '
								</div>

								' . '
								<div class="menu-row">
									' . $__templater->formCheckBox(array(
			'standalone' => 'true',
		), array(array(
			'name' => 'c[title_only]',
			'label' => 'Search titles only',
			'_type' => 'option',
		))) . '
								</div>
								' . '
								<div class="menu-row">
									<div class="inputGroup">
										<span class="inputGroup-text" id="ctrl_search_menu_by_member">' . 'By' . $__vars['xf']['language']['label_separator'] . '</span>
										<input type="text" class="input" name="c[users]" data-xf-init="auto-complete" placeholder="' . $__templater->filter('Member', array(array('for_attr', array()),), true) . '" aria-labelledby="ctrl_search_menu_by_member" />
									</div>
								</div>
								<div class="menu-footer">
									<span class="menu-footer-controls">
										' . $__templater->button('', array(
			'type' => 'submit',
			'class' => 'button--primary',
			'icon' => 'search',
		), '', array(
		)) . '
										' . $__templater->button('Advanced search' . $__vars['xf']['language']['ellipsis'], array(
			'href' => $__templater->func('link', array('search', ), false),
		), '', array(
		)) . '
									</span>
								</div>

								' . $__templater->func('csrf_input') . '
							</form>
						</div>
					';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'topbar' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(), $__arguments, $__vars);
	$__finalCompiled .= '
<div class="p-topbar">
	<div class="p-topbar-inner">
			<div class="p-topbar-leftside">
				' . $__templater->func('property', array('xbTopBarLeft', ), true) . '
			</div>
			
			';
	if ($__templater->func('property', array('xbVisitorTabsLocation', ), false) == 'topbar') {
		$__finalCompiled .= '
				' . $__templater->callMacro(null, 'visitortabs', array(
			'searchConstraints' => $__vars['searchConstraints'],
			'navTree' => $__vars['navTree'],
		), $__vars) . '	
			';
	} else {
		$__finalCompiled .= '
			<div class="p-topbar-rightside hScroller" data-xf-init="h-scroller">
				<ul class="hScroller-scroll">
					' . $__templater->func('property', array('xbTopBarRight', ), true) . '
				</ul>
			</div>
			';
	}
	$__finalCompiled .= '
			
	</div>
</div>
';
	return $__finalCompiled;
},
'vnav_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'selected' => false,
		'shortcut' => '',
	), $__arguments, $__vars);
	$__finalCompiled .= '
    <div class="xbVerticalNav-linkHolder ' . ($__vars['selected'] ? 'is-selected' : '') . '" ' . ($__vars['nav']['children'] ? 'data-has-children="true"' : '') . '>
        ';
	if ($__vars['nav']['href']) {
		$__finalCompiled .= '

            ' . $__templater->callMacro(null, 'vnav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'xbVerticalNav-link ' . ($__vars['nav']['children'] ? 'p-navEl-link--splitMenu' : ''),
			'shortcut' => ($__vars['nav']['children'] ? false : $__vars['shortcut']),
		), $__vars) . '

            ';
		if ($__vars['nav']['children']) {
			$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
                data-xf-click="toggle"
                data-target="< :up :next"
                class="xbVerticalNav-toggle"
                role="button"
                tabindex="0"
                aria-label="' . 'Toggle expanded' . '"
                aria-expanded="false"
                aria-haspopup="true"></a>';
		}
		$__finalCompiled .= '

        ';
	} else if ($__vars['nav']['children']) {
		$__finalCompiled .= '<a data-xf-key="' . $__templater->escape($__vars['shortcut']) . '"
            data-xf-click="menu"
            data-menu-pos-ref="< .xbVerticalNav-linkHolder"
            data-arrow-pos-ref="< .xbVerticalNav-linkHolder"
            class="p-navEl-linkHolder"
            role="button"
            tabindex="0"
            aria-expanded="false"
            aria-haspopup="true">
            ' . $__templater->callMacro(null, 'nav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'xbVerticalNav-link p-navEl-link--menuTrigger',
		), $__vars) . '
        </a>

        ';
	} else {
		$__finalCompiled .= '

            ' . $__templater->callMacro(null, 'vnav_link', array(
			'navId' => $__vars['navId'],
			'nav' => $__vars['nav'],
			'class' => 'xbVerticalNav-link',
			'shortcut' => $__vars['shortcut'],
		), $__vars) . '

        ';
	}
	$__finalCompiled .= '
    </div>
        ';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
            <div class="xbVerticalNav-subList">
                    <h4 class="menu-header">' . $__templater->escape($__vars['nav']['title']) . '</h4>
                    ';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
                        ' . $__templater->callMacro(null, 'vnav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
				), $__vars) . '
                    ';
			}
		}
		$__finalCompiled .= '
            </div>
        ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},
'vnav_link' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'class' => '',
		'titleHtml' => '',
		'shortcut' => false,
	), $__arguments, $__vars);
	$__finalCompiled .= '
    ';
	$__vars['tag'] = ($__vars['nav']['href'] ? 'a' : 'span');
	$__finalCompiled .= '
    <' . $__templater->escape($__vars['tag']) . ' ' . ($__vars['nav']['href'] ? (('href="' . $__templater->escape($__vars['nav']['href'])) . '"') : '') . '
        class="' . $__templater->func('trim', array($__vars['class'], ), true) . ' ' . $__templater->escape($__vars['nav']['attributes']['class']) . '"
        ' . $__templater->func('attributes', array($__vars['nav']['attributes'], array('class', ), ), true) . '
        ' . (($__vars['shortcut'] !== false) ? (('data-xf-key="' . $__templater->escape($__vars['shortcut'])) . '"') : '') . '
        data-nav-id="' . $__templater->escape($__vars['navId']) . '">' . $__templater->fontAwesome('fa-file-alt fa-fw', array(
	)) . ' <span>' . ($__vars['titleHtml'] ? $__templater->filter($__vars['titleHtml'], array(array('raw', array()),), true) : $__templater->escape($__vars['nav']['title'])) . '</span>';
	if ($__vars['nav']['counter']) {
		$__finalCompiled .= ' <span class="badge badge--highlighted">' . $__templater->filter($__vars['nav']['counter'], array(array('number', array()),), true) . '</span>';
	}
	$__finalCompiled .= '</' . $__templater->escape($__vars['tag']) . '>
';
	return $__finalCompiled;
},
'vnav_menu_entry' => function($__templater, array $__arguments, array $__vars)
{
	$__vars = $__templater->setupBaseParamsForMacro($__vars, false);
	$__finalCompiled = '';
	$__vars = $__templater->mergeMacroArguments(array(
		'navId' => '!',
		'nav' => '!',
		'depth' => '0',
	), $__arguments, $__vars);
	$__finalCompiled .= '
    ' . $__templater->callMacro(null, 'nav_link', array(
		'navId' => $__vars['navId'],
		'nav' => $__vars['nav'],
		'class' => 'menu-linkRow u-indentDepth' . $__vars['depth'] . ' js-offCanvasCopy',
	), $__vars) . '
    ';
	if ($__vars['nav']['children']) {
		$__finalCompiled .= '
        ';
		if ($__templater->isTraversable($__vars['nav']['children'])) {
			foreach ($__vars['nav']['children'] AS $__vars['childNavId'] => $__vars['child']) {
				$__finalCompiled .= '
            ' . $__templater->callMacro(null, 'nav_menu_entry', array(
					'navId' => $__vars['childNavId'],
					'nav' => $__vars['child'],
					'depth' => ($__vars['depth'] + 1),
				), $__vars) . '
        ';
			}
		}
		$__finalCompiled .= '
        ';
		if ($__vars['depth'] == 0) {
			$__finalCompiled .= '
            <hr class="menu-separator" />
        ';
		}
		$__finalCompiled .= '
    ';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '<!DOCTYPE html>
<html id="XF" lang="' . $__templater->escape($__vars['xf']['language']['language_code']) . '" dir="' . $__templater->escape($__vars['xf']['language']['text_direction']) . '"
	data-app="public"
	data-template="' . $__templater->escape($__vars['template']) . '"
	data-container-key="' . $__templater->escape($__vars['containerKey']) . '"
	data-content-key="' . $__templater->escape($__vars['contentKey']) . '"
	data-logged-in="' . ($__vars['xf']['visitor']['user_id'] ? 'true' : 'false') . '"
	data-cookie-prefix="' . $__templater->escape($__vars['xf']['cookie']['prefix']) . '"
	data-csrf="' . $__templater->filter($__templater->func('csrf_token', array(), false), array(array('escape', array('js', )),), true) . '"
	class="XenBase' . (($__templater->func('property', array('xbForumStyle', ), false) == 'default') ? ' ForumStyleDefault' : '') . (($__templater->func('property', array('xbForumStyle', ), false) == 'classic') ? ' ForumStyleClassic' : '') . (($__templater->func('property', array('xbForumStyle', ), false) == 'boxed') ? ' ForumStyleBoxed' : '') . (($__vars['xf']['visitor']['is_admin'] OR $__vars['xf']['visitor']['is_moderator']) ? ' has-staffBar' : '') . ' ' . ($__vars['xf']['visitor']['user_id'] ? 'logged-in' : 'logged-out') . ' has-no-js ' . ($__vars['template'] ? ('template-' . $__templater->escape($__vars['template'])) : '');
	if ($__templater->func('property', array('xbAlternatePageWidth', ), false) != null) {
		$__finalCompiled .= ((!$__templater->func('is_toggled', array('_xb-width', ), false)) ? ' xb-toggle-default' : 'xb-toggled');
	}
	$__finalCompiled .= '"
	' . ($__vars['xf']['runJobs'] ? ' data-run-jobs=""' : '') . '>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

	';
	$__vars['siteName'] = $__vars['xf']['options']['boardTitle'];
	$__finalCompiled .= '
	';
	$__vars['h1'] = $__templater->preEscaped($__templater->func('page_h1', array($__vars['siteName'])));
	$__finalCompiled .= '
	';
	$__vars['description'] = $__templater->preEscaped($__templater->func('page_description'));
	$__finalCompiled .= '

	<title>' . $__templater->func('page_title', array('%s | %s', $__vars['xf']['options']['boardTitle'], $__vars['pageNumber'])) . '</title>

	';
	if ($__templater->isTraversable($__vars['head'])) {
		foreach ($__vars['head'] AS $__vars['headTag']) {
			$__finalCompiled .= '
		' . $__templater->escape($__vars['headTag']) . '
	';
		}
	}
	$__finalCompiled .= '

	';
	if ((!$__vars['head']['meta_site_name']) AND !$__templater->test($__vars['siteName'], 'empty', array())) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'site_name', array(
			'siteName' => $__vars['siteName'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_type']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'type', array(
			'type' => 'website',
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_title']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'title', array(
			'title' => ($__templater->func('page_title', array(), false) ?: $__vars['siteName']),
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ((!$__vars['head']['meta_description']) AND (!$__templater->test($__vars['description'], 'empty', array()) AND $__vars['pageDescriptionMeta'])) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'description', array(
			'description' => $__vars['description'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (!$__vars['head']['meta_share_url']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'share_url', array(
			'shareUrl' => $__vars['xf']['fullUri'],
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ((!$__vars['head']['meta_image_url']) AND $__templater->func('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
		' . $__templater->callMacro('metadata_macros', 'image_url', array(
			'imageUrl' => $__templater->func('base_url', array($__templater->func('property', array('publicMetadataLogoUrl', ), false), true, ), false),
			'output' => true,
		), $__vars) . '
	';
	}
	$__finalCompiled .= '

	';
	if ($__templater->func('property', array('metaThemeColor', ), false)) {
		$__finalCompiled .= '
		<meta name="theme-color" content="' . $__templater->func('parse_less_color', array($__templater->func('property', array('metaThemeColor', ), false), ), true) . '" />
	';
	}
	$__finalCompiled .= '
	' . $__templater->filter($__vars['custom-xbHead'], array(array('raw', array()),), true) . '
	' . $__templater->includeTemplate('xb_custom_fonts', $__vars) . '
	' . $__templater->callMacro('helper_js_global', 'head', array(
		'app' => 'public',
	), $__vars) . '

	';
	if ($__templater->func('property', array('publicFaviconUrl', ), false)) {
		$__finalCompiled .= '
		<link rel="icon" type="image/png" href="' . $__templater->func('base_url', array($__templater->func('property', array('publicFaviconUrl', ), false), true, ), true) . '" sizes="32x32" />
	';
	}
	$__finalCompiled .= '
	';
	if ($__templater->func('property', array('publicMetadataLogoUrl', ), false)) {
		$__finalCompiled .= '
		<link rel="apple-touch-icon" href="' . $__templater->func('base_url', array($__templater->func('property', array('publicMetadataLogoUrl', ), false), true, ), true) . '" />
	';
	}
	$__finalCompiled .= '
	' . $__templater->includeTemplate('google_analytics', $__vars) . '
	' . $__templater->includeTemplate('xb_head', $__vars) . '
</head>
<body data-template="' . $__templater->escape($__vars['template']) . '">

<div class="p-pageWrapper" id="top">
<div class="p-pageWrapper--helper"></div>
';
	$__compilerTemp1 = '';
	$__compilerTemp1 .= '
				';
	if ($__vars['xf']['visitor']['is_moderator'] AND $__vars['xf']['session']['unapprovedCounts']['total']) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->func('link', array('approval-queue', ), true) . '" class="p-staffBar-link badgeContainer badgeContainer--highlighted" data-badge="' . $__templater->filter($__vars['xf']['session']['unapprovedCounts']['total'], array(array('number', array()),), true) . '">
						' . $__templater->fontAwesome('fa-check', array(
		)) . ' ' . 'Approval queue' . '
					</a>
				';
	}
	$__compilerTemp1 .= '

				';
	if ($__vars['xf']['visitor']['is_moderator'] AND ((!$__vars['xf']['options']['reportIntoForumId']) AND $__vars['xf']['session']['reportCounts']['total'])) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->func('link', array('reports', ), true) . '"
						class="p-staffBar-link badgeContainer badgeContainer--visible ' . ((($__vars['xf']['session']['reportCounts']['total'] AND ($__vars['xf']['session']['reportCounts']['lastBuilt'] > $__vars['xf']['session']['reportLastRead'])) OR $__vars['xf']['session']['reportCounts']['assigned']) ? ' badgeContainer--highlighted' : '') . '"
						data-badge="' . ($__vars['xf']['session']['reportCounts']['assigned'] ? (($__templater->filter($__vars['xf']['session']['reportCounts']['assigned'], array(array('number', array()),), true) . ' / ') . $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) : $__templater->filter($__vars['xf']['session']['reportCounts']['total'], array(array('number', array()),), true)) . '"
						title="' . ($__vars['xf']['session']['reportCounts']['lastBuilt'] ? (($__templater->filter('Last report update' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ') . $__templater->func('date_time', array($__vars['xf']['session']['reportCounts']['lastBuilt'], ), true)) : '') . '">
						' . $__templater->fontAwesome('fa-file-alt', array(
		)) . ' ' . 'Reports' . '
					</a>
				';
	}
	$__compilerTemp1 .= '

				';
	$__compilerTemp2 = '';
	$__compilerTemp2 .= '
							' . '
							';
	if ($__vars['xf']['visitor']['is_moderator']) {
		$__compilerTemp2 .= '
								<a href="' . $__templater->func('link', array('approval-queue', ), true) . '" class="menu-linkRow">' . $__templater->fontAwesome('fa-check fa-fw', array(
		)) . ' ' . 'Approval queue' . '</a>
							';
	}
	$__compilerTemp2 .= '
							';
	if ($__vars['xf']['visitor']['is_moderator'] AND (!$__vars['xf']['options']['reportIntoForumId'])) {
		$__compilerTemp2 .= '
								<a href="' . $__templater->func('link', array('reports', ), true) . '" class="menu-linkRow" title="' . ($__vars['xf']['session']['reportCounts']['lastBuilt'] ? (($__templater->filter('Last report update' . $__vars['xf']['language']['label_separator'], array(array('for_attr', array()),), true) . ' ') . $__templater->func('date_time', array($__vars['xf']['session']['reportCounts']['lastBuilt'], ), true)) : '') . '">' . $__templater->fontAwesome('fa-file-alt fa-fw', array(
		)) . ' ' . 'Reports' . '</a>
							';
	}
	$__compilerTemp2 .= '
							' . '
							';
	if (strlen(trim($__compilerTemp2)) > 0) {
		$__compilerTemp1 .= '
					<a class="p-staffBar-link menuTrigger" data-xf-click="menu" data-xf-key="alt+m" role="button" tabindex="0" aria-expanded="false" aria-haspopup="true">' . $__templater->fontAwesome('fa-gavel', array(
		)) . ' ' . 'Moderator' . '</a>
					<div class="menu" data-menu="menu" aria-hidden="true">
						<div class="menu-content">
							<h4 class="menu-header">' . 'Moderator tools' . '</h4>
							' . $__compilerTemp2 . '
						</div>
					</div>
				';
	}
	$__compilerTemp1 .= '

				';
	if ($__vars['xf']['visitor']['is_admin']) {
		$__compilerTemp1 .= '
					<a href="' . $__templater->func('base_url', array('admin.php', ), true) . '" class="p-staffBar-link" target="_blank">' . $__templater->fontAwesome('fa-cog', array(
		)) . ' ' . 'Admin' . '</a>
					';
		if ($__templater->func('property', array('xbDesignMode', ), false)) {
			$__compilerTemp1 .= '<a href="' . $__templater->func('base_url', array('admin.php', ), true) . '?templates/" class="p-staffBar-link p-staffBar--adminLink" targert="_blank">' . $__templater->fontAwesome('fa-paint-brush', array(
			)) . '  ' . 'Template' . ': <span class="xbTemplateHelper">' . $__templater->escape($__vars['template']) . '</span></a>';
		}
		$__compilerTemp1 .= '
				';
	}
	$__compilerTemp1 .= '
									
			';
	if ($__templater->func('property', array('xbVisitorTabsLocation', ), false) == 'staff') {
		$__compilerTemp1 .= '
				</div>' . $__templater->callMacro(null, 'visitortabs', array(
			'searchConstraints' => $__vars['searchConstraints'],
			'navTree' => $__vars['navTree'],
		), $__vars) . '<div>
			';
	}
	$__compilerTemp1 .= '
			';
	if (strlen(trim($__compilerTemp1)) > 0) {
		$__finalCompiled .= '
	<div class="p-staffBar">
		<div class="p-staffBar-inner hScroller" data-xf-init="h-scroller">
			<div class="hScroller-scroll">
			' . $__compilerTemp1 . '
			</div>
		</div>
	</div>
';
	}
	$__finalCompiled .= '
	
<div class="xb-page-wrapper' . (($__templater->func('property', array('xbForumStyle', ), false) == 'canvas') ? ' xb-canvas' : '') . ((!$__templater->func('is_toggled', array('_canvasMenu', ), false)) ? ' xb-canvas-menuActive' : '') . '">
	
	';
	if ($__templater->func('property', array('xbForumStyle', ), false) == 'canvas') {
		$__finalCompiled .= '
		<div class="canvas-header" data-xf-init="sticky-header">
			<div class="p-header-logo p-header-logo--' . (($__templater->func('property', array('xbLogoType', ), false) == 'text') ? 'textlogo' : 'image') . '">
			<a class="p-nav-menuTrigger" data-xf-click="off-canvas" data-menu=".js-headerOffCanvasMenu" role="button" tabindex="0">
				' . $__templater->fontAwesome('fa-bars', array(
		)) . '
			</a>
				' . $__templater->fontAwesome('fa-bars', array(
			'data-xf-click' => 'toggle',
			'data-active-class' => 'xb-canvas-menuActive',
			'data-xf-init' => 'toggle-storage',
			'data-target' => '.xb-page-wrapper',
			'data-storage-type' => 'cookie',
			'data-storage-key' => '_canvasMenu',
		)) . ' <a href="' . (($__vars['xf']['options']['logoLink'] AND $__vars['xf']['homePageUrl']) ? $__templater->escape($__vars['xf']['homePageUrl']) : $__templater->func('link', array('index', ), true)) . '">
					
					';
		if ($__templater->func('property', array('xbLogoType', ), false) == 'text') {
			$__finalCompiled .= '
						';
			if ($__templater->func('property', array('xbLogoText', ), false)) {
				$__finalCompiled .= '
							' . $__templater->func('property', array('xbLogoText', ), true) . '
						';
			} else {
				$__finalCompiled .= '	
							' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '
							';
			}
			$__finalCompiled .= '
					';
		} else {
			$__finalCompiled .= '					
					<img src="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl', ), false), ), true) . '"
						alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '" class="logo-desktop"
						' . ($__templater->func('property', array('publicLogoUrl2x', ), false) ? (('srcset="' . $__templater->func('base_url', array($__templater->func('property', array('publicLogoUrl2x', ), false), ), true)) . ' 2x"') : '') . ' />
					';
			if ($__templater->func('property', array('xbMobileLogo', ), false)) {
				$__finalCompiled .= '
						<img src="' . $__templater->func('base_url', array($__templater->func('property', array('xbMobileLogo', ), false), ), true) . '" alt="' . $__templater->escape($__vars['xf']['options']['boardTitle']) . '" class="logo-mobile" />
					';
			}
			$__finalCompiled .= '
					';
		}
		$__finalCompiled .= '
				</a>
			</div>
			';
		if ($__templater->func('property', array('xbCanvasSearch', ), false)) {
			$__finalCompiled .= '
				' . $__templater->callMacro('xb_search', 'xb_search_macro', array(
				'searchConstraints' => $__vars['searchConstraints'],
			), $__vars) . '
			';
		}
		$__finalCompiled .= '
			' . $__templater->callMacro(null, 'visitortabs', array(
			'searchConstraints' => $__vars['searchConstraints'],
			'navTree' => $__vars['navTree'],
		), $__vars) . '
			
		</div>
		<div class="canvas-wrapper">
			<div class="canvas-left">
				<div class="canvas-left--inner">
					' . $__templater->includeTemplate('xb_canvas_panel_top', $__vars) . '
					<div class="block xbSidebar-nav">
						<div class="block-container">
							<div class="block-blody">
								';
		$__compilerTemp3 = '';
		$__vars['i'] = 0;
		if ($__templater->isTraversable($__vars['navTree'])) {
			foreach ($__vars['navTree'] AS $__vars['navSection'] => $__vars['navEntry']) {
				if (($__vars['navSection'] != $__vars['xf']['app']['defaultNavigationId'])) {
					$__vars['i']++;
					$__compilerTemp3 .= '
											<li class="nav' . $__templater->escape($__vars['navSection']) . '">
												' . $__templater->callMacro(null, 'vnav_entry', array(
						'navId' => $__vars['navSection'],
						'nav' => $__vars['navEntry'],
						'selected' => ($__vars['navSection'] == $__vars['pageSection']),
						'shortcut' => $__vars['i'],
					), $__vars) . '
											</li>
										';
				}
			}
		}
		$__vars['vnavHtml'] = $__templater->preEscaped('
									<ul class="xbSidebar-nav-list">
										' . $__compilerTemp3 . '
									</ul>
								');
		$__finalCompiled .= '
								' . $__templater->filter($__vars['vnavHtml'], array(array('raw', array()),), true) . '
							</div>
						</div>
						';
		if ($__templater->func('property', array('xbCanvasButtons', ), false)) {
			$__finalCompiled .= '
							<div class="pageAction-toggle">
								' . $__templater->fontAwesome('fa-chevron-square-right fa-fw', array(
			)) . '
								<div class="p-title-pageAction">
									';
			if ($__vars['pageSelected'] == 'new_posts') {
				$__finalCompiled .= '
										' . $__templater->button('
											' . 'Forum list' . '
										', array(
					'href' => $__templater->func('link', array('forums/list', ), false),
					'icon' => 'list',
				), '', array(
				)) . '
										';
			} else {
				$__finalCompiled .= '
										' . $__templater->button('
											' . 'New posts' . '
										', array(
					'href' => (($__vars['xf']['options']['forumsDefaultPage'] == 'new_posts') ? $__templater->func('link', array('forums/new-posts', ), false) : $__templater->func('link', array('whats-new/posts', ), false)),
					'icon' => 'bolt',
				), '', array(
				)) . '
									';
			}
			$__finalCompiled .= '

									';
			if ($__vars['template'] == 'forum_view') {
				$__finalCompiled .= '
										' . (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '') . '
										';
			} else {
				$__finalCompiled .= '
										';
				if ($__templater->method($__vars['xf']['visitor'], 'canCreateThread', array())) {
					$__finalCompiled .= '
											' . $__templater->button('
												' . 'Post thread' . '
											', array(
						'href' => $__templater->func('link', array('forums/create-thread', ), false),
						'class' => 'button--cta',
						'icon' => 'write',
						'overlay' => 'true',
					), '', array(
					)) . '
										';
				}
				$__finalCompiled .= '
									';
			}
			$__finalCompiled .= '
								</div>
							</div>
						';
		}
		$__finalCompiled .= '
					</div>
					' . $__templater->includeTemplate('xb_canvas_panel_bottom', $__vars) . '
				</div>
			</div>
			<div class="canvas-right">
	';
	}
	$__finalCompiled .= '
		
	<div class="xb-page-wrapper--helper"></div>
	';
	if ($__templater->func('property', array('xbTopBar', ), false)) {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'topbar', array(), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if (($__templater->func('property', array('xbLogoPosition', ), false) == 'default') AND ($__templater->func('property', array('xbForumStyle', ), false) != 'canvas')) {
		$__finalCompiled .= '
	' . $__templater->callMacro(null, 'header', array(
			'searchConstraints' => $__vars['searchConstraints'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '	

<div class="xb-content-wrapper">
	<div class="navigation-helper">
		
	</div>
';
	$__compilerTemp4 = '';
	$__vars['i'] = 0;
	if ($__templater->isTraversable($__vars['navTree'])) {
		foreach ($__vars['navTree'] AS $__vars['navSection'] => $__vars['navEntry']) {
			if (($__vars['navSection'] != $__vars['xf']['app']['defaultNavigationId'])) {
				$__vars['i']++;
				$__compilerTemp4 .= '
						<li class="nav' . $__templater->escape($__vars['navSection']) . '">
							' . $__templater->callMacro(null, 'nav_entry', array(
					'navId' => $__vars['navSection'],
					'nav' => $__vars['navEntry'],
					'selected' => ($__vars['navSection'] == $__vars['pageSection']),
					'shortcut' => $__vars['i'],
				), $__vars) . '
						</li>
					';
			}
		}
	}
	$__vars['navHtml'] = $__templater->preEscaped('
	<div class="p-nav--wrapper">
	<nav class="p-nav' . (($__templater->func('property', array('xbLogoPosition', ), false) == 'insidenav') ? ' xb-nav-logo' : '') . '">
		<div class="p-nav-inner">
			<a class="p-nav-menuTrigger" data-xf-click="off-canvas" data-menu=".js-headerOffCanvasMenu" role="button" tabindex="0">
				<i aria-hidden="true"></i>
				<span class="p-nav-menuText">' . 'Menu' . '</span>
			</a>

		' . $__templater->callMacro(null, 'smallLogo', array(), $__vars) . '

			<div class="p-nav-scroller hScroller" data-xf-init="h-scroller" data-auto-scroll=".p-navEl.is-selected">
				<div class="hScroller-scroll">
					<ul class="p-nav-list js-offCanvasNavSource">
					' . $__compilerTemp4 . '
					</ul>
				</div>
			</div>
			
			' . $__templater->callMacro(null, 'visitortabs', array(
		'searchConstraints' => $__vars['searchConstraints'],
		'navTree' => $__vars['navTree'],
	), $__vars) . '			

		</div>
	</nav>
	</div>
');
	$__finalCompiled .= '
	
';
	if ((!$__templater->func('property', array('xbDisableSubnav', ), false)) AND ($__templater->func('property', array('xbForumStyle', ), false) != 'canvas')) {
		$__finalCompiled .= '	
';
		$__compilerTemp5 = '';
		if (!$__templater->test($__vars['selectedNavChildren'], 'empty', array())) {
			$__compilerTemp5 .= '
		<div class="p-sectionLinks">
			<div class="p-sectionLinks-inner hScroller" data-xf-init="h-scroller">
				<div class="hScroller-scroll">
					<ul class="p-sectionLinks-list">
					';
			$__vars['i'] = 0;
			if ($__templater->isTraversable($__vars['selectedNavChildren'])) {
				foreach ($__vars['selectedNavChildren'] AS $__vars['navId'] => $__vars['navEntry']) {
					$__vars['i']++;
					$__compilerTemp5 .= '
						<li>
							' . $__templater->callMacro(null, 'nav_entry', array(
						'navId' => $__vars['navId'],
						'nav' => $__vars['navEntry'],
						'shortcut' => 'alt+' . $__vars['i'],
					), $__vars) . '
						</li>
					';
				}
			}
			$__compilerTemp5 .= '
					</ul>
				</div>
			</div>
		</div>
	';
		} else if ($__vars['selectedNavEntry']) {
			$__compilerTemp5 .= '
		<div class="p-sectionLinks p-sectionLinks--empty"></div>
	';
		}
		$__vars['subNavHtml'] = $__templater->preEscaped('
	' . $__compilerTemp5 . '
');
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('publicNavSticky', ), false) == 'primary') {
		$__finalCompiled .= '
	<div class="p-navSticky p-navSticky--primary" data-xf-init="sticky-header">
		' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
	</div>
	' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
';
	} else if ($__templater->func('property', array('publicNavSticky', ), false) == 'all') {
		$__finalCompiled .= '
	<div class="p-navSticky p-navSticky--all" data-xf-init="sticky-header">
		' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
		' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
	</div>
';
	} else {
		$__finalCompiled .= '
	' . $__templater->filter($__vars['navHtml'], array(array('raw', array()),), true) . '
	' . $__templater->filter($__vars['subNavHtml'], array(array('raw', array()),), true) . '
';
	}
	$__finalCompiled .= '

<div class="offCanvasMenu offCanvasMenu--nav js-headerOffCanvasMenu" data-menu="menu" aria-hidden="true" data-ocm-builder="navigation">
	<div class="offCanvasMenu-backdrop" data-menu-close="true"></div>
	<div class="offCanvasMenu-content">
		<div class="offCanvasMenu-header">
			' . 'Menu' . '
			<a class="offCanvasMenu-closer" data-menu-close="true" role="button" tabindex="0" aria-label="' . $__templater->filter('Close', array(array('for_attr', array()),), true) . '"></a>
		</div>
		';
	if ($__vars['xf']['visitor']['user_id']) {
		$__finalCompiled .= '
			<div class="p-offCanvasAccountLink">
				<div class="offCanvasMenu-linkHolder">
					<a href="' . $__templater->func('link', array('account', ), true) . '" class="offCanvasMenu-link">
						' . $__templater->func('avatar', array($__vars['xf']['visitor'], 'xxs', false, array(
			'href' => '',
		))) . '
						' . $__templater->escape($__vars['xf']['visitor']['username']) . '
					</a>
				</div>
				<hr class="offCanvasMenu-separator" />
			</div>
		';
	} else {
		$__finalCompiled .= '
			<div class="p-offCanvasRegisterLink">
				<div class="offCanvasMenu-linkHolder">
					<a href="' . $__templater->func('link', array('login', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay" data-menu-close="true">
						' . 'Log in' . '
					</a>
				</div>
				<hr class="offCanvasMenu-separator" />
				';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
					<div class="offCanvasMenu-linkHolder">
						<a href="' . $__templater->func('link', array('register', ), true) . '" class="offCanvasMenu-link" data-xf-click="overlay" data-menu-close="true">
							' . 'Register' . '
						</a>
					</div>
					<hr class="offCanvasMenu-separator" />
				';
		}
		$__finalCompiled .= '
			</div>
		';
	}
	$__finalCompiled .= '
		<div class="js-offCanvasNavTarget"></div>
	</div>
</div>

	';
	if (($__templater->func('property', array('xbLogoPosition', ), false) == 'belownav') AND ($__templater->func('property', array('xbForumStyle', ), false) != 'canvas')) {
		$__finalCompiled .= '
	' . $__templater->callMacro(null, 'header', array(
			'searchConstraints' => $__vars['searchConstraints'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	
	';
	if ($__templater->func('property', array('xbWelcomeLocation', ), false) == 'belownav') {
		$__finalCompiled .= '
		' . $__templater->includeTemplate('xb_welcome', $__vars) . '
	';
	}
	$__finalCompiled .= '
	
<div class="p-body">
	<div class="p-body-inner">
		
		';
	if ($__templater->func('property', array('xbWelcomeLocation', ), false) == 'abovecontent') {
		$__finalCompiled .= '
			' . $__templater->includeTemplate('xb_welcome', $__vars) . '
		';
	}
	$__finalCompiled .= '
		<!--XF:EXTRA_OUTPUT-->

		';
	if ($__vars['notices']['block']) {
		$__finalCompiled .= '
			' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'block',
			'notices' => $__vars['notices']['block'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

		';
	if ($__vars['notices']['scrolling']) {
		$__finalCompiled .= '
			' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'scrolling',
			'notices' => $__vars['notices']['scrolling'],
		), $__vars) . '
		';
	}
	$__finalCompiled .= '

		' . $__templater->callAdsMacro('container_breadcrumb_top_above', array(), $__vars) . '
		' . $__templater->callMacro(null, 'breadcrumbs', array(
		'breadcrumbs' => $__vars['breadcrumbs'],
		'navTree' => $__vars['navTree'],
		'selectedNavEntry' => $__vars['selectedNavEntry'],
	), $__vars) . '
		' . $__templater->callAdsMacro('container_breadcrumb_top_below', array(), $__vars) . '

		' . $__templater->callMacro('browser_warning_macros', 'javascript', array(), $__vars) . '
		' . $__templater->callMacro('browser_warning_macros', 'browser', array(), $__vars) . '

		';
	$__compilerTemp6 = '';
	$__compilerTemp6 .= '
				';
	$__compilerTemp7 = '';
	$__compilerTemp7 .= '
						';
	if ((!$__templater->func('property', array('xbForumListH1', ), false)) OR ($__vars['template'] != 'forum_list')) {
		$__compilerTemp7 .= '
							';
		if (!$__vars['noH1']) {
			$__compilerTemp7 .= '
								<h1 class="p-title-value">' . $__templater->escape($__vars['h1']) . '</h1>
							';
		}
		$__compilerTemp7 .= '
						';
	}
	$__compilerTemp7 .= '
						';
	$__compilerTemp8 = '';
	$__compilerTemp8 .= (isset($__templater->pageParams['pageAction']) ? $__templater->pageParams['pageAction'] : '');
	if ($__vars['sidebar'] AND ($__templater->func('property', array('xbSidebarCollapse', ), false) AND (!$__templater->func('in_array', array($__templater->func('property', array('xbSidebarPosition', ), false), array('belowcontent', 'disabled', ), ), false)))) {
		$__compilerTemp8 .= '<span id="collapseSidebar" class="button' . ((!$__templater->func('is_toggled', array('_sidebarCollapse', ), false)) ? ' xb-sidebar-default' : '') . '" data-xf-click="toggle" data-active-class="xb-sidebar-default" data-xf-init="toggle-storage tooltip" title="' . $__templater->func('property', array('xbSidebarCollapsePhrase', ), true) . '" data-target=".p-body-main--withSidebar" data-storage-type="cookie" data-storage-key="_sidebarCollapse">' . $__templater->fontAwesome('fa-caret-right', array(
		)) . '</span>';
	}
	if (strlen(trim($__compilerTemp8)) > 0) {
		$__compilerTemp7 .= '
							<div class="p-title-pageAction">' . $__compilerTemp8 . '</div>
						';
	}
	$__compilerTemp7 .= '				
					';
	if (strlen(trim($__compilerTemp7)) > 0) {
		$__compilerTemp6 .= '
					<div class="p-title ' . ($__vars['noH1'] ? 'p-title--noH1' : '') . '">
					' . $__compilerTemp7 . '
					</div>
				';
	}
	$__compilerTemp6 .= '

				';
	if (!$__templater->test($__vars['description'], 'empty', array())) {
		$__compilerTemp6 .= '
					<div class="p-description">' . $__templater->escape($__vars['description']) . '</div>
				';
	}
	$__compilerTemp6 .= '
			';
	if (!$__templater->test($__vars['headerHtml'], 'empty', array())) {
		$__finalCompiled .= '
			<div class="p-body-header">
				' . $__templater->filter($__vars['headerHtml'], array(array('raw', array()),), true) . '
			</div>
		';
	} else if (strlen(trim($__compilerTemp6)) > 0) {
		$__finalCompiled .= '
			<div class="p-body-header">
			' . $__compilerTemp6 . '
			</div>
		';
	}
	$__finalCompiled .= '

		<div class="p-body-main ' . ($__vars['sidebar'] ? 'p-body-main--withSidebar' : '') . ' ' . ($__vars['sideNav'] ? 'p-body-main--withSideNav' : '') . ((!$__templater->func('is_toggled', array('_sidebarCollapse', ), false)) ? ' xb-sidebar-default' : '') . '">
			';
	if ($__vars['sideNav']) {
		$__finalCompiled .= '
				<div class="p-body-sideNav">
					<div class="p-body-sideNavTrigger">
						' . $__templater->button('
							' . ($__templater->escape($__vars['sideNavTitle']) ?: 'Navigation') . '
						', array(
			'class' => 'button--link',
			'data-xf-click' => 'off-canvas',
			'data-menu' => '#js-SideNavOcm',
		), '', array(
		)) . '
					</div>
					<div class="p-body-sideNavInner" data-ocm-class="offCanvasMenu offCanvasMenu--blocks" id="js-SideNavOcm" data-ocm-builder="sideNav">
						<div data-ocm-class="offCanvasMenu-backdrop" data-menu-close="true"></div>
						<div data-ocm-class="offCanvasMenu-content">
							<div class="p-body-sideNavContent">
								' . $__templater->callAdsMacro('container_sidenav_above', array(), $__vars) . '
								';
		if ($__templater->isTraversable($__vars['sideNav'])) {
			foreach ($__vars['sideNav'] AS $__vars['sideNavHtml']) {
				$__finalCompiled .= '
									' . $__templater->escape($__vars['sideNavHtml']) . '
								';
			}
		}
		$__finalCompiled .= '
								' . $__templater->callAdsMacro('container_sidenav_below', array(), $__vars) . '
							</div>
						</div>
					</div>
				</div>
			';
	}
	$__finalCompiled .= '
			
			';
	if (($__templater->func('property', array('xbSidebarPosition', ), false) == 'leftside') AND $__vars['sidebar']) {
		$__finalCompiled .= '
				';
		if ($__templater->func('property', array('xbSidebarCollapse', ), false)) {
			$__finalCompiled .= '<span id="collapseSidebar" class="button' . ((!$__templater->func('is_toggled', array('_sidebarCollapse', ), false)) ? ' xb-sidebar-default' : '') . '" data-xf-click="toggle" data-active-class="xb-sidebar-default" data-xf-init="toggle-storage" data-target=".p-body-main--withSidebar" data-storage-type="cookie" data-storage-key="_sidebarCollapse">' . $__templater->fontAwesome('fa-caret-left', array(
			)) . '</span>';
		}
		$__finalCompiled .= '

				<div class="p-body-sidebar">
					';
		if ($__templater->func('property', array('xbStickySidebar', ), false)) {
			$__finalCompiled .= '
						<div class="p-sidebar-inner" data-xf-init="sticky">
					';
		} else {
			$__finalCompiled .= '
						<div class="p-sidebar-inner">
					';
		}
		$__finalCompiled .= '
							
							';
		if ($__templater->func('property', array('xbWelcomeLocation', ), false) == 'sidebar') {
			$__finalCompiled .= '
								' . $__templater->includeTemplate('xb_welcome', $__vars) . '
							';
		}
		$__finalCompiled .= '
							';
		if ((!$__vars['xf']['visitor']['user_id']) AND $__templater->func('property', array('xbSidebarLogin', ), false)) {
			$__finalCompiled .= '
								' . $__templater->includeTemplate('xb_sidebar_login', $__vars) . '	
							';
		}
		$__finalCompiled .= '
							' . $__templater->callAdsMacro('container_sidebar_above', array(), $__vars) . '
							';
		if ($__templater->isTraversable($__vars['sidebar'])) {
			foreach ($__vars['sidebar'] AS $__vars['sidebarHtml']) {
				$__finalCompiled .= '
								' . $__templater->escape($__vars['sidebarHtml']) . '
							';
			}
		}
		$__finalCompiled .= '
							' . $__templater->callAdsMacro('container_sidebar_below', array(), $__vars) . '
						</div>
				</div>

			';
	}
	$__finalCompiled .= '
			
			<div class="p-body-content">
				
				';
	if ($__templater->func('property', array('xbWelcomeLocation', ), false) == 'aboveleft') {
		$__finalCompiled .= '
					' . $__templater->includeTemplate('xb_welcome', $__vars) . '
				';
	}
	$__finalCompiled .= '
								
				' . $__templater->callAdsMacro('container_content_above', array(), $__vars) . '
				<div class="p-body-pageContent">' . $__templater->filter($__vars['content'], array(array('raw', array()),), true) . '</div>
				' . $__templater->callAdsMacro('container_content_below', array(), $__vars) . '
			</div>

			';
	if ($__templater->func('in_array', array($__templater->func('property', array('xbSidebarPosition', ), false), array('rightside', 'belowcontent', ), ), false) AND $__vars['sidebar']) {
		$__finalCompiled .= '
				';
		if ($__templater->func('property', array('xbSidebarCollapse', ), false)) {
			$__finalCompiled .= '<span id="collapseSidebar" class="button' . ((!$__templater->func('is_toggled', array('_sidebarCollapse', ), false)) ? ' xb-sidebar-default' : '') . '" data-xf-click="toggle" data-active-class="xb-sidebar-default" data-xf-init="toggle-storage" data-target=".p-body-main--withSidebar" data-storage-type="cookie" data-storage-key="_sidebarCollapse">' . $__templater->func('property', array('xbSidebarCollapsePhrase', ), true) . '</span><input type="hidden" autofocus="true" />';
		}
		$__finalCompiled .= '

				<div class="p-body-sidebar">
					';
		if ($__templater->func('property', array('xbStickySidebar', ), false)) {
			$__finalCompiled .= '
						<div class="p-sidebar-inner" data-xf-init="sticky">
					';
		} else {
			$__finalCompiled .= '
						<div class="p-sidebar-inner">
					';
		}
		$__finalCompiled .= '
							
							';
		if ($__templater->func('property', array('xbWelcomeLocation', ), false) == 'sidebar') {
			$__finalCompiled .= '
								' . $__templater->includeTemplate('xb_welcome', $__vars) . '
							';
		}
		$__finalCompiled .= '
							';
		if ((!$__vars['xf']['visitor']['user_id']) AND $__templater->func('property', array('xbSidebarLogin', ), false)) {
			$__finalCompiled .= '
								' . $__templater->includeTemplate('xb_sidebar_login', $__vars) . '	
							';
		}
		$__finalCompiled .= '
							' . $__templater->callAdsMacro('container_sidebar_above', array(), $__vars) . '
							';
		if ($__templater->isTraversable($__vars['sidebar'])) {
			foreach ($__vars['sidebar'] AS $__vars['sidebarHtml']) {
				$__finalCompiled .= '
								' . $__templater->escape($__vars['sidebarHtml']) . '
							';
			}
		}
		$__finalCompiled .= '
							' . $__templater->callAdsMacro('container_sidebar_below', array(), $__vars) . '
						</div>
				</div>

		';
	}
	$__finalCompiled .= '
			
		</div>

		' . $__templater->callAdsMacro('container_breadcrumb_bottom_above', array(), $__vars) . '
		' . $__templater->callMacro(null, 'breadcrumbs', array(
		'breadcrumbs' => $__vars['breadcrumbs'],
		'navTree' => $__vars['navTree'],
		'selectedNavEntry' => $__vars['selectedNavEntry'],
		'variant' => 'bottom',
	), $__vars) . '
		' . $__templater->callAdsMacro('container_breadcrumb_bottom_below', array(), $__vars) . '				
				
	';
	if ($__templater->func('property', array('xbFooterLocation', ), false) == 'content') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'default-footer', array(), $__vars) . '
	';
	}
	$__finalCompiled .= '
				
	</div>
</div>

</div> <!-- closing xb-content-wrapper -->
	
<footer class="p-footer" id="footer">
	<div class="p-footer--container' . ($__templater->func('property', array('xbStretchFooter', ), false) ? ' footer-stretched' : '') . '">
		
	';
	if ($__templater->func('property', array('xbFooterLocation', ), false) == 'default') {
		$__finalCompiled .= '
		' . $__templater->callMacro(null, 'default-footer', array(), $__vars) . '
	';
	}
	$__finalCompiled .= '
	
		';
	if ($__templater->func('property', array('xbFooter', ), false)) {
		$__finalCompiled .= '
			' . $__templater->includeTemplate('xb_footer', $__vars) . '
		';
	}
	$__finalCompiled .= '

		';
	$__compilerTemp9 = '';
	$__compilerTemp9 .= '
							' . $__templater->func('copyright') . ' ';
	if (!$__templater->func('property', array('xbRemoveCopyright', ), false)) {
		$__compilerTemp9 .= '<span class="p-pe-copyright">Design by: <a href="https://pixelexit.com">Pixel Exit</a></span>';
	}
	$__compilerTemp9 .= '
							' . '' . '
						';
	if (strlen(trim($__compilerTemp9)) > 0) {
		$__finalCompiled .= '
			<div class="p-footer-copyright">
				<div class="p-footer-inner">
					<div class="p-footer-copyright--flex">
					<div class="copyright-left">
						' . $__compilerTemp9 . '
					</div>
					
					';
		if ($__templater->func('property', array('xbFooterLocation', ), false) == 'copyright') {
			$__finalCompiled .= '
						<div class="copyright-right">	
							' . $__templater->callMacro(null, 'default-footer', array(), $__vars) . '
						</div>
					';
		}
		$__finalCompiled .= '
					</div>
					
					';
		$__compilerTemp10 = '';
		$__compilerTemp10 .= '
							' . $__templater->callMacro('debug_macros', 'debug', array(
			'controller' => $__vars['controller'],
			'action' => $__vars['actionMethod'],
			'template' => $__vars['template'],
		), $__vars) . '
						';
		if (strlen(trim($__compilerTemp10)) > 0) {
			$__finalCompiled .= '
						<div class="p-footer-debug">
						' . $__compilerTemp10 . '
						</div>
					';
		}
		$__finalCompiled .= '
					
				</div>
			</div>
		';
	}
	$__finalCompiled .= '
		
	</div>
</footer>

</div> <!-- closing p-pageWrapper -->
	
		';
	if ($__templater->func('property', array('xbForumStyle', ), false) == 'canvas') {
		$__finalCompiled .= '
			</div></div>
		';
	}
	$__finalCompiled .= '
</div> <!-- closing xb-pageWrapper -->
	
<div class="u-bottomFixer js-bottomFixTarget">
	';
	if ($__vars['notices']['floating']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'floating',
			'notices' => $__vars['notices']['floating'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
	';
	if ($__vars['notices']['bottom_fixer']) {
		$__finalCompiled .= '
		' . $__templater->callMacro('notice_macros', 'notice_list', array(
			'type' => 'bottom_fixer',
			'notices' => $__vars['notices']['bottom_fixer'],
		), $__vars) . '
	';
	}
	$__finalCompiled .= '
</div>

';
	if ($__templater->func('property', array('scrollJumpButtons', ), false)) {
		$__finalCompiled .= '
	<div class="u-scrollButtons js-scrollButtons" data-trigger-type="' . $__templater->func('property', array('scrollJumpButtons', ), true) . '">
		' . $__templater->button($__templater->fontAwesome('fa-arrow-up', array(
		)) . '<span class="u-srOnly">' . 'Top' . '</span>', array(
			'href' => '#top',
			'class' => 'button--scroll',
			'data-xf-click' => 'scroll-to',
		), '', array(
		)) . '
		';
		if ($__templater->func('property', array('scrollJumpButtons', ), false) != 'up') {
			$__finalCompiled .= '
			' . $__templater->button($__templater->fontAwesome('fa-arrow-down', array(
			)) . '<span class="u-srOnly">' . 'Bottom' . '</span>', array(
				'href' => '#footer',
				'class' => 'button--scroll',
				'data-xf-click' => 'scroll-to',
			), '', array(
			)) . '
		';
		}
		$__finalCompiled .= '
	</div>
';
	}
	$__finalCompiled .= '

' . $__templater->callMacro('helper_js_global', 'body', array(
		'app' => 'public',
		'jsState' => $__vars['jsState'],
	), $__vars) . '

' . $__templater->includeTemplate('xb_body_helper', $__vars) . '
' . $__templater->includeTemplate('xb_body', $__vars) . '

';
	if ($__templater->func('count', array($__vars['xf']['reactionsActive'], ), false) > 1) {
		$__finalCompiled .= '
	<script type="text/template" id="xfReactTooltipTemplate">
		<div class="tooltip-content-inner">
			<div class="reactTooltip">
				';
		if ($__templater->isTraversable($__vars['xf']['reactionsActive'])) {
			foreach ($__vars['xf']['reactionsActive'] AS $__vars['reactionId'] => $__vars['reaction']) {
				$__finalCompiled .= '
					' . $__templater->func('reaction', array(array(
					'id' => $__vars['reactionId'],
					'tooltip' => 'true',
				))) . '
				';
			}
		}
		$__finalCompiled .= '
			</div>
		</div>
	</script>
';
	}
	$__finalCompiled .= '

' . $__templater->filter($__vars['custom-xbBody'], array(array('raw', array()),), true) . '
' . $__templater->filter($__vars['ldJsonHtml'], array(array('raw', array()),), true) . '

<!-- XenBase Version: ' . $__templater->func('property', array('xbVersion', ), true) . ' -->
<!-- Style Version: ' . $__templater->func('property', array('xbStyleVersion', ), true) . ' -->
	
</body>
</html>

' . '
' . '

' . '

' . '

' . '

' . '

' . '

' . '

' . '

' . '

';
	if ($__templater->func('property', array('xbTopBar', ), false)) {
		$__finalCompiled .= '
' . '
';
	}
	$__finalCompiled .= '
	
';
	if ($__templater->func('property', array('xbForumStyle', ), false) == 'canvas') {
		$__finalCompiled .= '
' . '

' . '

' . '
';
	}
	return $__finalCompiled;
});