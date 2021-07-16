<?php
// FROM HASH: 7c2b68f0a78e5c0b6413f4d7c2aaac9e
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	if ($__templater->func('property', array('styleBackground', ), false) !== 'usemyown') {
		$__finalCompiled .= '
.p-pageWrapper
{
	background: url(styles/evolve/xenforo/sources/backgrounds/' . $__templater->func('property', array('styleBackground', ), true) . '.png) no-repeat center center @xf-pageBg;
	background-size: cover;
	background-attachment: fixed;
}
';
	}
	$__finalCompiled .= '

.p-nav.xb-nav-logo .p-nav-smallLogo
{
	padding-left: 10px;
}
.message-cell.message-cell--main
{
	background: @xf-paletteColor1;
	border: @xf-borderSize solid @xf-borderColor;
}
.js-quickReply .block-container
{
	background: transparent;
	border-width: 0;
	box-shadow: none;
}
.blockMessage.blockMessage--none
{
	box-shadow: none;
}
.p-body-content .block--category .collapseTrigger:before
{
	content: "\\f107";
	transform: none;
	margin-right: 0;
	font-size: @xf-blockHeader--font-size;
}
.xb-welcome-notice
{
	max-width: 100%;
	margin-top: 0;
	padding: 0;
	.xb-welcome-notice--inner
	{
		padding: 0;
		box-shadow: none;
	}
	.xb-welcome-notice--mask
	{
		background-color: rgba(0, 0, 0, 0.6);
		padding: @xf-xbWelcomeNoticeStyle--padding-top @xf-xbWelcomeNoticeStyle--padding-right @xf-xbWelcomeNoticeStyle--padding-bottom @xf-xbWelcomeNoticeStyle--padding-left;
		padding: @xf-xbWelcomeNoticeStyle--padding;
		@xf-xbWelcomeNoticeStyle--extra
	}
}
.p-body-content .block--category .collapseTrigger.is-active:before
{
	content: "\\f106";
}
.structItemContainer .structItem
{
	box-shadow: inset 0px 1px 0px 0px xf-diminish(@xf-contentBg, 5%);
	border: 1px solid @xf-borderColor;
	.structItem-cell.structItem-cell--icon:not(.structItem-cell--iconEnd)
	{
		padding-left: @xf-paddingLargest;
		&:before
		{
			content: "";
			border-left: @xf-nodeIconReadColor 5px solid;
			height: 100%;
			position: absolute;
			left: 0;
			top: 0;
		}
	}
}
.structItemContainer .structItem.is-unread
{
	.structItem-cell.structItem-cell--icon:not(.structItem-cell--iconEnd):before
	{
		border-left-color: @xf-nodeIconUnreadColor;
	}
}
.block--category .block-container .node
{
	position: relative;
	.node-body
	{
		padding-left: @xf-paddingLargest;
	}
	&:before
	{
		content: "";
		border-left: @xf-nodeIconReadColor 5px solid;
		height: 100%;
		position: absolute;
	}
	.node-icon
	{
		display: none;
	}
	
}
.block--category .block-container .node.node--unread:before
{
	border-left-color: @xf-nodeIconUnreadColor;
}

.p-body-sidebar .block-body .contentRow
{
    border-top: 1px solid @xf-borderColor;
	box-shadow: inset 0px 1px 0px 0px xf-intensify(@xf-contentBg, 4%);
    padding: @xf-paddingSmall 0;
}
.p-body-sidebar .block-body .block-row:first-child .contentRow
{
	border-top-width: 0;
	box-shadow: none;
}
[data-widget-key="forum_overview_forum_statistics"] dl
{
    border-top: 1px solid @xf-borderColor;
	box-shadow: inset 0px 1px 0px 0px xf-intensify(@xf-contentBg, 4%);
    padding: @xf-paddingSmall 0;
	&:first-child { border-top-width: 0; box-shadow: none; }
}
.XenBase .shareButtons--iconic .shareButtons-button
{
	background-color:  xf-intensify(@xf-contentBg, 4%);
	color: fade(@xf-textColor, 80%);
	padding: @xf-paddingSmall;
}
.p-footer-social.p-footer-socialTop
{
	border-bottom-color: xf-intensify(@xf-pageBg, 5%);
}
.p-footer-social.p-footer-socialBottom
{
	border-top-color: xf-intensify(@xf-pageBg, 5%);
}
.node .node-stats
{
	opacity: 0;
	width: 140px;
	.m-transition(opacity);
}
.node:hover .node-stats
{
	opacity: 1;
}
@button-hover: xf-intensify(@xf-buttonDefault--background-color, 4%);
.p-body-header a.button
{
	position: relative;
	padding: 10px 0 !important;
	background: none !important;
	border-width: 0;
	.button-text { background: @xf-buttonDefault--background-color; padding: 5px 20px; display: block; }
	&:before, &:after
	{
		left: 0px;
		content: "";
		position: absolute;
		width: 100%;
		height: 0;
	}
	&:before
	{
	top: 0px;
    border-bottom: 10px solid @xf-buttonDefault--background-color;
	border-right: 10px solid @xf-buttonDefault--background-color;
	border-left: 10px solid transparent !important;
	box-sizing: border-box;
	}
	&:after
	{
	bottom: 0px;
    border-top: 10px solid @xf-buttonDefault--background-color;
	border-left: 10px solid @xf-buttonDefault--background-color;
	border-right: 10px solid transparent !important;
	box-sizing: border-box;
	}
	&:hover
	{
		.button-text { background:  @button-hover; }
		&:before { border-bottom-color: @button-hover; border-right-color: @button-hover; }
		&:after { border-top-color: @button-hover; border-left-color: @button-hover; }
	}
}
';
	if ($__templater->func('property', array('xbDisableSubnav', ), false)) {
		$__finalCompiled .= '
.p-nav
{
	box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
}
';
	}
	$__finalCompiled .= '
@media (max-width: @xf-publicNavCollapseWidth)
{
	.XenBase .p-navgroup-link
	{
		padding: 10px 12px;
	}
	.p-nav-smallLogo a { font-size: 20px; }
}
@media (max-width: @xf-responsiveMedium)
{
	.message:not(.message--forceColumns) .message-cell.message-cell--user { background-color: @xf-contentAltBg; }
	.XenBase
	{
		.node-main, .structItem-cell
		{
			padding-top: @xf-paddingMedium; 
			padding-bottom: @xf-paddingMedium;
		}
	}
}';
	return $__finalCompiled;
});