<?php
// FROM HASH: 7ac0a926fd5c24a8bdc6df5f42d7cd1e
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->func('property', array('xbCustomFont', ), false) == 'opensans') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet"> 
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'lato') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet"> 
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'titilliumweb') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,400i,700,700i" rel="stylesheet"> 
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'nunito') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,400i,700,700i" rel="stylesheet">
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'montserrat') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i" rel="stylesheet">
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'roboto') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700,700i" rel="stylesheet">
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'sourcesanspro') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,700,700i" rel="stylesheet">
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'mplusrounded') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=M+PLUS+Rounded+1c:300,400,700" rel="stylesheet">
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'raleway') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'poppins') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700" rel="stylesheet">
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'ubuntu') {
		$__finalCompiled .= '
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,700" rel="stylesheet">
';
	}
	$__finalCompiled .= '
';
	if (($__templater->func('property', array('xbCustomFont', ), false) == 'custom') AND $__templater->func('property', array('xbEmbedFont', ), false)) {
		$__finalCompiled .= '
	' . $__templater->func('property', array('xbEmbedFont', ), true) . '
';
	}
	return $__finalCompiled;
});