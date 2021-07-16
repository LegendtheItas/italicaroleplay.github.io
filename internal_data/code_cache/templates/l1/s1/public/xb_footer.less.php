<?php
// FROM HASH: 298c667684da9346a9d937b84cfdb4dd
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.footer-stretched > div
{
	padding-left: 0;
	padding-right: 0;
}
.xb-footer-block .p-header-logo
{
	max-width: none;
}
.p-footer-default
{
	.xf-publicFooter();

	a
	{
		.xf-publicFooterLink();
	}
	.p-body & { margin-top: @xf-paddingLargest; }
}
.p-footer-inner
{
    max-width: @xf-pageWidthMax;
    padding: 0 @xf-pageEdgeSpacer;
    margin: 0 auto;
	.p-body & { max-width: 100% !important; padding-right: 0; padding-left: 0; }
}

.p-footer-row
{
	.m-clearFix();
}

.p-footer-row-main
{
	float: left;
}

.p-footer-row-opposite
{
	float: right;
}

.p-footer-linkList
{
	.m-listPlain();
	.m-clearFix();

	> li
	{
		float: left;
		margin-right: .5em;

		&:last-child
		{
			margin-right: 0;
		}

		a
		{
			padding: 2px 4px;
			border-radius: @xf-borderRadiusSmall;

			&:hover
			{
				text-decoration: none;
				background-color: fade(@xf-publicFooterLink--color, 10%);
			}
		}
	}
}

.p-footer-rssLink
{
	> span
	{
		position: relative;
		top: -1px;

		display: inline-block;
		width: 1.44em;
		height: 1.44em;
		line-height: 1.44em;
		text-align: center;
		font-size: .8em;
		background-color: #FFA500;
		border-radius: 2px;
	}

	.fa-rss
	{
		color: white;
	}
}

.p-footer-copyright
{
	.xf-xbCopyrightCSS();
	.p-pe-copyright a
	{
		color: @xf-xbCopyrightCSS--color;
	}
	.p-footer-debug
	{
		margin-top: 10px;
		a { color: @xf-xbCopyrightCSS--color; }
		.pairs > dt { color: inherit; }
	}
	.p-footer-default { font-size: @xf-xbCopyrightCSS--font-size; }
}
.p-footer--container
{
	.m-clearFix();
}
.p-footer-row-main
{
	margin-right: .5em;
}
.p-footer-linkList .shareButtons--iconic .shareButtons-button
{
    font-size: @xf-fontSizeSmall;
	line-height: 1;
}
';
	if ($__templater->func('property', array('xbFooterLocation', ), false) == 'copyright') {
		$__finalCompiled .= '
.p-footer-copyright--flex
{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
	width: 100%;
	.copyright-right { margin-left: auto; }
	.p-footer-default
	{
		background: none;
		border-width: 0;
		padding: 0 !important;
		.p-footer-inner
		{
			max-width: 100% !important;
			padding: 0 !important;
			> * { float: none; }
		}
		
	}
}
@media (max-width: @xf-responsiveWide)
{
	.p-footer--container
	{
		.p-footer-copyright--flex
		{
			display: block;
		}
	}
}
';
	}
	$__finalCompiled .= '
';
	if (!$__templater->func('property', array('xbStretchFooter', ), false)) {
		$__finalCompiled .= '
.p-footer--container
{
	max-width: @xf-pageWidthMax;
	margin: 0 auto;
	padding: 0 @xf-pageEdgeSpacer;
	.p-footer-inner
	{
		max-width: 100%;
		padding: 0;
	}
	.ForumStyleClassic &
	{
		padding: 0;
	}
}
@media (max-width: @xf-responsiveEdgeSpacerRemoval)
{
	.XenBase .p-footer--container
	{
		padding: 0;
	}
}
';
	}
	$__finalCompiled .= '


';
	if ($__templater->func('property', array('xbFooterLocation', ), false) == 'copyright') {
		$__finalCompiled .= '
@footer_responsive: @xf-responsiveWide;
';
	} else {
		$__finalCompiled .= '
@footer_responsive: @xf-responsiveMedium;
';
	}
	$__finalCompiled .= '
@media (max-width: @footer_responsive)
{
	.p-footer--container
	{
		.p-footer-default, .p-footer-custom, .p-footer-copyright
		{
			padding-left: 10px;
			padding-right: 10px;
			font-size: @xf-fontSizeSmaller;
			.p-footer-inner
			{
				padding-right: 0;
				padding-left: 0;
			}
			.p-footer-linkList > li a
			{
				padding-left: 0;
			}
		}
		.p-footer-copyright .p-footer-debug
		{
			text-align: left;
			margin-top: 10px;
		}
		.copyright-right
		{
			margin-top: 10px;
		}
	}
	.p-footer-row-main
	{
		margin-bottom: 10px;
	}
	.p-footer-row-main,
	.p-footer-row-opposite
	{
		float: none;
	}


	.p-footer-copyright
	{
		text-align: left;
		padding: 10px 5px; // aligns with other links
	}
}
@media (max-width: @xf-responsiveNarrow)
{
	.p-footer--container
	{
		.p-footer-default, .p-footer-custom, .p-footer-copyright
		{
			padding-left: 10px;
			padding-right: 10px;
			.p-footer-inner
			{
				padding-right: 0;
				padding-left: 0;
			}
			.p-footer-linkList > li a
			{
				padding-left: 0;
			}
		}
		span.p-pe-copyright
		{
			display: block;
			margin-top: 10px;
		}
	}
}
@media (min-width: (@xf-responsiveMedium + 1))
{
	.ForumStyleBoxed .footer-stretched > div
	{
		padding-right: @xf-paddingLargest;
		padding-left: @xf-paddingLargest;
	}	
}
@media (max-width: @xf-responsiveEdgeSpacerRemoval)
{
	.p-body .p-footer-default
	{
		margin-right: -@xf-pageEdgeSpacer;
		margin-left: -@xf-pageEdgeSpacer;
	}
}

