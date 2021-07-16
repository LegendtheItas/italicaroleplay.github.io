<?php
// FROM HASH: aaa7118de39527865966b257f2217cdf
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= $__templater->includeTemplate('xb_forums.less', $__vars) . '
' . $__templater->includeTemplate('xb_header.less', $__vars) . '
' . $__templater->includeTemplate('xb_message.less', $__vars) . '
' . $__templater->includeTemplate('xb_sidebar.less', $__vars) . '
' . $__templater->includeTemplate('xb_footer.less', $__vars) . '
';
	if ($__templater->func('property', array('xbForumStyle', ), false) == 'canvas') {
		$__finalCompiled .= '
' . $__templater->includeTemplate('xb_canvas.less', $__vars) . '
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbCustomFont', ), false) == 'opensans') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Open Sans\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'lato') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Lato\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'titilliumweb') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Titillium Web\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'nunito') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Nunito\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'montserrat') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Montserrat\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'roboto') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Roboto\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'sourcesanspro') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Source Sans Pro\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'comicsans') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Comic Sans MS\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'arial') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Arial\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'verdana') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Verdana\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'mplusrounded') {
		$__finalCompiled .= '
@xb-userInterface-font: \'M PLUS Rounded 1c\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'raleway') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Raleway\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'poppins') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Poppins\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else if ($__templater->func('property', array('xbCustomFont', ), false) == 'ubuntu') {
		$__finalCompiled .= '
@xb-userInterface-font: \'Ubuntu\', \'Helvetica Neue\', Helvetica, Roboto, Oxygen, Ubuntu, Cantarell, \'Fira Sans\', \'Droid Sans\', sans-serif;
';
	} else {
		$__finalCompiled .= '
@xb-userInterface-font: @xf-fontFamilyUi;
';
	}
	$__finalCompiled .= '

html
{
	font-family: @xb-userInterface-font;
}

