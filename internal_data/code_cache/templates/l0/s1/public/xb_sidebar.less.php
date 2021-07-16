<?php
// FROM HASH: 75a710d1bc9b9efefeb128499a9aff4a
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.p-body-sideNavContent .block-minorHeader
{
    font-weight: bold;
}
.p-sidebar-inner
{
	.block-body
	{
		.xf-xbSidebarBlockBody();
	}
}

';
	if ($__templater->func('property', array('xbSidebarLogin', ), false)) {
		$__finalCompiled .= '
.blocks.blocks--login
{
	.formRow 
	{
		> dt, > dd
		{
			width: auto;
			display: block;
			text-align: left;
			padding: 0px;
			background-color: transparent;
			border-width: 0;
		}
		> dt
		{
			padding: 5px 0px;
		}
		&:first-child
		{
			> dt
			{
				padding-top: 0;
			}
		}
		&.formSubmitRow dt
		{
			display: none;
		}
		.formSubmitRow-bar
		{
			background-color: transparent;
			border-width: 0;
		}
		.formSubmitRow-controls
		{
			padding-left: 0;
			text-align: right;
			margin-right: 8px;
			
		}
	}
	.block-outer--register
	{
		padding: 10px;
		margin: 0 -@xf-blockPaddingH -@xf-blockPaddingV;
		text-align: right;
		background-color: @xf-contentAccentBg;
		color: @xf-textColorAccentContent;
		border-top: 1px solid @xf-borderColorAccentContent;
		font-size: @xf-fontSizeSmall;
		a.button
		{
			margin-left: 5px;
		}
	}
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbSidebarCollapse', ), false)) {
		$__finalCompiled .= '
#collapseSidebar
{
	font-size: 120%;
    vertical-align: top;
}
#collapseSidebar.xb-sidebar-default i:before
{
	.m-faContent("\\f0da");
}

#collapseSidebar i:before
{
	.m-faContent("\\f0d9");
}

.p-body-main--withSidebar
{
	.p-body-sidebar
	{
		
	}
	&:not(.xb-sidebar-default)
	{
		.p-body-content
		{
			padding: 0;
			.m-transition();
		}
		.p-body-sidebar
		{
			display: none;
		}
	}
	#collapseSidebar
	{
		display: none;
	}
	.m-transition();
}
@media (max-width: @xf-responsiveWide)
{
	.p-title-pageAction
	{
		#collapseSidebar
		{
			display: none;
		}
	}
	.p-body-main--withSidebar
	{
		#collapseSidebar
		{
			display: block;
			margin-top: @xf-elementSpacer;
			margin-bottom: 0;
			&.xb-sidebar-default
			{
				margin-bottom: @xf-elementSpacer;
				i:before
				{
					content: "\\f0d8";
				}
			}
		}
	}	
}

';
	}
	$__finalCompiled .= '

.p-body-sidebar-inner.is-sticky
{
	.m-stickyHeaderConfig(@xf-publicNavSticky);
	margin-top: (@_stickyHeader-height + @_stickyHeader-offset);
}
';
	if ($__templater->func('property', array('xbSidebarFaIcons', ), false)) {
		$__finalCompiled .= '
.p-body-sidebar, .p-body-sideNavContent
{
	.block-minorHeader:before
	{
	   .m-faBase();
	   .m-faContent("\\f101");
		display: inline-block;
		margin-right: 5px;
	}
	.blocks--login .block-minorHeader:before
	{
		.m-faContent("\\f2f6");
	}
	[data-widget-definition="find_member"] .block-minorHeader:before
	{
		.m-faContent("\\f002");
	}
	[data-widget-definition="birthdays"] .block-minorHeader:before
	{
		.m-faContent("\\f1fd");
	}
	[data-widget-definition="new_posts"] .block-minorHeader:before
	{
		.m-faContent("\\f040");
	}
	[data-widget-definition="new_threads"] .block-minorHeader:before
	{
		.m-faContent("\\f086");
	}
	[data-widget-definition="new_profile_posts"] .block-minorHeader:before
	{
		.m-faContent("\\f4ff");
	}
	[data-xf-init="poll-block"] .block-minorHeader:before
	{
		.m-faContent("\\f080");
	}
	[data-widget-section="staffMembers"] .block-minorHeader:before
	{
		.m-faContent("\\f0e3");
	}
	[data-widget-section="onlineNow"] .block-minorHeader:before
	{
		.m-faContent("\\f0c0");
	}
	[data-widget-definition="online_statistics"] .block-minorHeader:before
	{
		content: "\\f0c0";
		.m-faContent("\\f63d");
	}
	[data-widget-definition="member_stat"] .block-minorHeader:before
	{
		.m-faContent("\\f201");
	}
	[data-widget-key="forum_overview_forum_statistics"] .block-minorHeader:before
	{
		.m-faContent("\\f1fe");
	}
	[data-widget-key="forum_overview_share_page"] .block-minorHeader:before
	{
		.m-faContent("\\f1e0");
	}
	[data-widget-key="member_wrapper_find_member"] .block-minorHeader:before
	{
		.m-faContent("\\f002");
	}
	[data-widget-key="member_wrapper_newest_members"] .block-minorHeader:before
	{
		.m-faContent("\\f234");
	}
	[data-widget-key="forum_list_new_profile_posts"] .block-minorHeader:before
	{
		.m-faContent("\\f4ff");
	}
	[data-xf-init="poll-block ajax-submit"] .block-minorHeader:before
	{
		.m-faContent("\\f080");
	}
	[data-widget-definition="xfmg_latest_comments"] .block-minorHeader:before
	{
		.m-faContent("\\f086");
	}
	[data-widget-definition="xfmg_media_slider"] .block-minorHeader:before
	{
		.m-faContent("\\f03d");
	}
	[data-widget-definition="xfmg_gallery_statistics"] .block-minorHeader:before
	{
		.m-faContent("\\f1fe");
	}
	[data-widget-definition="xfrm_top_resources"] .block-minorHeader:before
	{
		.m-faContent("\\f005");
	}
	[data-widget-definition="xfrm_new_resources"] .block-minorHeader:before
	{
		.m-faContent("\\f085");
	}
	[data-widget-definition="newest_members"] .block-minorHeader:before
	{
		.m-faContent("\\f234");
	}
	[data-widget-definition="forum_statistics"] .block-minorHeader:before
	{
		.m-faContent("\\f200");
	}
	
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbSidebarPosition', ), false) == 'leftside') {
		$__finalCompiled .= '
.p-body-content
{
	.p-body-main--withSidebar &
	{
		padding-left: @xf-sidebarSpacer;
		padding-right: 0;
	}
}
@media (max-width: @xf-responsiveWide)
{
.p-body-main--withSidebar
	{
		display: flex;
		flex-flow: row wrap;
		.p-body-content { order: 1; padding: 0;}
		.p-body-sidebar { order: 2; padding: 0; width: 100%;}
	}
}
';
	} else if ($__templater->func('property', array('xbSidebarPosition', ), false) == 'disabled') {
		$__finalCompiled .= '
.p-body-content
{
	.p-body-main--withSidebar &
	{
		padding-right: 0;
	}
}
';
	} else if ($__templater->func('property', array('xbSidebarPosition', ), false) == 'belowcontent') {
		$__finalCompiled .= '
	.p-body-main--withSidebar
	{
		.p-body-main, .p-body-content
		{
			display: block;
			padding-right: 0;
		}
		.p-body-sidebar
		{
			display: flex;
			flex-wrap: wrap;
			align-items: stretch;
			margin: @xf-elementSpacer -(@xf-pageEdgeSpacer / 2) -@xf-elementSpacer;
			width: auto;

			> *
			{
				margin: 0 (@xf-pageEdgeSpacer / 2) @xf-elementSpacer;
				min-width: @xf-sidebarWidth;
				flex: 1 1 100%;

				&:last-child
				{
					margin-bottom: @xf-elementSpacer;
				}
			}

			// add an invisible block to ensure that the last row has the correct widths
			&:after
			{
				display: block;
				content: \'\';
				height: 0;
				margin: 0 (@xf-pageEdgeSpacer / 2);
				min-width: @xf-sidebarWidth;
				flex: 1 1 @xf-sidebarWidth;
			}

			.block-container
			{
				display: flex;
				flex-direction: column;
				height: 100%;

				.block-footer
				{
					margin-top: auto;
				}
			}
		}

		.p-body-main--withSideNav,
		.p-body-main--withSidebar
		{
			.p-body-content { padding: 0; }
		}
}
';
	}
	$__finalCompiled .= '
.XenBase .p-body-sidebar .block-minorHeader
{
	.xf-xbSidebarHeading();
}';
	return $__finalCompiled;
});