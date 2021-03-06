<?php
// FROM HASH: 7b70fcd29bd74d4596be36450d16f379
return array('macros' => array(), 'code' => function($__templater, array $__vars)
{
	$__finalCompiled = '';
	$__finalCompiled .= '.block
{
	&.block--paymentInitiate
	{
		margin-bottom: 0;
	}
}

.input
{
	&.braintree-hosted-fields-focused
	{
		.xf-inputFocus();
	}

	&.braintree-hosted-fields-invalid
	{
		.m-invalidInput();
	}

	&.StripeElement
	{
		&.StripeElement--focus
		{
			.xf-inputFocus();
		}

		&.StripeElement--invalid
		{
			.m-invalidInput();
		}
	}
}

.button
{
	&.button--apple
	{
		border-color: black;
		background-color: black;
		background-image: -webkit-named-image(apple-pay-logo-white);
		background-position: 50% 50%;
		background-repeat: no-repeat;
		background-size: 100% calc(~\'60% + 2px\');
		transition: background-color .15s;
		min-width: 100px;

		&:hover,
		&:active,
		&:focus
		{
			background-color: rgba(0,0,0,0.8);
		}
	}
}

.m-invalidInput()
{
	border: @xf-borderSize solid #c84448;
	background: #fde9e9;
	color: #c84448 !important;
}';
	return $__finalCompiled;
});