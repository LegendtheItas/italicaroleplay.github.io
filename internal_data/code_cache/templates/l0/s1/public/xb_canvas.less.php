<?php
// FROM HASH: dbed3b49c9b40df61d77130736d3f1a6
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '@xb-canvas-width: @xf-xbCanvasWidth;
@xb-canvas-header-height: @xf-xbCanvasTopHeight;
.xb-canvas
{
	.p-navSticky, .p-nav--wrapper
	{
		display: none;
		&.is-sticky
		{
			position: static;
			z-index: 1;
		}
	}
	display: flex;
	flex-direction: column;
	.canvas-header
	{
		position: sticky;
		top: 0;
		z-index: @zIndex-3;
		display: flex;
		align-items: center;
		.xf-xbCanvasHeader();

		.p-header-logo
		{
			width: @xf-xbCanvasWidth;
			display: flex;
			padding: 0 @xf-paddingLarge;
			align-items: center;
			margin-right: @xf-elementSpacer;
			height: @xf-xbCanvasTopHeight;
			&.p-header-logo--textlogo { font-size: 22px; }
			&.p-header-logo--image img { max-height: (@xf-xbCanvasTopHeight - 20); }
			.xf-xbCanvasHeaderLogo();
			i
			{
				color: @xf-xbCanvasHeaderLogo--color;
				font-size: 20px;
				margin-right: 10px;
			}
		}
		.p-nav-opposite
		{
			margin-right: @xf-elementSpacer;
		}
	}
	.canvas-wrapper
	{
    	display: flex;
	}
	.p-body-inner
	{
		padding-right: @xf-elementSpacer;
		padding-left: @xf-elementSpacer;
	}
	.canvas-left
	{
		min-height: 100vh;
		vertical-align: top;
		flex-shrink: 0;
		width: 80px;
		padding: 0;
		z-index: @zIndex-2;
		transition: all .2s ease;
		.xf-xbCanvasSidePanel();
		a
		{
			color: @xf-xbCanvasSidePanel--color;
			&:hover
			{
				text-decoration: none;
			}
		}
		.canvas-left--inner
		{
			position: sticky;
			top: @xf-xbCanvasTopHeight;
		}
		.pageAction-toggle i
		{
			padding: 15px 30px;
			display: block;
		}
		.p-title-pageAction
		{
			padding: 0 30px;
			display: none;
			a
			{
				margin-top: @xf-paddingMedium;
				display: block;
			}
		}
		a.button
		{
			border: 1px solid @xf-xbCanvasSideButtons--background-color;
			.xf-xbCanvasSideButtons();
			&:hover { background-color: xf-intensify(@xf-xbCanvasSideButtons--background-color, 2%); }
		}
		

	}
	.xbSidebar-nav li
	{
		span, .xbVerticalNav-toggle { display: none; }
	}
	.canvas-right
	{
		min-height: 100vh;
		vertical-align: top;
		padding-top: @xf-elementSpacer;
		flex-grow: 1;
		min-width: 0;
		transition: 300ms ease all;
		';
	if ($__templater->func('property', array('xbTopBar', ), false)) {
		$__finalCompiled .= 'padding-top: 0;';
	}
	$__finalCompiled .= '
	}
	&.xb-canvas-menuActive
	{
		.canvas-left, .xbSidebar-nav-list > li
		{
			width: @xf-xbCanvasWidth;
		}
		.p-title-pageAction
		{
			display: block;
		}
		.pageAction-toggle i
		{
			display: none;
		}
		.canvas-wrapper
		{

		}
		.xbSidebar-nav li
		{
			span, .xbVerticalNav-toggle, .pageAction-toggle { display: inline; }
		}
		.xbSidebar-nav
		{
			overflow: hidden;
		}
	}
}