';
	if ($__templater->func('property', array('xbFooter', ), false)) {
		$__finalCompiled .= '
.p-footer-custom
{	
	.xf-xbCustomFooterCSS();
	.xb-footer--wrapper
	{
	display: flex;
	flex-wrap: wrap;
	align-items: stretch;
	width: auto;
	}
	a
	{
		color: @xf-xbCustomFooterLinks--color;
	}
	';
		if (($__templater->func('property', array('xbShareIconStyle', ), false) == 'circle') OR ($__templater->func('property', array('xbShareIconStyle', ), false) == 'blocked')) {
			$__finalCompiled .= '
	a.shareButtons-button
	{
		color: #FFF;
	}
	';
		}
		$__finalCompiled .= '
		.xb-footer-block
		{
			.xf-xbCustomFooterBlock();
				&:first-child
				{
					padding-left: 0;
					border-left-width: 0;
				}
				&:last-child
				{
					padding-right: 0;
					border-right-width: 0;
				}
				h3
				{
					.xf-xbFooterHeaders();
					a
					{
						color: @xf-xbFooterHeaders--color;
					}
				}
				p
				{
					line-height: 1.8;
				}
				ul
				{
					list-style-type: none;
					padding-left: 0;
					li a
					{
						padding: 12px 0;
						display: inline-block;
						.m-transition();
						.xf-xbCustomFooterLinks();
						&.avatar:hover
						{
							padding: 0;
						}
						&:hover
						{
							.xf-xbCustomFooterLinksHover();
						}
					}
					li > i
					{
						.xf-xbCustomFooterIcon();
					}
					li:last-child a
					{
						border-bottom-width: 0;
						padding-bottom: 0;
					}
					li:first-child a
					{
						border-top-width: 0;
						padding-top: 0;
					}
				}
				.block-container
				{
					background-color: transparent;
					border-width: 0;
					box-shadow: none;
					a
					{
						padding: 0;
						&.shareButtons-button
						{
							padding: 6px;
						}
					}
					> *
					{
						padding-left: 0;
						padding-right: 0;
					}
					.block-body
					{
						.xf-xbFooterBlockBody();
					}
					.block-row
					{
						padding: 0;
					}
				}
			.pairs
			{
				padding: 12px 0;
				> dt
				{
					color: @xf-xbCustomFooterCSS--color;
				}
			}
			.block-footer
			{
				background: none;
				border-width: 0;
			}
		}
		.xb-footer-block-1
		{
			width: @xf-xbFooterBlock1Width;
		}
		.xb-footer-block-2
		{
			width: @xf-xbFooterBlock2Width;
		}
		.xb-footer-block-3
		{
			width: @xf-xbFooterBlock3Width;
		}
		.xb-footer-block-4
		{
			width: @xf-xbFooterBlock4Width;
		}
}
.p-footer-social
{
	
	margin: @xf-elementSpacer auto;
	padding: (@xf-elementSpacer + @xf-xbCustomFooterCSS--padding) 0;
	text-align: center;
	border-top: 1px solid xf-diminish(@xf-xbCustomFooterCSS--background-color, 5%);
	border-bottom: 1px solid xf-diminish(@xf-xbCustomFooterCSS--background-color, 5%);
	&.p-footer-socialTop { border-top-width: 0px; padding-top: 0; }
	&.p-footer-socialBottom { border-bottom-width: 0; padding-bottom: 0;  }
	a { float: none; display: inline-block; }
	h3 { margin-top: 0; padding-top: 0; font-size: @xf-fontSizeLargest; }
}
@media (max-width: @xf-responsiveWide)
{
	.XenBase .xb-footer-block
	{
		margin: 0 ((@xf-pageEdgeSpacer) / 2) @xf-elementSpacer;
		min-width: @xf-sidebarWidth;
		flex: 1 1 @xf-sidebarWidth;
		padding: 0;
		h3 { margin-top: 0; }
	}
}
@media (max-width: @xf-responsiveMedium)
{
	.XenBase .xb-footer-block
	{
		flex: 1 1 100%;
		padding-right: 0;
		margin: 0;
		padding-left: 0;
		min-width: 0;
		.block-container
		{
			margin-left: 0;
			margin-right: 0;
		}
	}
	';
		if ($__templater->func('property', array('xbDisableResponsive', ), false)) {
			$__finalCompiled .= '
	.XenBase .p-footer-custom
	{
		display: none;
	}
	';
		}
		$__finalCompiled .= '
}
';
	}
	return $__finalCompiled;
});