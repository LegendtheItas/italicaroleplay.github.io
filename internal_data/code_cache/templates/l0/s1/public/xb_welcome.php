<?php
// FROM HASH: d31029838fdb49a5cc49ed33061cc976
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->func('property', array('xbWelcomeNotice', ), false) AND (!$__vars['xf']['visitor']['user_id'])) {
		$__finalCompiled .= '
<div class="xb-welcome-notice' . (($__templater->func('property', array('xbWelcomeLocation', ), false) == 'belownav') ? ' xb-welcome-fluid' : ' xb-welcome-content') . '">
	<div class="xb-welcome-notice--inner">
		<div class="xb-welcome-notice--mask">
		';
		if ($__templater->func('property', array('xbWelcomeNoticeTitle', ), false)) {
			$__finalCompiled .= '
			<h3>' . $__templater->func('property', array('xbWelcomeNoticeTitle', ), true) . '</h3>
		';
		}
		$__finalCompiled .= '
		';
		if ($__templater->func('property', array('xbWelcomeNoticeDescription', ), false)) {
			$__finalCompiled .= '
			<h4>' . $__templater->func('property', array('xbWelcomeNoticeDescription', ), true) . '</h4>
		';
		}
		$__finalCompiled .= '
		';
		if ($__vars['xf']['options']['registrationSetup']['enabled']) {
			$__finalCompiled .= '
		<a href="' . $__templater->func('link', array('register', ), true) . '" class="button"><span class="button-text">' . 'Register' . '</span></a>
		';
		}
		$__finalCompiled .= '
		
		<a href="' . $__templater->func('link', array('login', ), true) . '" class="button--cta button" rel="nofollow" data-xf-click="overlay" data-menu-close="true">
			<span class="button-text">' . 'Log in' . '</span>
		</a>
		</div>
	</div>
</div>
';
	}
	return $__finalCompiled;
});