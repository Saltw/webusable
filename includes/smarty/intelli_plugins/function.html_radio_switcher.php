<?php

function smarty_function_html_radio_switcher(array $params)
{
	$name = $params['name'];
	$value = $params['value'];
	$id = empty($params['id']) ? $name : $params['id'];

	if (isset($params['conf']))
	{
		$name = 'v[' . $name . ']';
	}

	$attr = $value ? ' checked' : '';
	if (isset($params['disabled']))
	{
		$attr .= ' disabled';
	}

	$title_on = NULL;
	$title_off = NULL;

    if (isset($params['titleOn']))
	{
		$titleOn = $params['titleOn'];
		$title_on = "title='{$titleOn}'";
	}

	if (isset($params['titleOff']))
	{
		$titleOff = $params['titleOff'];
		$title_off = "title='{$titleOff}'";
	}

	echo <<<OUT
<input type="hidden" value="0" name="{$name}">
<div class="js-input-switch make-switch" id="switch-{$id}" data-animated="false" data-on="success" data-off="danger" data-on-label="&lt;i class='i-checkmark' {$title_on} &gt;&lt;/i&gt;" data-off-label="&lt;i class='i-close' {$title_off} &gt;&lt;/i&gt;">
	<input type="checkbox" name="{$name}" id="{$id}" value="{$value}"{$attr}>
</div>
OUT;
}
