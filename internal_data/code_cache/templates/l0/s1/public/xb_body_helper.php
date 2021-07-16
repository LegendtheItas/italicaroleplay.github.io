<?php
// FROM HASH: 88ed227bf1fdd7fa01e165c3bf99007a
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->func('property', array('xbEnableBackstretch', ), false)) {
		$__finalCompiled .= '
	<script src="' . $__templater->func('base_url', array($__templater->func('property', array('xbBackstretchPath', ), false), ), true) . '"></script>
	<script>
		';
		if ($__templater->func('property', array('xbBackstretchAdvanced', ), false)) {
			$__finalCompiled .= '
			' . $__templater->func('property', array('xbBackstretchAdvanced', ), true) . '
				';
		} else {
			$__finalCompiled .= '
		$';
			if ($__templater->func('property', array('xbBackstretchSelector', ), false) == 'default') {
			} else if ($__templater->func('property', array('xbBackstretchSelector', ), false) == 'custom') {
				$__finalCompiled .= '("' . $__templater->func('property', array('xbBackstretchCustom', ), true) . '")';
			} else {
				$__finalCompiled .= '("' . $__templater->func('property', array('xbBackstretchSelector', ), true) . '")';
			}
			$__finalCompiled .= '.backstretch([
			"' . $__templater->filter($__templater->func('base_url', array($__templater->func('property', array('xbBackstretchImage', ), false), ), false), array(array('escape', array('js', )),), true) . '"
			';
			if ($__templater->func('property', array('xbBackstretchImage2', ), false)) {
				$__finalCompiled .= ', "' . $__templater->filter($__templater->func('base_url', array($__templater->func('property', array('xbBackstretchImage2', ), false), ), false), array(array('escape', array('js', )),), true) . '"';
			}
			$__finalCompiled .= '
			';
			if ($__templater->func('property', array('xbBackstretchImage3', ), false)) {
				$__finalCompiled .= ', "' . $__templater->filter($__templater->func('base_url', array($__templater->func('property', array('xbBackstretchImage3', ), false), ), false), array(array('escape', array('js', )),), true) . '"';
			}
			$__finalCompiled .= '
			';
			if ($__templater->func('property', array('xbBackstretchImage4', ), false)) {
				$__finalCompiled .= ', "' . $__templater->filter($__templater->func('base_url', array($__templater->func('property', array('xbBackstretchImage4', ), false), ), false), array(array('escape', array('js', )),), true) . '"';
			}
			$__finalCompiled .= '
			';
			if ($__templater->func('property', array('xbBackstretchImage5', ), false)) {
				$__finalCompiled .= ', "' . $__templater->filter($__templater->func('base_url', array($__templater->func('property', array('xbBackstretchImage5', ), false), ), false), array(array('escape', array('js', )),), true) . '"';
			}
			$__finalCompiled .= '
		], {duration: ' . $__templater->func('property', array('xbBackstretchDuration', ), true) . ', fade: ' . $__templater->func('property', array('xbBackstretchFade', ), true) . '});
		';
		}
		$__finalCompiled .= '
	</script>
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbStickySidebar', ), false)) {
		$__finalCompiled .= '
	<script>	
		XF.Element.extend(\'sticky\', {
			options: {
				';
		if ($__templater->func('property', array('publicNavSticky', ), false) == 'primary') {
			$__finalCompiled .= '
				offset_top: ' . ((($__templater->func('property', array('publicNavPaddingV', ), false) * 2) + ($__templater->func('property', array('fontSizeNormal', ), false) * $__templater->func('property', array('lineHeightDefault', ), false))) + 10) . '
			';
		} else if ($__templater->func('property', array('publicNavSticky', ), false) == 'all') {
			$__finalCompiled .= '
				offset_top: ' . ((((((($__templater->func('property', array('publicNavPaddingV', ), false) * 2) + ($__templater->func('property', array('fontSizeNormal', ), false) * $__templater->func('property', array('lineHeightDefault', ), false))) + 20) + ($__templater->func('property', array('publicSubNavPaddingV', ), false) * 2)) + ($__templater->func('property', array('fontSizeNormal', ), false) * $__templater->func('property', array('lineHeightDefault', ), false))) + $__templater->func('property', array('publicSubNav--border-top-width', ), false)) + $__templater->func('property', array('publicSubNav--border-bottom-width', ), false)) . '
		';
		}
		$__finalCompiled .= '				  
		}
		});
	</script>
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbDesignMode', ), false) AND $__vars['xf']['visitor']['is_admin']) {
		$__finalCompiled .= '
	' . $__templater->includeTemplate('xb_design_mode', $__vars) . '
';
	}
	return $__finalCompiled;
});