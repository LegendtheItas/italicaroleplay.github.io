<?php
// FROM HASH: 0eb093a25369c1a7821e9d73ba87a5c8
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__vars['faVersion'] = $__templater->preEscaped('5.12.1');
	$__finalCompiled .= '

';
	if ($__templater->func('fa_weight', array(), false) == 'l') {
		$__finalCompiled .= '
	<link rel="preload" href="' . $__templater->func('base_url', array('styles/fonts/fa/fa-light-300.woff2?_v=' . $__vars['faVersion'], ), true) . '" as="font" type="font/woff2" crossorigin="anonymous" />
';
	} else if ($__templater->func('fa_weight', array(), false) == 'r') {
		$__finalCompiled .= '
	<link rel="preload" href="' . $__templater->func('base_url', array('styles/fonts/fa/fa-regular-400.woff2?_v=' . $__vars['faVersion'], ), true) . '" as="font" type="font/woff2" crossorigin="anonymous" />
';
	} else if ($__templater->func('fa_weight', array(), false) == 's') {
		$__finalCompiled .= '
	<link rel="preload" href="' . $__templater->func('base_url', array('styles/fonts/fa/fa-solid-900.woff2?_v=' . $__vars['faVersion'], ), true) . '" as="font" type="font/woff2" crossorigin="anonymous" />
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('fa_weight', array(), false) != 's') {
		$__finalCompiled .= '
	<link rel="preload" href="' . $__templater->func('base_url', array('styles/fonts/fa/fa-solid-900.woff2?_v=' . $__vars['faVersion'], ), true) . '" as="font" type="font/woff2" crossorigin="anonymous" />
';
	}
	$__finalCompiled .= '

<link rel="preload" href="' . $__templater->func('base_url', array('styles/fonts/fa/fa-brands-400.woff2?_v=' . $__vars['faVersion'], ), true) . '" as="font" type="font/woff2" crossorigin="anonymous" />';
	return $__finalCompiled;
});