.xbSidebar-nav
{
	.block-container
	{
		background-color: transparent;
		border-width: 0;
		box-shadow: none;
	}
	ul {     .m-listPlain(); }
    li
    {
        
        &:first-of-type a { border-top-width: 0; }
    }
    li a
    {
        display: block;
        padding: 15px 30px;
        float: none;
		color: @xf-publicNav--color;
    }
	a[data-nav-id="home"] i:before { .m-faContent("\\f015"); }
	a[data-nav-id="forums"] i:before { .m-faContent("\\f086"); }
	a[data-nav-id="members"] i:before { .m-faContent("\\f0c0"); }
	a[data-nav-id="xfrm"] i:before { .m-faContent("\\f013"); }
	a[data-nav-id="whatsNew"] i:before { .m-faContent("\\f0e7"); }
	a[data-nav-id="EWRrio"] i:before { .m-faContent("\\f1e8"); }
	a[data-nav-id="xfmg"] i:before { .m-faContent("\\f03d"); }
	a[data-nav-id="snog_raffles_navtab"] i:before { .m-faContent("\\f145"); }
	a[data-nav-id="th_donate"] i:before { .m-faContent("\\f2b5"); }
	a[data-nav-id="EWRatendo"] i:before { .m-faContent(@fa-var-calendar-alt); }
	a[data-nav-id="EWRcarta"] i:before { .m-faContent(@fa-var-book); }
	a[data-nav-id="EWRdiscord"] i:before { .m-faContent(@fa-var-discord); .m-faBase(\'Brands\'); }
	a[data-nav-id="EWRmedio"] i:before { .m-faContent(@fa-var-video-plus); }
	a[data-nav-id="EWRporta"] i:before { .m-faContent(@fa-var-home); }
	a[data-nav-id="EWRrio"] i:before { .m-faContent(@fa-var-play-circle); }
	a[data-nav-id="EWRtorneo"] i:before { .m-faContent(@fa-var-trophy); }
	a[data-nav-id="xa_ams"] i:before { .m-faContent("\\f15c"); }
	a[data-nav-id="xa_ubs"] i:before { .m-faContent("\\f303"); }
	a[data-nav-id="xa_showcase"] i:before { .m-faContent("\\f00b"); }
	a[data-nav-id="xa_sportsbook"] i:before { .m-faContent("\\f091"); }
	a[data-nav-id="xa_pickem"] i:before { .m-faContent("\\f51e"); }
    .xbVerticalNav-linkHolder
    {
        display: flex;
        .xbVerticalNav-link
        {
            flex-grow: 1;
			&:before
			{
				content: "" !important;
			}
        }
        .xbVerticalNav-toggle
        {
        flex-grow: 0;
        position: relative;
        text-decoration: inherit;
        &:before
        {
            content: \'\';
            position: absolute;
            left: 0;
            top: (@xf-paddingLarge - 4px);
            bottom: (@xf-paddingLarge - 4px);
            width: 0;
            border-left: 1px solid xf-diminish(@xf-xbCanvasSidePanel--background-color, 10%);
        }

        &:after
        {
            .m-faBase();
            .m-faContent(@fa-var-chevron-down, 1em);
        }
        }
    }
    .xbVerticalNav-subList
    {
        .m-listPlain();
        .m-transitionFadeDown();
		background-color: xf-intensify(@xf-xbCanvasSidePanel--background-color, 5%);
		.menu-header { border-bottom-width: 0; display: none; }
		a
		{
			text-indent: 0;
			&:hover { background-color: xf-intensify(@xf-xbCanvasSidePanel--background-color, 8%); }
		}
		.menu-separator
		{
			border-top-color: xf-diminish(@xf-xbCanvasSidePanel--background-color, 5%);
		}
    }
}
.xbSidebar-nav-list > li, .pageAction-toggle
{
	position: relative;
}

.xb-canvas:not(.xb-canvas-menuActive) .xbSidebar-nav .xbVerticalNav-subList.is-active
{
	display: none;
}
.xb-canvas:not(.xb-canvas-menuActive) .xbSidebar-nav-list li:hover .xbVerticalNav-subList,
.xb-canvas:not(.xb-canvas-menuActive) .pageAction-toggle:hover .p-title-pageAction
{
    display: block;
    height: auto;
    overflow: visible;
	opacity: 1;
    position: absolute;
    left: 80px;
    top: 0;
    width: 250px;
    z-index: 1001;
    padding-left: 1px;
	a
	{
		text-indent: 0;
	}
	.menu-header { display: block; }
}
.xb-canvas:not(.xb-canvas-menuActive) .pageAction-toggle:hover .p-title-pageAction
{
	padding: @xf-paddingMedium @xf-paddingLarge;
	background-color: xf-intensify(@xf-xbCanvasSidePanel--background-color, 5%);
	a:first-of-type { margin-top: 0; }
}

.p-nav-menuTrigger
{
	display: none;
}
.canvas-header .xb-searchWrapper
{
    border: 1px solid @xf-borderColor;
	width: 100%;
    max-width: 500px;
	.xb-search--submit, .xb-search--advance { flex: 0; }
	.xb-search--field { flex: 1 0 auto; }
}
';
	if ($__templater->func('property', array('xbCanvasSearch', ), false)) {
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
@media (max-width:@xf-publicNavCollapseWidth)
{
	.fa--xf.fal.fa-bars  { display: none; }
	.p-nav-menuTrigger i { display: block !important; margin: 0 !important; font-size: 26px;}
	.p-nav-menuTrigger { display: flex !important; width: 50px; text-align: center;}
	.xb-canvas .canvas-left { display: none; }
	.XenBase .p-header-logo.p-header-logo--image img {  max-height: 40px;}
}
@media (max-width:500px)
{
	.xb-canvas .canvas-header .p-header-logo { padding-left: 10px; padding-right: 10px; max-width: 200px; }
	.p-nav-menuTrigger { width: 40px; }
}
@media (max-width:1300px)
{
	.canvas-header .xb-searchWrapper { max-width: 300px; }
}';
	return $__finalCompiled;
});