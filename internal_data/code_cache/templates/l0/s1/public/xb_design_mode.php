<?php
// FROM HASH: 09d10114abba1bf1c9f3bbfe2bc42961
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__vars['styleFolder'] = $__templater->preEscaped($__templater->func('property', array('xbStyleFolder', ), true));
	$__finalCompiled .= '
<script src="' . $__templater->func('base_url', array($__vars['styleFolder'] . '/qtip/jquery.qtip.min.js', ), true) . '"></script>

';
	$__templater->includeCss('xb_design_mode.less');
	$__finalCompiled .= '

<script>
$(document).ready(function()
{
tipOptions = 
	{
		position: {
			target: \'mouse\',
			adjust: { mouse: false },
			viewport: $(window)
		},
		hide: {
			fixed: true,
			delay: 500
		},
        show: {
            solo: true
        },
	 	style: {
			classes: \'xb-docsTooltip\'
		}
	}
$(\'.p-staffBar\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Staff tools bar\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicStaffBar" target="_blank">publicStaffBar</a>\'
    }
	})
);	
$(\'.p-header\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Header/logo row\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicHeader" target="_blank">publicHeader</a>\'
    }
	})
);	
$(\'.p-header-logo > *\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Logo\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'basic', ), ), true) . '#sp-publicLogoUrl" target="_blank">publicLogoUrl</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'basic', ), ), true) . '#sp-xbLogoType" target="_blank">Logo type</a> (image/text)<br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-xbLogoPosition" target="_blank">Logo position</a>\'
    }
	})
);
$(\'.p-nav\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Navigation row\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicNav" target="_blank">publicNav</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-xbStretchNav" target="_blank">Stretch navigation</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicNavPaddingV" target="_blank">Navigation padding vertical</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicNavPaddingH" target="_blank">Navigation padding horizontal</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicNavSticky" target="_blank">Sticky navigation element</a><span class="tooltip-divider"></span><strong>Additional</strong>: <br />To add other links here you\\\'ll want to use the default <a href="' . $__templater->func('link_type', array('admin', 'navigation', ), true) . '" target="_blank">Public navigation</a>\'
    }
	})
);
$(\'.p-nav-opposite\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Visitor Tabs\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicHeaderAdjustColor" target="_blank">publicHeaderAdjustColor</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-xbVisitorTabsLocation" target="_blank">Visitor tabs location</a><br /> (icons/text)<br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-xbAccountText" target="_blank">Account text</a>\'
    }
	})
);
$(\'.p-navEl.is-selected\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Navigation row - selected tab\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicNavSelected" target="_blank">publicNavSelected</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-xbNavSelectedStyle" target="_blank">Navigation tab selected style</a>\'
    }
	})
);
$(\'.p-sectionLinks\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Sub-navigation\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicSubNav" target="_blank">publicSubNav</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-xbDisableSubnav" target="_blank">Disable sub-navigation</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicSubNavPaddingV" target="_blank">Sub-navigation padding vertical</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicSubNavPaddingH" target="_blank">Sub-navigation padding horizontal</a><span class="tooltip-divider"></span><strong>Additional</strong>: <br />The link color is inherited from the <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicSubNav" target="_blank">publicSubNav</a> property. You can also style the <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicSubNavElHover" target="_blank">hovered elements</a> and <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'headerNav', ), ), true) . '#sp-publicSubNavElMenuOpen" target="_blank">menu-open elements</a>.\'
    }
	})
);
$(\'.notice\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Notices\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'misc', ), ), true) . '#sp-xbNotices" target="_blank">xbNotices</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'misc', ), ), true) . '#sp-xbNoticeLink" target="_blank">Notice links</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'misc', ), ), true) . '#sp-noticeScrollInterval" target="_blank">Scrollable notice interval</a>\'
    }
	})
);	
$(".p-breadcrumbs").qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Breadcrumbs\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'basic', ), ), true) . '#sp-xbBreadcrumb" target="_blank">xbBreadcrumb</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbForumListBreadcrumb" target="_blank">Hide breadcrumb on forum list</a>\'
    }
	})
);
$(\'.p-body-sidebar\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Sidebar\',
        text: \'<strong>Style properties</strong>: <br /> <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarBlockBorder" target="_blank">Sidebar block container</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarHeading" target="_blank">Sidebar headings</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarBlockBody" target="_blank">Sidebar block body</a> <br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarSpacer" target="_blank">Sidebar and side navigation spacer</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarWidth" target="_blank">Sidebar and side navigation width</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarPosition" target="_blank">Sidebar position</a> (right/left/below/disalbed)<br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarFaIcons" target="_blank">Sidebar Font Awesome Icons</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarLogin" target="_blank">Sidebar login</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbSidebar', ), ), true) . '#sp-xbSidebarCollapse" target="_blank">Sidebar collapse</a>\'
    }
	})
);
$("[data-template=\\"forum_list\\"] .p-title-value").qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Page title (forum_list)\',
        text: \'<strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbForumListH1" target="_blank">Hide page title on forum list</a>\'
    }
	})
);		
$(\'.button:not(.button--cta):not(.button--primary)\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Button\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'button', ), ), true) . '#sp-buttonDefault" target="_blank">buttonDefault</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'button', ), ), true) . '#sp-xbButtonStyle" target="_blank">Button style</a>\'
    }
	})
);
$(\'.button--cta\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Button - call to action\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'button', ), ), true) . '#sp-buttonCta" target="_blank">buttonCta</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'button', ), ), true) . '#sp-xbButtonStyle" target="_blank">Button style</a>\'
    }
	})
);
$(\'.button--primary\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Button - primary\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'button', ), ), true) . '#sp-buttonPrimary" target="_blank">buttonPrimary</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'button', ), ), true) . '#sp-xbButtonStyle" target="_blank">Button style</a>\'
    }
	})
);
$(\'.block-header-wrapper\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Block header\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'block', ), ), true) . '#sp-blockHeader" target="_blank">blockHeader</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbCollapseNodes" target="_blank">Collapsible nodes</a><span class="tooltip-divider"></span><strong>Additional</strong>: <br />Block headers are universal in XenForo so changing this property will carry over to other block headers\'
    }
	})
);
$(\'.node-main, .node-stats, .node-extra\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Node\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNode" target="_blank">xbNode</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeLayout" target="_blank">Node layout</a> (default/classic/dual)<br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeSpacer" target="_blank">Node spacers</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNewIndicator" target="_blank">New node title indicator</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeAltBg" target="_blank">Node alternating background color</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeHover" target="_blank">Node hover</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeStatsIcons" target="_blank">Node stats icon</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-nodeListSubDisplay" target="_blank">Sub-forums display style</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-nodeListDescriptionDisplay" target="_blank">Description display style</a>\'
    }
	})
);
$(\'.node-title a\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Node title\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeTitle" target="_blank">xbNodeTitle</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeTitleUnread" target="_blank">Node title unread</a>\'
    }
	})
);	
$(\'.node-icon\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Node icon\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeIconFaMain" target="_blank">xbNodeIconFaMain</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-nodeIconUnreadColor" target="_blank">Unread node icon color</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-nodeIconReadColor" target="_blank">Read node icon color</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeIconRead" target="_blank">Set node icons</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'nodeList', ), ), true) . '#sp-xbNodeIDHelper" target="_blank">Show node ID\\\'s</a><span class="tooltip-divider"></span><strong>Additional</strong>: <br />You can use extra\\.less to set custom node icons. To view the complete tutorial visit <a href="https://pixelexit.com/threads/custom-node-icons.6183/" target="blank">this thread</a> on Pixel Exit.\'
    }
	})
);
$(\'.p-footer-default\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Footer\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-publicFooter" target="_blank">publicFooter</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-publicFooterLink" target="_blank">Footer links</a> (style)\'
    }
	})
);
$(\'.p-footer-custom\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Custom footer\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-xbCustomFooterCSS" target="_blank">xbCustomFooterCSS</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-xbFooter" target="_blank">Disable custom footer</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-xbStretchFooter" target="_blank">Stretch footer</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-xbFooterBlock1Width" target="_blank">Footer block\\\'s width</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-xbFooterBlockContent1" target="_blank">Footer block\\\'s content</a>\'
    }
	})
);
$(\'.p-footer-copyright\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Copyright\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'footer', ), ), true) . '#sp-xbCopyrightCSS" target="_blank">xbCopyrightCSS</a>\'
    }
	})
);
$(\'[data-template="forum_view"] .structItemContainer\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Discussion list\',
        text: \'<strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbDiscussionList', ), ), true) . '#sp-xbDiscussionAltBg" target="_blank">Alternate background color</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbDiscussionList', ), ), true) . '#sp-xbDiscussionHover" target="_blank">List item hover</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbDiscussionList', ), ), true) . '#sp-xbSeparateThreads" target="_blank">Separate normal and sticky threads</a><span class="tooltip-divider"></span><strong>Additional</strong>: <br />You can also style <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbDiscussionList', ), ), true) . '#sp-xbThreadListSticky" target="_blank">sticky</a> and <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'xbDiscussionList', ), ), true) . '#sp-xbThreadListLocked" target="_blank">locked</a> threads uniquely.\'
    }
	})
);
$(\'.message-cell--user\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Message user info\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-messageUserBlock" target="_blank">messageUserBlock</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-messageUserBlockWidth" target="_blank">Message user info block width</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-xbMessageAvatarSize" target="_blank">Avatar size</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-messageUserElements" target="_blank">Message user info elements</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-xbMessageUserElementsCollapse" target="_blank">Hide message user info</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-xbMessageUserIcons" target="_blank">Message user icons</a>\'
    }
	})
);
$(\'.message--post .message-body\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Message\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-xbMessage" target="_blank">xbMessage</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-xbMessageLayout" target="_blank">Message layout</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-xbMessageHeader" target="_blank">Message header</a><br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-messageSingleColumnWidth" target="_blank">Message single column break point</a>\'
    }
	})
);
$(\'.message-attribution-opposite span\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'Message indicators\',
        text: \'<strong>Additional</strong>: <br />You can enable <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'message', ), ), true) . '#sp-xbAdminIndicator" target="_blank">message indicators</a> such as Admin, Moderator, Staff, Banned and Thread starter.\'
    }
	})
);
$(\'.bbCodeBlock\').qtip($.extend(tipOptions, 
	{
		content: {
		title: \'BBCode block indicators\',
        text: \'<strong>Style property</strong>: <a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'bbCode', ), ), true) . '#sp-bbCodeBlock" target="_blank">bbCodeBlock</a><br /><span class="tooltip-divider"></span><strong>Available Options</strong>: <br /><a href="' . $__templater->func('link_type', array('admin', 'styles/style-properties/group', array('style_id' => $__vars['xf']['visitor']['style_id'], ), array('group' => 'bbCode', ), ), true) . '#sp-bbCodeBlockExpandHeight" target="_blank">Maximum expandable BB code block height</a>\'
    }
	})
);

	
});
	
	

</script>';
	return $__finalCompiled;
});