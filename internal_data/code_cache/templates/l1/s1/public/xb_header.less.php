<?php
// FROM HASH: a90e68884919a8f4f86d48bdce90de25
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.p-navSticky.is-sticky .p-nav
{
	border-radius: 0;
}
.xb-nav-logo .p-nav-smallLogo
{
	display: block;
	white-space: nowrap;
	max-width: none;
}
.menu-row.menu-row--highlighted
{
    border-left: 5px solid @xf-contentAccentBg;
}
.p-staffBar a .badgeContainer--visible[data-badge="0"],
.badgeContainer.badgeContainer--visible[data-badge="0"]:after,
.badgeContainer.badgeContainer--highlighted[data-badge="0"]:after {
        display: none;
}
.p-staffBar .badgeContainer:not(.badgeContainer--highlighted):after
{
	background-color: rgba(255, 255, 255, 0.25);
	color: @xf-publicStaffBar--color;
}

.p-header .p-header-content
{
	.xf-xbHeaderInner();
}
.p-nav-inner
{
	.xf-xbNavInner();
}
.p-sectionLinks-inner
{
	.xf-xbSubNavInner();
}
';
	if ($__templater->func('property', array('xbLogoPosition', ), false) == 'insidenav') {
		$__finalCompiled .= '
#header
{
	display: none;
}
.p-nav-inner .p-nav-list .p-nav-smallLogo
{
	display: inline-block;	
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('in_array', array($__templater->func('property', array('xbStretchNav', ), false), array('stretchprimary', 'stretchnone', ), ), false)) {
		$__finalCompiled .= '
.p-pageWrapper
{
	.p-sectionLinks-inner
	{
		padding: 0 20px;
		max-width: 100%;
	}
}
';
	}
	$__finalCompiled .= '
';
	if (($__templater->func('property', array('xbStretchNav', ), false) == 'stretchprimary') AND $__templater->func('in_array', array($__templater->func('property', array('publicNavSticky', ), false), array('primary', 'all', ), ), false)) {
		$__finalCompiled .= '
.p-pageWrapper
{
	.p-nav
	{
		max-width: 100%;
	}	
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('in_array', array($__templater->func('property', array('xbStretchNav', ), false), array('stretchsub', 'stretchnone', ), ), false)) {
		$__finalCompiled .= '
.p-pageWrapper
{
	.p-nav-inner
	{
		max-width: 100%;
	}
}
';
	}
	$__finalCompiled .= '

.p-header-logo--textlogo, .p-nav-smallLogo.textLogo
{
	.xf-xbTextLogoStyle();
}
.p-nav-smallLogo.textLogo
{
	padding: 0;
	max-width: none;
}
';
	if ($__templater->func('property', array('xbStretchNav', ), false) == 'stretchprimary') {
		$__finalCompiled .= '
.p-sectionLinks
{
	max-width: @xf-pageWidthMax;
	margin: 0 auto;
}
';
	} else if ($__templater->func('property', array('xbStretchNav', ), false) == 'stretchsub') {
		$__finalCompiled .= '
.p-nav
{
	max-width: @xf-pageWidthMax;
	margin: 0 auto;
	&.is-sticky
	{
		left: 0;
		right: 0;
	}
}
';
	} else if ($__templater->func('property', array('xbStretchNav', ), false) == 'stretchnone') {
		$__finalCompiled .= '
.p-navSticky.is-sticky
{
	box-shadow: none;
}
.p-navSticky--primary, .p-sectionLinks, .p-nav
{
	max-width: @xf-pageWidthMax;
	margin: 0 auto;
	left: 0;
	right: 0;
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbNavSelectedStyle', ), false) == 'bottomarrow') {
		$__finalCompiled .= '
.p-nav-list .p-navEl.is-selected
{
	background-color: transparent;
	color: @xf-publicNavTab--color;
}
.p-nav-list .p-navEl.is-selected .p-navEl-link
{
	position: relative;
	background-color: transparent;
}
.p-nav-list .p-navEl.is-selected .p-navEl-link:after {
    position: absolute;
    width: 0;
    height: 0;
    bottom: 0;
    left: 50%;
	content: "";
    margin-left: -10px;
    border: 10px solid transparent;
    border-top-width: 0;
    border-bottom-color: @xf-publicSubNav--background-color;
}
.p-navSticky.is-sticky .p-nav-list .p-navEl.is-selected .p-navEl-link:after
{
	margin-left: 0;
}
';
	} else if ($__templater->func('property', array('xbNavSelectedStyle', ), false) == 'bottomborder') {
		$__finalCompiled .= '
.p-nav-list .p-navEl.is-selected
{
	background-color: transparent;
	color: @xf-publicNavTab--color;
}
.p-nav-list .p-navEl.is-selected .p-navEl-link, .p-nav-list .p-navEl.is-selected .p-navEl-splitTrigger
{
	border-bottom: 5px solid @xf-publicSubNav--background-color;
	padding-bottom: (@xf-publicNavPaddingV - 5);
	opacity: 1;
}
';
	} else if ($__templater->func('property', array('xbNavSelectedStyle', ), false) == 'button') {
		$__finalCompiled .= '
.p-nav-list .p-navEl.is-selected
{
	background-color: transparent;
	padding: 4px 0px;
}
.p-nav-list .p-navEl.is-selected
{
	.p-navEl-link,  .p-navEl-splitTrigger
	{
		background-color: @xf-publicNavSelected--background-color;
		padding-bottom: (@xf-publicNavPaddingV - 4);
		padding-top: (@xf-publicNavPaddingV - 4);
		border-radius: @xf-borderRadiusSmall;
		&:hover
		{
			background-color: @xf-publicNavSelected--background-color;
			color: @xf-publicNavSelected--color;
		}
	}
}
.p-navSticky.is-sticky .p-nav-list .p-navEl.is-selected
{
	.p-navEl-link
	{
		border-top-right-radius: 0;
		border-bottom-right-radius: 0;
	}
	.p-navEl-splitTrigger
	{
		opacity: 0.95;
		border-top-left-radius: 0;
		border-bottom-left-radius: 0;
		&:before
		{
			display: none;
		}
	}
}
';
	} else {
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbDisableSubnav', ), false)) {
		$__finalCompiled .= '
.p-nav-list .p-navEl.is-selected
{
	.p-navEl-splitTrigger
	{
		display: inline;
		position: relative;
	}
	.p-navEl-link.p-navEl-link--splitMenu
	{
		padding-right: 5px;
	}
	&
	{
		&:hover,
		.p-navEl-link:hover,
		.p-navEl-splitTrigger:hover
		{
			.xf-publicNavTabHover();
		}
	}
	
	
}
';
	}
	$__finalCompiled .= '

.menu .p-quickSearch
{
	padding: @xf-paddingMedium;
}
.p-topbar
{
	.xf-xbTopBarStyle();
	.p-topbar-inner
	{
		max-width: @xf-pageWidthMax;
		padding: 0 @xf-pageEdgeSpacer;
		margin: 0 auto;
		.m-clearFix();
		display: flex;
		padding-left: 0;
		padding-right: 0;
		align-items: center;
	}
	ul
	{
	.m-listPlain();
	.m-clearFix();
		> li
		{
			display: inline-block;
			vertical-align: bottom;

			&:first-child
			{
				margin-left: 0;
			}
		}
	}
	.p-topbar-leftside
	{
		margin-right: auto;
		max-width: 100%;
		white-space: nowrap;
		flex-shrink: 0;
		margin-left: @xf-pageEdgeSpacer;

		.has-no-flexbox &
		{
			float: left;
		}
	}
	.p-topbar-rightside
	{
		margin-left: auto;
		margin-right: @xf-pageEdgeSpacer;
		text-align: right;
		max-width: 100%;

		.has-no-flexbox &
		{
			float: right;
		}
		a
		{
			padding: 10px 15px;
			display: inline-block;
			color: @xf-xbTopBarStyle--color;
		}
		.hScroller-scroll
		{
			
		}
		.hScroller-action
		{
			background-color: @xf-xbTopBarStyle--background-color;
		}
	}
	.p-nav-opposite a
	{
		color: @xf-xbTopBarStyle--color;	
	}
}
@media (max-width: @xf-responsiveMedium)
{
	.p-topbar
	{
		display: none;
	}
}
';
	if ($__templater->func('property', array('xbVisitorTabsLocation', ), false) == 'staff') {
		$__finalCompiled .= '
.p-staffBar-inner
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
	.hScroller-scroll.is-calculated
	{
		vertical-align: middle;
		margin-right: auto;
	}
	.p-navgroup-link
	{
		padding: 4px @xf-paddingMedium;
	}
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbVisitorTabsLocation', ), false) != 'default') {
		$__finalCompiled .= '
.p-nav .p-nav-opposite
{
	display: none;
}
@media (max-width: @xf-publicNavCollapseWidth)
{
	.p-nav-opposite
	{
		display: none;
	}
	.p-nav .p-nav-opposite
	{
		display: block;
	}
}
';
	}
	$__finalCompiled .= '
.p-nav-logo img
{
	display: block;
	max-height: @header-navHeight;
}
';
	if ($__templater->func('property', array('xbLogoType', ), false) == 'text') {
		$__finalCompiled .= '
@media (max-width: @xf-responsiveMedium)
{
	.p-nav-smallLogo a
	{
		font-size: 12px;
		color: @xf-publicNav--color;
		padding: 15px 10px;
		vertical-align: middle;
		display: block;
	}
	.p-nav--wrapper .p-nav.xb-nav-logo .p-nav-smallLogo
	{
		padding-left: 0;
	}
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbLogoResponsive', ), false)) {
		$__finalCompiled .= '
@media (max-width: @xf-publicNavCollapseWidth)
{
	.XenBase
	{
		.p-header { display: block; }
		.p-header-logo { max-width: none; }
		';
		if ($__templater->func('property', array('xbLogoPosition', ), false) != 'insidenav') {
			$__finalCompiled .= '
		.p-nav-smallLogo { display: none; }
		';
		}
		$__finalCompiled .= '
	}
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbMobileLogo', ), false)) {
		$__finalCompiled .= '
img.logo-mobile
{
	display: none;
}
@media (max-width: @xf-publicNavCollapseWidth)
{
		img.logo-mobile { display: block; }
		img.logo-desktop { display: none; }
}
';
	}
	$__finalCompiled .= '


.p-nav-list .p-nav-smallLogo
{
	display: block;
}
';
	if (($__templater->func('property', array('xbNavigationIcons', ), false) == 'above') OR ($__templater->func('property', array('xbNavigationIcons', ), false) == 'inline')) {
		$__finalCompiled .= '
.XenBase .p-pageWrapper
{
	a[data-nav-id="home"]:before { .m-faContent("\\f015"); }
	a[data-nav-id="forums"]:before { .m-faContent("\\f086"); }
	a[data-nav-id="members"]:before { .m-faContent("\\f0c0"); }
	a[data-nav-id="xfrm"]:before { .m-faContent("\\f013"); }
	a[data-nav-id="whatsNew"]:before { .m-faContent("\\f0e7"); }
	a[data-nav-id="EWRrio"]:before { .m-faContent("\\f1e8"); }
	a[data-nav-id="xfmg"]:before { .m-faContent("\\f03d"); }
	a[data-nav-id="snog_raffles_navtab"]:before { .m-faContent("\\f145"); }
	a[data-nav-id="th_donate"]:before { .m-faContent("\\f2b5"); }
	a[data-nav-id="EWRatendo"]:before { .m-faContent(@fa-var-calendar-alt); }
	a[data-nav-id="EWRcarta"]:before { .m-faContent(@fa-var-book); }
	a[data-nav-id="EWRdiscord"]:before { .m-faContent(@fa-var-discord); .m-faBase(\'Brands\'); }
	a[data-nav-id="EWRmedio"]:before { .m-faContent(@fa-var-video-plus); }
	a[data-nav-id="EWRporta"]:before { .m-faContent(@fa-var-home); }
	a[data-nav-id="EWRrio"]:before { .m-faContent(@fa-var-play-circle); }
	a[data-nav-id="EWRtorneo"]:before { .m-faContent(@fa-var-trophy); }
	a[data-nav-id="xa_ams"]:before { .m-faContent("\\f15c"); }
	a[data-nav-id="xa_ubs"]:before { .m-faContent("\\f303"); }
	a[data-nav-id="xa_showcase"]:before { .m-faContent("\\f00b"); }
	a[data-nav-id="xa_sportsbook"]:before { .m-faContent("\\f091"); }
	a[data-nav-id="xa_pickem"]:before { .m-faContent("\\f51e"); }
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbNavigationIcons', ), false) == 'above') {
		$__finalCompiled .= '
.p-nav-list .p-navEl
{
	display: flex;
	align-items: center;
}
.p-nav-list .p-navEl a.p-navEl-link
{
    position: relative;
}
.p-nav-list a.p-navEl-link:before
{
	.m-faBase();
	.m-faContent("\\f105");
    font-size: 20px;
    margin-left: auto;
    margin-right: auto;
    left: 0;
    display: block;
    text-align: center;
}
.p-nav-list .p-navEl-splitTrigger
{
    flex: 1;
}
a.offCanvasMenu-link:before
{
   .m-faBase();
	display: inline-block;
	width: (20em / 16);
	margin-right: 5px;
}
';
	} else if ($__templater->func('property', array('xbNavigationIcons', ), false) == 'inline') {
		$__finalCompiled .= '
a.p-navEl-link:before, a.offCanvasMenu-link:before
{
   .m-faBase();
	text-align: center;
	display: inline-block;
	width: (20em / 16);
	margin-right: 5px;
}
';
	}
	return $__finalCompiled;
});