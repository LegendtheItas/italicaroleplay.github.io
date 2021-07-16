<?php
// FROM HASH: 1c9aef90edcab0994915ce8a42f7ff4d
return array('macros' => array('xb_search_macro' => function($__templater, array $__arguments, array $__vars)
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

	<div class="xb-searchWrapper">
		<div class="xb-search--field">
			' . $__templater->formTextBox(array(
			'name' => 'keywords',
			'placeholder' => 'Search' . $__vars['xf']['language']['ellipsis'],
			'aria-label' => 'Search',
			'form' => 'xbSearch',
			'data-menu-autofocus' => 'true',
		)) . '
		</div>
		<div class="xb-search--submit">
			<button type="submit" form="xbSearch">
				' . $__templater->fontAwesome('fa-search', array(
			'data-xf-init' => 'tooltip',
			'title' => 'Search',
		)) . '
			</button>
		</div>
		<div class="xb-search--advance">
			' . $__templater->fontAwesome('fa-cog', array(
			'data-xf-click' => 'menu',
			'aria-label' => 'Search',
			'aria-expanded' => 'false',
			'data-xf-init' => 'tooltip',
			'title' => 'More options',
			'aria-haspopup' => 'true',
		)) . '
			<div class="menu menu--structural" data-menu="menu" aria-hidden="true">
				<div class="menu-content">
					<form action="' . $__templater->func('link', array('search/search', ), true) . '" id="xbSearch" class="xb-search" method="post" data-no-auto-focus="true">
					';
		if ($__vars['searchConstraints']) {
			$__finalCompiled .= '
					<div class="menu-row">
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
		}
		$__finalCompiled .= '
					
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
							<span class="inputGroup-text">' . 'By' . $__vars['xf']['language']['label_separator'] . '</span>
							<input class="input" name="c[users]" data-xf-init="auto-complete" placeholder="' . 'Member' . '" />
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
			'rel' => 'nofollow',
		), '', array(
		)) . '
						</span>
					</div>

					' . $__templater->func('csrf_input') . '
					</form>
				</div>
				
			</div>
				
		</div>
	</div>

';
	}
	$__finalCompiled .= '
';
	return $__finalCompiled;
},), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';

	return $__finalCompiled;
});