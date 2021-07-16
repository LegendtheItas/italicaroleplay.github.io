<?php
// FROM HASH: 31cf4efc803971f8865944da2370b843
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.block--messages .block-container
{
	box-shadow: none;
}
.block--messages article.message
{
	.xf-xbMessage();
}
.message-cell .messageNotice
{
	background-color: @xf-contentAltBg;
	color: @xf-textColorMuted;
	a
	{
		text-decoration: underline;
		color: @xf-linkColor;
		&:hover { color: @xf-linkHoverColor; }
	}
}
.message-main .message-attribution
{
	padding-bottom: @xf-messagePadding;
}
.message .messageNotice:not(.messageNotice--highlighted) a, .message .messageNotice:not(.messageNotice--highlighted) a:hover
{
	color: contrast(@xf-contentHighlightBg);
}
.message-header .message-attribution
{
	.xf-xbMessageHeaderStyle();
	a { padding: 3px 7px; margin: -3px -7px; display: inline-block; }
	a:hover { color: @xf-xbMessageHeaderStyle--color; background-color: rgba(0, 0, 0, 0.09); text-decoration: none !important; }
	.bookmarkLink
	{
		color: @xf-xbMessageHeaderStyle--color !important;
	}
}
.XenBase .block--messages
{
	.message
	{
		.message-content a
		{
			.xf-xbMessageLink();
			&:hover
			{
				.xf-xbMessageLinkHover();
			}
		}
		.message-content .bbCodeBlock-title a, .message-content .bbCodeBlock-title a:hover
		{
			color: @xf-bbCodeBlockTitle--color;
		}
	}
}
.bookmarkLink
{
	&.bookmarkLink--highlightable.is-bookmarked
	{
		&:hover
		{
			color: @xf-linkHoverColor;
		}
	}
}


.message-footer .message-actionBar
{
	margin-top: @xf-messagePadding;
	.xf-xbMesssageActionBar();
	.actionBar-set
	{
		margin-top: 0;
	}
	.actionBar-set a
	{
		.xf-xbMesssageActionBarLinks();
		
		&:hover
		{
			.xf-xbMesssageActionBarLinksHover();
		}
	}
}

.actionBar-action
{
	&.actionBar-action--report:before { .m-faContent("@{fa-var-bell}\\20"); }
	&.actionBar-action--edit:before { .m-faContent("@{fa-var-pencil}\\20"); }
	&.actionBar-action--history:before { .m-faContent("@{fa-var-calendar}\\20"); }
	&.actionBar-action--delete:before { .m-faContent("@{fa-var-trash}\\20"); }
	&.actionBar-action--warn:before { .m-faContent("@{fa-var-warning}\\20"); }
	&.actionBar-action--ip:before { .m-faContent("@{fa-var-globe}\\20"); }
}

