<?php
// FROM HASH: 102d84fe737bc04e206cef8db04a47ef
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '/* Contents - Ctrl-F to search for them
––––––––––––––––––––––––––––––––––––––––––––––––––
- XBDividers
- XBTitles
- XBMisc
- XBList
- XBGrid
*/

.xb-assets
{
	/* XBDividers */
	.xb-divider1
	{
		background-color: @xf-borderColorLight;
		height: 2px;
		display: block;
		position: relative;
		margin: 40px auto;
		&.xb-divider--accented { background-color: @xf-borderColorAccentContent; } 
	}
	.xb-divider2
	{
		background-color: @xf-borderColorLight;
		height: 1px;
		display: block;
		position: relative;
		margin: 40px auto;
		span
		{
			position: absolute;
			right: 0;
			left: 0;
			margin: 0 auto;
			height: 5px;
			width: 100px;
			top: -2px;
			background-color: @xf-borderColorFeature;
		}
		&.xb-divider--wide span { max-width: 400px; width: 100%; }
	}
	.xb-divider3
	{
		background-color: @xf-borderColorLight;
		height: 1px;
		display: block;
		position: relative;
		margin: 40px auto;
		span
		{
			position: absolute;
			left: 0;
			right: 0;
			text-align: center;
			margin: 0 auto;
			top: -20px;
		}
		&.xb-divider3--space span
		{
			padding: 0 20px;
			width: 80px;
			background-color: @xf-contentBg;
		}
		i
		{
			display: inline-block;
			text-align: center;
			background-color: @xf-contentHighlightBg;
			border: 1px solid xf-intensify(@xf-contentHighlightBg, 5%);
			border-radius: 100%;
			width: 40px;
			height: 40px;
			line-height: 40px;
			font-size: 20px;
			color: @xf-textColorMuted;
		}
	}
	.xb-divider4
	{
		background-color: @xf-borderColorLight;
		height: 1px;
		display: block;
		position: relative;
		margin: 40px auto;
		span
		{
			position: absolute;
			left: 0;
			right: 0;
			text-align: center;
			margin: 0 auto;
			top: -20px;
			padding: 0 20px;
			width: 80px;
			background-color: @xf-contentBg;
		}
		i
		{
			display: inline-block;
			text-align: center;
			border-radius: 100%;
			width: 40px;
			height: 40px;
			line-height: 40px;
			font-size: 20px;
			color: @xf-textColorMuted;
		}
	}
	/* XBTitles */
	.xb-title1
	{
		position: relative;
		&:before
		{
			content: "";
			height: 0;
			left: auto;
			border-top: 1px solid @xf-borderColor;
			position: absolute;
			right: 0;
			top: 50%;
			width: 100%;
			z-index: 5;
		}
		*
		{
			padding-right: 25px;
			background-color: @xf-contentBg;
			display: inline-block;
			z-index: 10;
			position: relative;
		}
		
	}
	.xb-title2
	{
		position: relative;
		&:before, &:after
		{
			content: "";
			height: 0;
			left: auto;
			border-top: 1px solid @xf-borderColor;
			position: absolute;
			right: 0;
			width: 100%;
			z-index: 5;
		}
		&:before
		{
			top: 47%;
		}
		&:after
		{
			top: 53%;
		}
		*
		{
			padding-right: 25px;
			background-color: @xf-contentBg;
			display: inline-block;
			z-index: 10;
			position: relative;
		}
		
	}
	.xb-title3
	{
		position: relative;
		&:after
		{
			border-bottom: 3px solid @xf-borderColorAccentContent;
			width: 100px;
			height: 0px;
			content: "";
			display: inline-block;
			position: absolute;
			bottom: -10px;
		}
		
	}
	.xb-title4
	{
		*
		{
		position: relative;
		padding-bottom: 15px;
		margin-bottom: 15px;
		border-bottom: 1px solid @xf-borderColor;
		}
	}
	.xb-title5
	{
		position: relative;
		background-color: @xf-borderColor;
		padding: 10px 20px;
		*
		{
			padding: 5px 20px;
			background-color: @xf-contentBg;
			display: inline-block;
			z-index: 10;
			position: relative;
			margin: 0;
		}
	}
	/* XBMisc */
	a:not(.button)
	{
		border-bottom: 1px dotted @xf-linkColor;
		&:hover { text-decoration: none; border-bottom-style: solid; }
	}
	p
	{
		line-height: 1.6;
	}
	ul li, ol li
	{
		padding: 5px 0;
	}
	h1, h2, h3, h4, h5, h6
	{
		&.featured-color { color: @xf-textColorFeature; }
	}
	xmp
	{
		background-color: @xf-contentAltBg;
		border-left: 5px solid xf-intensify(@xf-contentAltBg, 20%);
		padding: 20px;
		margin: 15px 0;
	}
	.center
	{
		text-align: center;
	}
	.p-body & .pt0
	{
		padding-top: 0;
	}
	.p-body & .pb0
	{
		padding-bottom: 0;
	}
	.p-body & .pt10
	{
		padding-top: 10;
	}
	.p-body & .pb10
	{
		padding-bottom: 10;
	}
	.p-body & .mt0
	{
		margin-top: 0;
	}
	.p-body & .mb0
	{
		margin-bottom: 0;
	}
	.p-body & .mt10
	{
		margin-top: 10px;
	}
	.p-body & .mb10
	{
		margin-bottom: 10px;
	}
	.shadow1
	{
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	}
	.shadow2
	{
		box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
	}
	.shadow3
	{
		box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
	}
	.important-text
	{
		color: #e88787;
	}
	.highlight-text
	{
		background-color: @xf-contentHighlightBg;
		padding: 2px 5px;
		border: 1px solid xf-intensify(@xf-contentAltBg, 20%);
	}
	/* XBLists */
	.xb-list--arrow1, .xb-list--arrow2, .xb-list--arrow3
	{
		.m-listPlain();
		padding: 15px 0;
		li:before
		{
		.m-faBase();
		font-size: inherit;
		text-rendering: auto;
		-webkit-font-smoothing: antialiased;
		margin-right: 8px;
		}
	}
	.xb-list--bordered li
	{
		border-bottom: 1px solid @xf-borderColor;
		padding: 5px 0;
		margin-bottom: 5px;
		a { border-bottom-width: 0; }
		&:last-child { margin-bottom: 0; padding-bottom: 0; border-bottom-width: 0px; }
	}
	.xb-list--arrow1 li:before { .m-faContent("\\f105"); }
	.xb-list--arrow2 li:before { .m-faContent("\\f0da"); }	
	.xb-list--arrow3 li:before { .m-faContent("\\f00c"); }	
	
	.xb-iconList
	{
		.m-listPlain();
		.m-clearFix();
		li
		{
			margin-bottom: 20px;
			padding: 0 10px;
		}
		i
		{
			background-color: @xf-paletteAccent1;
			color: contrast(@xf-paletteAccent1);
			float: left;
			margin-right: 10px;
			vertical-align: middle;
			width: 50px;
			height: 50px;
			line-height: 50px;
			font-size: 28px;
			text-align: center;
		}
		.xb-iconList--right
		{
			padding-left: 60px;
			h4 { margin: 0; }
			p { padding-top: 0; margin-top: 0; }
		}
		&.xb-iconList--cols2 li
		{
			float: left;
			width: 50%;
		}
		&.xb-iconList--cols3 li
		{
			float: left;
			width: 33.3%;
		}
	}
	/* XBGrid */
	.xb-grid
	{
		display: flex;
		flex-flow: row; 
		flex-wrap: wrap;
	}
	.xb-grid--content
	{
		padding: 15px 20px;
		margin-bottom: 1em;
	}
	.demo-purposes
	{
		background-color: @xf-contentAltBg;
		border: 1px solid xf-intensify(@xf-contentAltBg, 20%);
		border-radius: 3px;
	}
	.xb-gridCell
	{
		flex: 1;
	}

	@gutter: 1em;
	.xb-gridGutters
	{
		margin-left: -@gutter;
		.xb-gridCell
		{
			padding-left: @gutter;
		} 
	}

	.xb-gridCell--top
	{
		align-self: flex-start;
	}
	.xb-gridCell--bottom
	{
		align-self: flex-end;
	}
	.xb-gridCell--center
	{
		align-self: center;
	}
	/* Mobile first */
	.xb-gridCols2 > .xb-grid--cell
	{
		flex: 0 0 100%; 
	}
	.xb-gridCols3 > .xb-grid--cell
	{
		flex: 0 0 100%; 
	}

	.xb-gridCols4 > .xb-grid--cell
	{
		flex: 0 0 100%;
	}

	.xb-gridCols6 > .xb-grid--cell
	{
		flex: 0 0 (50% - @gutter); 
	}
	.xb-gridCols12 > .xb-grid--cell
	{
		  flex: 0 0 (33.3333% - @gutter); 
	}

	.xb-grid1of2 > .xb-grid--cell,
	.xb-grid1of4 > .xb-grid--cell:first-of-type,
	.xb-grid1of3 > .xb-grid--cell:first-of-type
	{
		flex: 0 0 100%;
	}
	.xb-grid1of6 > .xb-grid--cell:first-of-type
	{
		flex: 0 0 50%;
	}
	.xb-gridFull > .xb-grid--cell
	{
		flex: 0 0 100%;
	}

	/* Medium screens */
	@media (min-width: @xf-responsiveMedium )
	{
		.xb-gridCols4 > .xb-gridCell
		{
			flex: 0 0 calc(50% - @gutter);     
		}
		.xb-gridCols6 > .xb-gridCell
		{
			flex: 0 0 calc(33.3333% - @gutter);  
		}
		.xb-gridCols12 > .xb-gridCell
		{
			flex: 0 0 calc(16.6666% - @gutter);  
		}
		.xb-grid1of2 > .xb-gridCell
		{
			flex: 0 0 50%;
		}
		.xb-grid1of6 > .xb-gridCell:first-of-type
		{
			flex: 0 0 30%;
		}
		.xb-grid1of4 > .xb-gridCell:first-of-type
		{
			flex: 0 0 50%;
		}
		.xb-grid1of3 > .xb-gridCell:first-of-type
		{
			flex: 0 0 100%;
		}
	}

	/* Large screens */
	@media (min-width: @xf-responsiveWide)
	{
		.xb-gridCols2 > .xb-gridCell,
		.xb-gridCols3 > .xb-gridCell,
		.xb-gridCols4 > .xb-gridCell,
		.xb-gridCols6 > .xb-gridCell,
		.xb-gridCols12 > .xb-gridCell
		{
			flex: 1;  
		}
		.xb-grid1of2 > .xb-gridCell
		{
			flex: 0 0 50%;
		}
		.xb-grid1of6 > .xb-gridCell:first-of-type
		{
			flex: 0 0 16.6666%;
		}
		.xb-grid1of4 > .xb-gridCell:first-of-type
		{
			flex: 0 0 25%;
		}
		.xb-grid1of3 > .xb-gridCell:first-of-type
		{
			flex: 0 0 30%;
		}
	}
}';
	return $__finalCompiled;
});