.blockMessage.blockMessage
{
	&&--highlight
	{
		background-color: @xf-xbHighlightedBg;
		color: @xf-xbHighlightedColor;
		border-color: @xf-xbHighlightedFeatureColor;
		&:before { color: @xf-xbHighlightedFeatureColor; }
	}
	&&--important
	{
		background-color: @xf-xbImportantBg;
		color: @xf-xbImportantColor;
		border-color: @xf-xbImportantFeatureColor;
		&:before { color: @xf-xbImportantFeatureColor; }
	}
	&&--success
	{
		border-color: @xf-successFeatureColor;
	}
	&&--warning
	{
		border-color: @xf-warningFeatureColor;
	}
	&&--error
	{
		border-color: @xf-errorFeatureColor;
	}
}
';
	if ($__templater->func('property', array('styleType', ), false) == 'dark') {
		$__finalCompiled .= '
.XenBase :not(.block-header) .button, .XenBase :not(.block-header) a.button
{
	&.button--link
	{
		background-color: @xf-buttonPrimary--background-color;
		color: @xf-buttonPrimary--color;
		> * { color: @xf-buttonPrimary--color; }
		&:hover
		{
			.xf-xbButtonHover();
		}
	}
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbSearchLocation', ), false) == 'header') {
		$__finalCompiled .= '
.xb-searchWrapper
{
    display: flex;
    flex-direction: row;
	align-items: center;
    .xf-input();
	padding: 0;
	.xb-search--field input
	{
		border-width: 0;
	}
	.xb-search--submit
	{
		border-right: 1px solid xf-intensify(@xf-input--border-left-color, 4%);
		border-left: 1px solid xf-intensify(@xf-input--border-left-color, 4%);
		button
		{
			padding: 0;
			box-shadow: none;
			height: auto;
			line-height: 1;
			border-width: 0;
			background: none;
		}
	}
	.xb-search--submit, .xb-search--advance
	{
		flex: 1;
		position: relative;
		i
		{
			padding: @xf-paddingMedium 10px;
			line-height: @xf-lineHeightDefault;
			background-color: xf-intensify(@xf-input--background-color, 4%);
			color: @xf-input--color;
			cursor: pointer;
		}
		&:hover .xb-menu--search
		{
			display: block;
		}
	}

}
.xb-search 	.menu-footer-controls > *
{
	vertical-align: top;
}
.p-navgroup.p-discovery
{
	display: none;
}
@media (max-width: @xf-responsiveWide)
{
	.p-navgroup.p-discovery
	{
		display: block;
	}
	.xb-searchWrapper
	{
		display: none;
	}
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbWelcomeNotice', ), false) AND (!$__vars['xf']['visitor']['user_id'])) {
		$__finalCompiled .= '
.xb-welcome-notice
{
    max-width: @xf-pageWidthMax;
    padding: 0 @xf-pageEdgeSpacer;
    margin: 0 auto;
	margin-top: ((@xf-elementSpacer) / 2);
	margin-bottom: ((@xf-elementSpacer) / 2);
	.ForumStyleClassic &
	{
		padding: 0;	
		';
		if ($__templater->func('property', array('xbWelcomeLocation', ), false) == 'belownav') {
			$__finalCompiled .= '
		margin-bottom: 0;
		';
		}
		$__finalCompiled .= '
	}
	.p-body-inner &
	{
		margin: 0 0 ((@xf-elementSpacer) / 2) 0;
		padding: 0;
	}
	.xb-welcome-notice--inner
	{
		.xf-xbWelcomeNoticeStyle();
		h3, h4
		{
			margin: 0 auto 10px;
		}
		a:not(.button)
		{
			color:  @xf-xbWelcomeNoticeStyle--color;
			text-decoration: underline
		}
	}
}
';
	}
	$__finalCompiled .= '

.p-breadcrumbs--parent
{
    display: flex;
	align-items: center;
	margin-bottom: @xf-paddingLargest;
	&.p-breadcrumbs--bottom { margin-top: @xf-paddingLargest; margin-bottom: 0; }
	.p-breadcrumbs
	{
		flex: 1 1 auto;
		margin-bottom: 0;
		&.p-breadcrumbs--bottom
		{
		margin-top: @xf-elementSpacer;
		margin-bottom: 0;
		}
	}
	.shareButtons { margin-left: 5px; align-self: center; }
}
.p-breadcrumbs
{

	.xf-xbBreadcrumb();
	a { color: @xf-xbBreadcrumb--color; }
}
.p-breadcrumbs .tabs-extra
{
	float: right;
}
.p-breadcrumbs .tabs-extra:after
{
	display: none;
}
@media (max-width: @xf-responsiveEdgeSpacerRemoval)
{
	.p-breadcrumbs
	{
		margin-right: -@xf-pageEdgeSpacer;
		margin-left: -@xf-pageEdgeSpacer;
		border-left-width: 0px;
		border-right-width: 0px;
	}
}
@media (max-width: @xf-responsiveNarrow)
{
	.XenBase .block .block-outer-main
	{
		.pageNavWrapper--mixed, .pageNavWrapper--full, .pageNavWrapper--simple 
		{
			display: block !important;
			max-width: 300px;
   			margin: 0 auto;
		}
		.pageNavWrapper--full
		{
			.pageNav 
			{
				display: none;
			}
			.pageNavSimple
			{
				display: block;
			}
		}
	}
}

';
	if (($__templater->func('property', array('xbAlternatePageWidth', ), false) != null) AND ($__templater->func('property', array('xbForumStyle', ), false) != 'boxed')) {
		$__finalCompiled .= '
';
		if (!$__templater->func('in_array', array($__templater->func('property', array('xbStretchNav', ), false), array('stretchprimary', 'stretchboth', ), ), false)) {
			$__finalCompiled .= '
.XenBase .p-navSticky--primary
{
	max-width: 100%;
}
';
		}
		$__finalCompiled .= '
@media (min-width: (@xf-responsiveWide + 1))
{
';
		if ($__templater->func('in_array', array($__templater->func('property', array('xbStretchNav', ), false), array('stretchprimary', 'stretchboth', ), ), false)) {
			$__finalCompiled .= '
.p-nav-inner,
';
		} else {
			$__finalCompiled .= '
.p-pageWrapper .p-nav,
';
		}
		$__finalCompiled .= '
';
		if ($__templater->func('in_array', array($__templater->func('property', array('xbStretchNav', ), false), array('stretchsub', 'stretchboth', ), ), false)) {
			$__finalCompiled .= '
.p-sectionLinks-inner,
';
		} else {
			$__finalCompiled .= '
.p-pageWrapper .p-sectionLinks,
';
		}
		$__finalCompiled .= '
.p-staffBar-inner,
.p-header-inner,
.p-body-inner,
.p-topbar .p-topbar-inner,
';
		if ($__templater->func('property', array('xbStretchFooter', ), false)) {
			$__finalCompiled .= '
.p-footer-inner,
';
		}
		$__finalCompiled .= '
';
		if (!$__templater->func('property', array('xbStretchFooter', ), false)) {
			$__finalCompiled .= '
.p-footer--container,
';
		}
		$__finalCompiled .= '
.xb-welcome-fluid,
{
	.m-transition();
	.xb-toggle-default &
	{
		max-width: @xf-pageWidthMax;
	}
	max-width: @xf-xbAlternatePageWidth;
}
.p-footer--container
{
	margin-right: auto;
	margin-left: auto;
}
}
';
	}
	$__finalCompiled .= '


.block-container .structItem.structItem--note
{
	color: @xf-contentHighlightBase--color;
}
.block-filterBar a
{
	color: @xf-blockFilterBar--color;
}

.XenBase .button
{
	&.button--scroll
	{
		.xf-xbButtonScroll();
	}
	&.button--icon--cancel .button-text:before
	{
		vertical-align: baseline;
	}
	&:hover { .xf-xbButtonHover(); }
}

.p-body-pageContent .block
{
	.block-minorHeader
	{
		padding: @xf-blockPaddingV @xf-blockPaddingH;
		margin: 0;
		font-weight: @xf-fontWeightNormal;
		text-decoration: none;
		.xf-blockHeader();
		.m-clearFix();
		.m-hiddenLinks();
	}
}

';
	if (($__templater->func('property', array('xbBackstretchSelector', ), false) == 'default') AND $__templater->func('property', array('xbEnableBackstretch', ), false)) {
		$__finalCompiled .= '
.XenBase .p-pageWrapper
{
	background: none no-repeat 0 0 transparent;
}
';
	}
	$__finalCompiled .= '

.xb-page-wrapper
{
    position: relative;
    display: flex;
    flex-direction: column;
	flex-grow: 1;
    .xb-content-wrapper
    {
        flex-grow: 1;
    }
}
.XenBase label.iconic
{
	&:hover > input + i
	{
		color: xf-intensify(@xf-xbCheckboxInputColor, 8%);
	}
	i
	{
		color: @xf-xbCheckboxInputColor;
	}
}
@xf-xbCustomFontTargets
{
	.xf-xbCustomFontCSS();
}
.p-body-inner
{
	.xf-xbBodyInner();
}
.block-body
{
	.xf-xbBlockBody();
}

.XenBase .inlineModButton-count
{
	border-width: 0;
}

.node-newIndicator
{
	.xf-xbNewIndicatorStyle();
}
';
	if ($__templater->func('property', array('xbDiscussionAltBg', ), false)) {
		$__finalCompiled .= '
.structItemContainer .structItemContainer-group' . (($__templater->func('property', array('xbSeparateThreads', ), false) == 'text') ? ':not(.structItemContainer-group--sticky)' : '') . ' .structItem:nth-child(even)
{
	background-color: @xf-contentAltBg;
}
';
	}
	$__finalCompiled .= '

.structItemContainer .structItem
{
	.m-transition();
	&:hover
	{
			.xf-xbDiscussionHover();
	}
}
.block-container .structItemContainer-group
{
	.is-locked
	{
		.xf-xbThreadListLocked();
	}	
	.is-sticky
	{
		.xf-xbThreadListSticky();
	}
	.structItem-title a
	{
		.xf-xbThreadListTitle();
	}
}
.pika-prev, .pika-next
{
	color: @xf-textColor;
}
.tabs--editor .tabs-tab
{
	color: @xf-textColorDimmed;
}
.button
{
	background-color: @xf-buttonDefault--background-color;
	color: @xf-buttonDefault--color;
}
.XenBase .offCanvasMenu--nav
{
	.offCanvasMenu-content
	{
		.xf-xbOffCanvas();
	}
}

';
	if ($__templater->func('property', array('xbSeparateThreads', ), false) == 'text') {
		$__finalCompiled .= '
@_structItem-cellPaddingH: ((@xf-paddingMedium) + (@xf-paddingLarge)) / 2; // average
@_structItem-cellPaddingV: @xf-paddingLarge;
.structItemContainer-group.structItemContainer-group--sticky
{
	&:before, &:after
	{
		display: block;
		padding: @_structItem-cellPaddingV @_structItem-cellPaddingH;
		.xf-xbStickyDividerText();
	}
	&:before
	{
		content: "' . 'Sticky' . ' ' . 'Threads' . '";
	}
	&:after
	{
		content: "' . 'Threads' . '";
	}
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbSeparateThreads', ), false) == 'notext') {
		$__finalCompiled .= '
.structItemContainer-group.structItemContainer-group--sticky
{
	&:after
	{
		.xf-xbStickyDivider();
		display: block;
		content: "";
	}
}
';
	}
	$__finalCompiled .= '

a.shareButtons-button
{
	border-radius: ';
	if ($__templater->func('property', array('xbShareIconStyle', ), false) == 'circle') {
		$__finalCompiled .= '100%';
	} else {
		$__finalCompiled .= '@xf-borderRadiusSmall';
	}
	$__finalCompiled .= ';
	&.shareButtons-button--youtube
	{
		&:hover { background-color: #ff0000; }
		> i:before { .m-faContent(@fa-var-youtube, 1.29em); }
	}
	&.shareButtons-button--linkedin
	{
		&:hover { background-color: #0077b5; }
		> i:before { .m-faContent(@fa-var-linkedin-in, 1em); }
	}
	&.shareButtons-button--vimeo
	{
		&:hover { background-color: #1ab7ea; }
		> i:before { .m-faContent(@fa-var-vimeo-v, 1em); }
	}
	&.shareButtons-button--steam
	{
		&:hover { background-color: #00adee; }
		> i:before { .m-faContent(@fa-var-steam, 1em); }
	}
	&.shareButtons-button--twitch
	{
		&:hover { background-color: #6441a5; }
		> i:before { .m-faContent(@fa-var-twitch, 1em); }
	}
	&.shareButtons-button--vk
	{
		&:hover { background-color: #45668e; }
		> i:before { .m-faContent(@fa-var-vk, 1em); }
	}
	&.shareButtons-button--instagram
	{
		&:hover { background-color: #833ab4; }
		> i:before { .m-faContent(@fa-var-instagram, 1em); }
	}
	&.shareButtons-button--github
	{
		&:hover { background-color: #4078c0; }
		> i:before { .m-faContent(@fa-var-github, 1em); }
	}
	&.shareButtons-button--discord
	{
		&:hover { background-color: #7289DA; }
		> i:before { .m-faContent(@fa-var-discord, 1em); }
	}
	&.shareButtons-button--rss
	{
		&:hover { background-color: #f26522; }
		> i:before { .m-faContent(@fa-var-rss, 1em); }
	}
}
';
	if (($__templater->func('property', array('xbShareIconStyle', ), false) == 'circle') OR ($__templater->func('property', array('xbShareIconStyle', ), false) == 'blocked')) {
		$__finalCompiled .= '
a.shareButtons-button
{
	color: #FFF;
	margin-bottom: 5px;
	&.shareButtons-button--facebook
	{
		background-color: #3B5998;
		&:hover { background-color: #2d4373; }
	}
	&.shareButtons-button--twitter
	{
		background-color: #1DA1F3;
		&:hover { background-color: #2795e9; }
	}
	&.shareButtons-button--youtube
	{
		background-color: #ff0000;
		&:hover { background-color: #e80000; }
	}
	&.shareButtons-button--gplus
	{
		background-color: #dd4b39;
		&:hover { background-color: #c23321; }
	}

	&.shareButtons-button--pinterest
	{
		background-color: #bd081c;
		&:hover { background-color: #9f191f; }
	}

	&.shareButtons-button--tumblr
	{
		background-color: #35465c;
		&:hover { background-color: #1c2d3f; }
	}

	&.shareButtons-button--reddit
	{
		background-color: #FF4500;
		&:hover { background-color: #ea3f00; }
	}

	&.shareButtons-button--whatsApp
	{
		background-color: #25D366;
		&:hover { background-color: #21c35d; }
	}
	&.shareButtons-button--email
	{
		background-color: #1289ff;
		&:hover { background-color: #137de6; }
	}
	&.shareButtons-button--link
	{
		background-color: #787878;
		&:hover { background-color: #656565; }
	}
	&.shareButtons-button--linkedin
	{
		background-color: #0077b5;
		&:hover { background-color: #00a0dc; }
	}
	&.shareButtons-button--vimeo
	{
		background-color: #1ab7ea;
		&:hover { background-color: #162221; }
	}
	&.shareButtons-button--steam
	{
		background-color: #00adee;
		&:hover { background-color: #000000; }
	}
	&.shareButtons-button--twitch
	{
		background-color: #6441a5;
		&:hover { background-color: #b9a3e3; }
	}
	&.shareButtons-button--vk
	{
		background-color: #45668e;
		&:hover { background-color: #3b597d; }
	}
	&.shareButtons-button--instagram
	{
		background-color: #405de6;
		&:hover { background-color: #f56040; }
	}
	&.shareButtons-button--github
	{
		background-color: #4078c0;
		&:hover { background-color: #6cc644; }
	}
	&.shareButtons-button--rss
	{
		background-color: #f26522;
		&:hover { background-color: #de5819; }
	}

}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbBanners', ), false)) {
		$__finalCompiled .= '

	.userBanner
	{
		.xf-xbDefaultBannerBase();
		&.userBanner--staff	{ .xf-xbBannerStaff(); }
		&.userBanner--primary { .xf-xbBannerPrimary(); }
		&.userBanner--accent { .xf-xbBannerAccent(); }
		&.userBanner--red { .xf-xbBannerRed(); }
		&.userBanner--green { .xf-xbBannerGreen(); }
		&.userBanner--olive { .xf-xbBannerOlive(); }
		&.userBanner--lightGreen { .xf-xbBannerLightGreen(); }
		&.userBanner--blue { .xf-xbBannerBlue(); }
		&.userBanner--royalBlue { .xf-xbBannerRoyalBlue(); }
		&.userBanner--skyBlue { .xf-xbBannerSkyBlue(); }
		&.userBanner--gray { .xf-xbBannerGray(); }
		&.userBanner--silver { .xf-xbBannerSilver(); }
		&.userBanner--yellow { .xf-xbBannerYellow(); }
		&.userBanner--orange { .xf-xbBannerOrange(); }
	}

';
	}
	$__finalCompiled .= '
.notices
{
	.notice
	{
		&.notice--primary
		{
			.xf-xbNotices();
			a
			{
				.xf-xbNoticeLink();
			}
		}
		&.notice--cookie
		{
			.notice-content .button--notice
			{
				color: @xf-buttonDefault--color;
				text-decoration: none;
			}
		}
	}
	&.notices--floating
	{
		.notice.notice--primary
		{
			.xf-xbFloatingNotices();
			a { text-decoration: underline; color: @xf-xbFloatingNotices--color; }
		}
	}
}
';
	if ($__templater->func('property', array('xbPrefixes', ), false)) {
		$__finalCompiled .= '
.label
{
	.xf-xbDefaultPrefixBase();
	&.label--primary { .xf-xbPrefixPrimary(); }
	&.label--accent { .xf-xbPrefixAccent(); }
	&.label--red { .xf-xbPrefixRed(); }
	&.label--green { .xf-xbPrefixGreen(); }
	&.label--olive { .xf-xbPrefixOlive(); }
	&.label--lightGreen	{ .xf-xbPrefixLightGreen(); }
	&.label--blue { .xf-xbPrefixBlue(); }
	&.label--royalBlue { .xf-xbPrefixRoyalBlue(); }
	&.label--skyBlue { .xf-xbPrefixSkyBlue(); }
	&.label--gray { .xf-xbPrefixGray(); }
	&.label--silver { .xf-xbPrefixSilver(); }
	&.label--yellow { .xf-xbPrefixYellow(); }
	&.label--orange	{ .xf-xbPrefixOrange(); }
	&.label--error	{ .xf-xbPrefixError(); }
}
a.labelLink:hover
{
	.label
	{
		&.label--primary { .xf-xbPrefixPrimary(); }
		&.label--accent { .xf-xbPrefixAccent(); }
		&.label--red { .xf-xbPrefixRed(); }
		&.label--green { .xf-xbPrefixGreen(); }
		&.label--olive { .xf-xbPrefixOlive(); }
		&.label--lightGreen	{ .xf-xbPrefixLightGreen(); }
		&.label--blue { .xf-xbPrefixBlue(); }
		&.label--royalBlue { .xf-xbPrefixRoyalBlue(); }
		&.label--skyBlue { .xf-xbPrefixSkyBlue(); }
		&.label--gray { .xf-xbPrefixGray(); }
		&.label--silver { .xf-xbPrefixSilver(); }
		&.label--yellow { .xf-xbPrefixYellow(); }
		&.label--orange	{ .xf-xbPrefixOrange(); }
		&.label--error	{ .xf-xbPrefixError(); }
		box-shadow: inset 0px 0px 0px 2px rgba(0,0,0,0.10) !important;
	}
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbForumStyle', ), false) == 'classic') {
		$__finalCompiled .= '
.xb-page-wrapper .xb-content-wrapper {
    flex-grow: 1;
    flex-direction: column;
    display: flex;
	.navigation-helper, .p-navSticky, .p-nav--wrapper, .p-sectionLinks {
		width: 100%;
	}
}
.xb-content-wrapper .p-body
{

}
.p-contentWrapper
{
	max-width: @xf-pageWidthMax;
	margin: 0 auto;
	position: relative;
	display: flex;
	flex-direction: column;
	min-height: 100vh;
}
.p-body-inner
{
	.xf-xbContentContainer();
}
@media (max-width: @xf-responsiveEdgeSpacerRemoval)
{
	.p-body-inner { padding: @xf-pageEdgeSpacer; }
}
';
	} else if ($__templater->func('property', array('xbForumStyle', ), false) == 'boxed') {
		$__finalCompiled .= '
.xb-page-wrapper
{
	.xf-xbBoxedContainer();
	';
		if ($__templater->func('property', array('xbAlternatePageWidth', ), false) != null) {
			$__finalCompiled .= '
	.xb-toggle-default &
	{
		max-width: @xf-pageWidthMax;
		width: 100%;
	}
	max-width: @xf-xbAlternatePageWidth;
	width: 100%;
	';
		}
		$__finalCompiled .= '
	.p-nav, .p-body-inner, .p-footer--container, .p-nav-inner, .p-sectionLinks-inner, .p-navSticky--primary, .p-sectionLinks, .p-footer-inner
	{
		padding-right: 0;
		padding-left: 0;
		max-width: 100%;
	}
	.p-header-inner { max-width: 100%; }
}
@media (max-width: @xf-responsiveWide)
{
	.xb-page-wrapper { margin: 0; border-width: 0; padding: 0; }
	.XenBase.ForumStyleBoxed .p-body-inner { padding-right: @xf-pageEdgeSpacer; padding-left: @xf-pageEdgeSpacer; }
}
';
	}
	$__finalCompiled .= '
.p-body-sidebar .block .block-container
{
	.xf-xbSidebarBlockBorder();
}

';
	if ($__templater->func('property', array('xbButtonStyle', ), false) == 'rounded') {
		$__finalCompiled .= '
.button.button--cta, a.button.button--cta, .button.button--primary, a.button.button--primary, a.button, .button--primary.button, .button
{
	border-radius: 100px;
}
';
	} else if (($__templater->func('property', array('xbButtonStyle', ), false) == 'wireframe') OR ($__templater->func('property', array('xbButtonStyle', ), false) == 'roundedwireframe')) {
		$__finalCompiled .= '
.button.button--cta, a.button.button--cta
{
	.m-buttonColorVariation(@xf-xbMainContentBackground, @xf-buttonCta--background-color);
	border-color: @xf-buttonCta--background-color;
	&:hover
	{
		background-color: @xf-buttonCta--background-color;
		color: @xf-xbMainContentBackground;
	}
}
.button, a.button, .button--primary.button
{
	background-color: @xf-xbMainContentBackground;
	color: @xf-buttonPrimary--background-color;
	border-color: @xf-buttonPrimary--background-color;
	&:hover
	{
		background-color: @xf-buttonPrimary--background-color;
		color: @xf-xbMainContentBackground;
	}
}
';
		if ($__templater->func('property', array('xbButtonStyle', ), false) == 'roundedwireframe') {
			$__finalCompiled .= '
.button.button--cta, a.button.button--cta, .button.button--primary, a.button.button--primary, a.button, .button--primary.button, .button
{
	border-radius: 100px;
}
';
		}
		$__finalCompiled .= '
';
	}
	$__finalCompiled .= '

.threadListItemIcon-replies
{
	.structItem-cell.structItem-cell--meta
	{
		display: none;
	}
	.structItem-cell--latest:before { display: none; }
}
.structItem-cell
{
	&.structItem-cell--iconIcon, &.structItem-cell--iconReplies
	{
		width: 54px;
		text-align: center;
		position: relative;
		vertical-align: middle;
		padding-right: 0;
		span
		{
			font-size: @xf-fontSizeSmall;
			display: block;
			cursor: default;
		}
		.fa-asterisk
		{
			position: absolute;
			top: 10px;
			left: 10px;
			font-size: 8px;
		}
		i
		{
			.xf-xbDiscussionIconCSS();
			color: @xf-discussionIconReadColor;
		}
		.is-unread & i
		{
			color: @xf-discussionIconUnreadColor;
		}
	}
}
@media (max-width: @xf-responsiveWide)
{
	.p-body-content { margin-bottom: @xf-sidebarSpacer; }
	.pageWidthToggle { display: none; }
}
@media (max-width: @xf-responsiveMedium)
{
	.structItem-cell
	{
		&.structItem-cell--iconIcon, &.structItem-cell--iconReplies
		{
			padding-right: 10px;
		}
	}
	.p-navgroup-link--switch
	{
		display: none;
	}
}
' . $__templater->includeTemplate('xb_style.less', $__vars) . '
' . $__templater->includeTemplate('xb_custom_style.less', $__vars);
	return $__finalCompiled;
});