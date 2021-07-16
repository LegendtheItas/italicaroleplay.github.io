<?php
// FROM HASH: 3405801a120735cb5b208d813778d01e
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->func('property', array('styleMainColors', ), false) == 'color1') {
		$__finalCompiled .= ' 
@pageBackground: #0e111b;
@contentBackground: fade(#171B24, ' . $__templater->func('property', array('styleOpacity', ), true) . '%);
@contentBackgroundSolid: #171B24;
@altContentBackground: #1d222d;
@headingBackground: #202732;
@headingColor: #FFFFFF;
@linkColor: #e3e2e6;
';
		if ($__templater->func('property', array('styleAccentCustom', ), false)) {
			$__finalCompiled .= '
@accentColor1: @xf-styleAccentCustom;
';
		} else {
			$__finalCompiled .= '
@accentColor1: #5c6980;
';
		}
		$__finalCompiled .= '

';
	} else if ($__templater->func('property', array('styleMainColors', ), false) == 'color2') {
		$__finalCompiled .= '
@pageBackground: #212026;
@contentBackground: fade(#232229, ' . $__templater->func('property', array('styleOpacity', ), true) . '%);
@contentBackgroundSolid: #232229;
@altContentBackground: #2c2b33;
@headingBackground: #32313a;
@headingColor: #FFFFFF;
@linkColor: #d8d4e4;
';
		if ($__templater->func('property', array('styleAccentCustom', ), false)) {
			$__finalCompiled .= '
@accentColor1: @xf-styleAccentCustom;
';
		} else {
			$__finalCompiled .= '
@accentColor1: #807e86;
';
		}
		$__finalCompiled .= '


';
	} else if ($__templater->func('property', array('styleMainColors', ), false) == 'color3') {
		$__finalCompiled .= '
@pageBackground: #19183a;
@contentBackground: fade(#282744, ' . $__templater->func('property', array('styleOpacity', ), true) . '%);
@contentBackgroundSolid: #282744;
@altContentBackground: #202038;
@headingBackground: #1d1c31;
@headingColor: #FFFFFF;
@accentColor1: #5d54a9;
@linkColor: #dbdaea;
';
		if ($__templater->func('property', array('styleAccentCustom', ), false)) {
			$__finalCompiled .= '
@accentColor1: @xf-styleAccentCustom;
';
		} else {
			$__finalCompiled .= '
@accentColor1: #807e86;
';
		}
		$__finalCompiled .= '

';
	} else if ($__templater->func('property', array('styleMainColors', ), false) == 'color4') {
		$__finalCompiled .= '
@pageBackground: #1b2631;
@contentBackground: fade(#22282f, ' . $__templater->func('property', array('styleOpacity', ), true) . '%);
@contentBackgroundSolid: #22282f;
@altContentBackground: #282f38;
@headingBackground: #283038;
@headingColor: #FFFFFF;
@linkColor: #bac5d2;
';
		if ($__templater->func('property', array('styleAccentCustom', ), false)) {
			$__finalCompiled .= '
@accentColor1: @xf-styleAccentCustom;
';
		} else {
			$__finalCompiled .= '
@accentColor1: #dc173a;
';
		}
		$__finalCompiled .= '
';
	} else if ($__templater->func('property', array('styleMainColors', ), false) == 'color5') {
		$__finalCompiled .= '
@pageBackground: #19191a;
@contentBackground: fade(#232323, ' . $__templater->func('property', array('styleOpacity', ), true) . '%);
@contentBackgroundSolid: #232323;
@altContentBackground: #292929;
@headingBackground: #2b2b2b;
@headingColor: #FFFFFF;
@linkColor: #dcdcdc;
';
		if ($__templater->func('property', array('styleAccentCustom', ), false)) {
			$__finalCompiled .= '
@accentColor1: @xf-styleAccentCustom;
';
		} else {
			$__finalCompiled .= '
@accentColor1: #f50d0e;
';
		}
		$__finalCompiled .= '
';
	} else if ($__templater->func('property', array('styleMainColors', ), false) == 'color6') {
		$__finalCompiled .= '
@pageBackground: #291f1c;
@contentBackground: fade(#1c1817, ' . $__templater->func('property', array('styleOpacity', ), true) . '%);
@contentBackgroundSolid: #1c1817;
@altContentBackground: #2b2524;
@headingBackground: #38302a;
@headingColor: #FFFFFF;
@linkColor: #eae3e1;
';
		if ($__templater->func('property', array('styleAccentCustom', ), false)) {
			$__finalCompiled .= '
@accentColor1: @xf-styleAccentCustom;
';
		} else {
			$__finalCompiled .= '
@accentColor1: #332522;
';
		}
		$__finalCompiled .= '
';
	} else if ($__templater->func('property', array('styleMainColors', ), false) == 'color7') {
		$__finalCompiled .= '
@pageBackground: #2b4048;
@contentBackground: fade(#28373e, ' . $__templater->func('property', array('styleOpacity', ), true) . '%);
@contentBackgroundSolid: #28373e;
@altContentBackground: #222f35;
@headingBackground: #2f4048;
@headingColor: #FFFFFF;
@linkColor: #c4d7e0;
';
		if ($__templater->func('property', array('styleAccentCustom', ), false)) {
			$__finalCompiled .= '
@accentColor1: @xf-styleAccentCustom;
';
		} else {
			$__finalCompiled .= '
@accentColor1: #79a841;
';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '



';
	if ($__templater->func('property', array('styleTexture', ), false) != 'none') {
		$__finalCompiled .= '
.block-body .node, .p-breadcrumbs, .block-container, .notice.notice--primary, .p-sidebar-inner .block-container,
.message-cell.message-cell--main
{
	background-image: url(@xf-xbStyleFolder/xenforo/sources/textures/' . $__templater->func('property', array('styleTexture', ), true) . '.png);
	background-repeat: repeat;
}
';
	}
	return $__finalCompiled;
});