';
	if ($__templater->func('property', array('xbMessageHeader', ), false)) {
		$__finalCompiled .= '
.message .message-body
{
	margin-top: 0;
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbMessageLayout', ), false) == 'classic') {
		$__finalCompiled .= '
@media (min-width: (@xf-messageSingleColumnWidth + 1))
{
	.block--messages
	{
		.message-inner
		{
		.message-cell.message-cell--user
		{
			background-color: transparent;
			border-width: 0;
			section
			{
				.xf-messageUserBlock();
				padding: @xf-messagePadding;
			}
			.message-userArrow
			{
				border-right-color: @xf-messageUserBlock--border-color;
				transform: rotate(180deg);
				right: 1px;
				&:after
				{
					border-right-color: @xf-messageUserBlock--background-color;
				}
			}
		}
		}
		.js-quickReply .message-userArrow
		{
			display: none;
		}
	}
}
';
	}
	$__finalCompiled .= '


';
	if ($__templater->func('property', array('xbMessageLayout', ), false) == 'horizontal') {
		$__finalCompiled .= '
.block--messages
{
.message:not(.message--forceColumns):not(.message--simple)
{
	.message-inner
	{
		display: block;
	}

	.message-cell
	{
		display: block;
		.m-clearFix();

		&.message-cell--user
		{
			width: auto;
			border-right: none;
			border-bottom: @xf-messageUserBlock--border-width solid @xf-messageUserBlock--border-color;
		}

		&.message-cell--main
		{
			padding-left: @xf-messagePadding;
		}
	}
}
.message:not(.message--forceColumns)
{
	.message-userArrow
	{
		top: auto;
		right: auto;
		bottom: -1px;
		left: ((@avatar-s) / 2);

		border: none;
		.m-triangleUp(xf-default(@xf-messageUserBlock--border-color, transparent), @xf-messagePadding);

		&:after
		{
			top: auto;
			right: auto;
			left: -(@xf-messagePadding - 1px);
			bottom: -@xf-messagePadding;

			border: none;
			.m-triangleUp(@xf-contentBg, @xf-messagePadding - 1px);
		}
	}

	&.is-mod-selected
	{
		.message-userArrow:after
		{
			border-color: transparent;
			border-bottom-color: @xf-inlineModHighlightColor;
		}
	}

	.message-user
	{
		display: flex;

		.has-no-flexbox &
		{
			display: table;
			width: 100%;
		}
	}

	.message-avatar
	{
		margin-bottom: 0;

		.has-no-flexbox &
		{
			display: table-cell;
			width: 1%;
		}

		.avatar
		{
			.m-avatarSize(@avatar-s);
		}
	}

	.message-userDetails
	{
		flex: 1;
		min-width: 0;
		padding-left: @xf-messagePadding;

		.has-no-flexbox &
		{
			display: table-cell;
		}
	}

	.message-name
	{
		text-align: left;
	}

	.message-userTitle,
	.message-userBanner.userBanner
	{
		display: inline-block;
		text-align: left;
		margin: 0;
	}

	.message--deleted
	{
		.message-userDetails
		{
			display: block;
		}
	}
}
}
';
	}
	$__finalCompiled .= '

/* Collapsible Message Extras */
';
	if ($__templater->func('property', array('xbMessageUserElementsCollapse', ), false)) {
		$__finalCompiled .= '
.message-userExtras-body
{
	.m-listPlain();

	&.message-userExtras--collapsible .message-userExtras
	{
		.has-no-js & { display: block; }

		.m-transitionFadeDown();
	}
}
.message-cell
{
	.collapseTrigger
	{
		text-align: center;
		
		&.is-active:before
		{
		   .m-faContent("\\f410");
		}
		&:before
		{
		   .m-faBase();
		   .m-faContent("\\f339");
			transition: ease-in transform .3s;
			width: auto;
			margin: 0 auto;
		}
		&.collapseTrigger--block:before
		{
			float: none;
		}
	}
}
@media (max-width: @xf-responsiveNarrow)
{
	.message-cell
	{
		.collapseTrigger
		{
			display: none;
		}
	}
}
';
	}
	$__finalCompiled .= '


';
	if (($__templater->func('property', array('xbMessageAvatarSize', ), false) == 'l') AND ($__templater->func('property', array('xbMessageLayout', ), false) != 'horizontal')) {
		$__finalCompiled .= '	
@singleColumnMinWidth: (@xf-messageSingleColumnWidth + 1px); // parens have to be even here
';
		if ($__templater->func('property', array('xbMessageLayout', ), false) == 'default') {
			$__finalCompiled .= '
@messageUserBlockInner: (@xf-messageUserBlockWidth);
';
		} else if ($__templater->func('property', array('xbMessageLayout', ), false) == 'classic') {
			$__finalCompiled .= '
@messageUserBlockInner: (@xf-messageUserBlockWidth - @xf-messagePadding - @xf-messagePadding - 2); // determines the user block width minus padding
';
		}
		$__finalCompiled .= '

@media (min-width: @singleColumnMinWidth)	
{
	[data-template="thread_view"] .block--messages
	{
		.message-avatar-wrapper
		{
			width: 100%;
		}
		.message-cell--user .message-avatar-wrapper img, .message-cell--user .message-avatar-wrapper .avatar
		{
			height: auto;
			width: auto;
			&.avatar--default--dynamic
			{
				width: 100%;
				height: auto;
				max-width: 192px;
				max-height: 192px;
			}
			&.avatar--default--dynamic when (@xf-messageUserBlockWidth > 192px) {
				line-height: 192px;
			}
			&.avatar--default--dynamic when (@xf-messageUserBlockWidth < 192px) {
				line-height: @messageUserBlockInner;
			}
		}
	}
}
';
	}
	$__finalCompiled .= '

.message-newIndicator
{
	&.message-adminIndicator
	{
		.xf-xbAdminIndicatorColor();
	}
	&.message-moderatorIndicator
	{
		.xf-xbModeratorIndicatorColor();
	}
	&.message-staffIndicator
	{
		.xf-xbStaffIndicatorColor();
	}
	&.message-bannedIndicator
	{
		.xf-xbBannedIndicatorColor();
	}
	&.message-threadStarter
	{
		.xf-xbThreadStarterColor();
	}
}
@media (max-width: @xf-messageSingleColumnWidth)	
{
	.tag-threadStarter, .tag-adminIndicator, .tag-moderatorIndicator, .tag-staffIndicator, .tag-bannedIndicator
	{
		display: none;
	}
}';
	return $__finalCompiled;
});