<?php
// FROM HASH: 53ba5f5969def166d5477d631fa776a4
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.block--category
{
	.xf-xbNodeCategory();
}
.node-extra--inner
{
	.xf-xbNodeLastPost();
}
';
	if ($__templater->func('property', array('xbNodeSpacer', ), false)) {
		$__finalCompiled .= '
.block--category
{
	.block-container
	{
		background-color: transparent;
		box-shadow: none;
		.node
		{
		.xf-blockBorder();
		background-color: @xf-contentBg;
		margin-top: 5px;
		&:last-child
		{
			margin-bottom: 0;
		}
		}
	}
}
';
	}
	$__finalCompiled .= '
.block--category
{
	.block-container
	{
		.node
		{
			.xf-xbNode();
		}
	}
}

';
	if ($__templater->func('property', array('xbDesignMode', ), false) OR $__templater->func('property', array('xbNodeIDHelper', ), false)) {
		$__finalCompiled .= '
.xbTemplateHelper, .xbNodeID
{
    background: #E1E4CE;
    padding: 2px 8px 3px;
    border-radius: @xf-borderRadiusSmall;
    color: #464738;
	font-size: 12px;
	display: inline-block;
	font-family: Arial;
}
';
	}
	$__finalCompiled .= '

';
	if ($__templater->func('property', array('xbNodeStatsIcons', ), false)) {
		$__finalCompiled .= '
.node-statsMeta, .node-stats
{
	dl:nth-of-type(1), dl:nth-of-type(2)
	{
		dt:before
		{
			.m-faBase();
			content: "\\f086";
			vertical-align: middle;
			color: @xf-textColorMuted;
			display: inline-block;
			margin-right: 2px;
		}
	}
	dl:nth-of-type(2)
	{
		dt:before
		{
			content: "\\f040";
		}
	}
}
';
	}
	$__finalCompiled .= '


.node
{
	.node-title a
	{
		.xf-xbNodeTitle();
	}
	
	&.node--read
	{
		.node-icon i:before
		{
			.m-faContent("@{fa-var-' . $__templater->func('property', array('xbNodeIconRead', ), true) . '}\\20");
			text-shadow: none;
		}
	}
	&.node--unread
	{
		.node-icon i
		{
			.xf-xbNodeIconFaUnread();
			&:before { .m-faContent("@{fa-var-' . $__templater->func('property', array('xbNodeIconUnread', ), true) . '}\\20"); text-shadow: none; }
		}
		.node-title a
		{
			.xf-xbNodeTitleUnread();
		}
	}
	&.node--page
	{
		.node-icon i
		{
			opacity: 1;
			&:before { .m-faContent("@{fa-var-' . $__templater->func('property', array('xbNodeIconPage', ), true) . '}\\20"); text-shadow: none; }
		}
	}
	&.node--link
	{
		.node-icon i
		{
			opacity: 1;
			&:before { .m-faContent("@{fa-var-' . $__templater->func('property', array('xbNodeIconLink', ), true) . '}\\20"); text-shadow: none; }
		}
	}
	.node-icon
	{
		i
		{
			.xf-xbNodeIconFaMain();
		}
	}
}
/* Nodes */
.block--category
{
	.collapseTrigger
	{
		opacity: 0.5;
		transition: opacity 0.3s;
		margin-right: 10px;
		&.is-active:before
		{
			.m-faContent("\\f205");
			transform: scale(-1, 1);
			margin-right: -8px;
		}
		&:before
		{
			.m-faContent("\\f205");
			font-size: 80%;
		}
	}
	.block-container:hover .collapseTrigger
	{
		opacity: 1;
	}
}

';
	if ($__templater->func('property', array('xbNodeAltBg', ), false)) {
		$__finalCompiled .= '
.node + .node:nth-child(even)
{
		background-color: @xf-contentAltBg;
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbNodeHover', ), false)) {
		$__finalCompiled .= '
.block-body .node
{
	.m-transition();
	&:hover
	{
			background-color: @xf-xbContentBgHover;
	}
}
';
	}
	$__finalCompiled .= '

.collapsible-nodes
{
	.block-header
	{
		display: flex;
		align-items: center;
		justify-content: space-between;
	}
	.block-header--left
	{
		margin-right: auto;
		max-width: 100%;
	}
}
';
	if ($__templater->func('property', array('xbCategoryFooter', ), false)) {
		$__finalCompiled .= '
.node-footer
{
	.xf-xbCategoryFooterStyle();
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbForumListBreadcrumb', ), false)) {
		$__finalCompiled .= '
body[data-template="forum_list"], body[data-template="forum_new_posts"]
{
	.p-breadcrumbs--parent
	{
		display: none;
	}
	.p-body-inner
	{
		padding-top: @xf-paddingLargest;
	}
}
';
	}
	$__finalCompiled .= '

.block--category 
{
	.block-body.nodedual
	{
		display: flex;
		flex-wrap: wrap;
		flex-direction: row;
		width: auto;
		.node
		{
		min-width: 280px;
		flex: 1 1 50%;
		padding: 10px 0;
		border-bottom: @xf-borderSize solid @xf-borderColorFaint;
		border-top-width: 0;
			.node-body
			{
				padding: 0 15px;
				.node-statsMeta { display: inline; }
				.node-stats { display: none; }
				.node-extra
				{
					display: block;
					width: auto;
					padding: 0px;
					background-color: @xf-contentAltBg;
					border-width: 0;
					box-shadow: none;
					.node-extra--inner
					{
						padding: 5px 10px;
						background-color: @xf-contentAltBg;
						.xf-xbNodeLastPost();
					}
				}
				.node-main
				{
					width: 100%;
					display: block;
					padding: 0 10px 10px 10px;
				}
				.node-icon
				{
					box-sizing: content-box;
					padding: 0 10px;
				}
			}

		}
	}
}
@media (max-width:@xf-responsiveWide)
{
	.block--category .block-body.nodedual { display: block; }
	.block--category .block-body.nodedual .node .node-body .node-icon { padding-left: 0; }
}
@media (max-width: calc(800px + @xf-xbSidebarWidth))
{
	.p-body-main--withSidebar.p-body-main, .p-body-main--withSidebar .p-body-content { display: block; padding-left: 0; padding-right: 0; }
}

';
	if ($__templater->func('property', array('xbNodeLayout', ), false) == 'classic') {
		$__finalCompiled .= '
.node-body
{
	.node-statsMeta { display: inline; }
	.node-stats { display: none; }
}
';
	}
	$__finalCompiled .= '
';
	if ($__templater->func('property', array('xbForumListH1', ), false)) {
		$__finalCompiled .= '
body[data-template="forum_list"]
{
	.p-title-value
	{
		display: none;
	}
	.p-title-pageAction
	{
		margin-left: auto;
	}
}
';
	}
	$__finalCompiled .= '

@media (min-width: @xf-responsiveEdgeSpacerRemoval)
{
	.block--category .block-header-wrapper
	{
		border-radius: 0;
		.block-header
		{
			border-top-left-radius: @block-borderRadius-inner;
			border-top-right-radius: @block-borderRadius-inner;
		}
	}
}';
	return $__finalCompiled;
});