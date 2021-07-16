<?php
// FROM HASH: b419aee232a42bf3964c4407e6aab436
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '// This should be used for additional LESS setup code (that does not output anything).
// setup.less customizations should be avoided when possible.

' . $__templater->includeTemplate('xb_setup_style.less', $__vars) . '
.m-gradient1()
{
';
	if ($__templater->func('property', array('xbGradient1Direction', ), false) == 'vertical') {
		$__finalCompiled .= '
@directionVariable: to bottom;
';
	} else if ($__templater->func('property', array('xbGradient1Direction', ), false) == 'horizontal') {
		$__finalCompiled .= '
@directionVariable: to right;
';
	} else if ($__templater->func('property', array('xbGradient1Direction', ), false) == 'diagonaldownright') {
		$__finalCompiled .= '
@directionVariable: 135deg;
';
	} else if ($__templater->func('property', array('xbGradient1Direction', ), false) == 'diagonalupright') {
		$__finalCompiled .= '
@directionVariable: 45deg;
';
	} else if ($__templater->func('property', array('xbGradient1Direction', ), false) == 'radial') {
		$__finalCompiled .= '
@directionVariable: ellipse at center;
';
	}
	$__finalCompiled .= '
	background: ' . (($__templater->func('property', array('xbGradient1Direction', ), false) == 'radial') ? 'radial-gradient' : 'linear-gradient') . '(@directionVariable, @xf-xbGradient1Start 0%, @xf-xbGradient1End 100%);
}

.m-gradient2()
{
';
	if ($__templater->func('property', array('xbGradient2Direction', ), false) == 'vertical') {
		$__finalCompiled .= '
@directionVariable2: to bottom;
';
	} else if ($__templater->func('property', array('xbGradient2Direction', ), false) == 'horizontal') {
		$__finalCompiled .= '
@directionVariable2: to right;
';
	} else if ($__templater->func('property', array('xbGradient2Direction', ), false) == 'diagonaldownright') {
		$__finalCompiled .= '
@directionVariable2: 135deg;
';
	} else if ($__templater->func('property', array('xbGradient2Direction', ), false) == 'diagonalupright') {
		$__finalCompiled .= '
@directionVariable2: 45deg;
';
	} else if ($__templater->func('property', array('xbGradient2Direction', ), false) == 'radial') {
		$__finalCompiled .= '
@directionVariable2: ellipse at center;
';
	}
	$__finalCompiled .= '
	background: ' . (($__templater->func('property', array('xbGradient1Direction2', ), false) == 'radial') ? 'radial-gradient' : 'linear-gradient') . '(@directionVariable2, @xf-xbGradient2Start 0%, @xf-xbGradient2End 100%);
}';
	return $__finalCompiled;
});