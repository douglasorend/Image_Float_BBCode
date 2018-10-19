<?php
/**********************************************************************************
* Subs-BBCode-Float.php
***********************************************************************************
* This mod is licensed under the 2-clause BSD License, which can be found here:
*	http://opensource.org/licenses/BSD-2-Clause
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/
if (!defined('SMF')) 
	die('Hacking attempt...');

function BBCode_Float_parameters(&$params1, &$params2)
{
	// Define the parameters:
	$params1 = array(
		'alt' => array('optional' => true),
		'width' => array('optional' => true, 'value' => ' width="$1"', 'match' => '(\d+)'),
		'height' => array('optional' => true, 'value' => ' height="$1"', 'match' => '(\d+)'),
		'margin' => array('optional' => true, 'value' => ' margin: $1px;', 'match' => '(\d+)'),
		'margin-left' => array('optional' => true, 'value' => ' margin-left: $1px;', 'match' => '(\d+)'),
		'margin-right' => array('optional' => true, 'value' => ' margin-right: $1px;', 'match' => '(\d+)'),
		'margin-top' => array('optional' => true, 'value' => ' margin-top: $1px;', 'match' => '(\d+)'),
		'margin-bottom' => array('optional' => true, 'value' => ' margin-bottom: $1px;', 'match' => '(\d+)'),
	);
	$params2 = array_merge($params1, array(
		'border-style' => array('value' => ' border-style: $1;', 'match' => '(dotted|dashed|solid|double|groove|ridge|inset|outset)', 'validate' => 'ILA_Param_Border_Style'),
		'border-width' => array('optional' => true, 'value' => ' border-width: $1px;', 'match' => '(\d+)'),
		'border-color' => array('optional' => true, 'value' => ' border-color: $1;', 'match' => '(#[\da-fA-F]{3}|#[\da-fA-F]{6}|[A-Za-z]{1,20}|rgb\(\d{1,3}, ?\d{1,3}, ?\d{1,3}\))'),
	));
}

function BBCode_Float(&$bbc)
{
	// Define the BBCodes:
	BBCode_Float_parameters($params1, $params2);
	$bbc[] = array(
		'tag' => 'imgleft',
		'type' => 'unparsed_content',
		'parameters' => $params2,
		'content' => '<img src="$1" style="align:left; margin:15px;{margin}{margin-left}{margin-right}{margin-top}{margin-bottom}{border-style}{border-width}{border-color}" alt="{alt}"{width}{height} class="bbc_img resized" />',
		'validate' => 'BBCode_Float_Validate',
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgleft',
		'type' => 'unparsed_content',
		'parameters' => $params1,
		'content' => '<img src="$1" style="align:left; margin:15px;{margin}{margin-left}{margin-right}{margin-top}{margin-bottom}" alt="{alt}"{width}{height} class="bbc_img resized" />',
		'validate' => 'BBCode_Float_Validate',
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgleft',
		'type' => 'unparsed_content',
		'content' => '<img src="$1" style="float:left; margin:15px;" class="bbc_img resized" />',
		'validate' => 'BBCode_Float_Validate',
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgright',
		'type' => 'unparsed_content',
		'parameters' => $params2,
		'content' => '<img src="$1" style="align:right;{margin}{margin-left}{margin-right}{margin-top}{margin-bottom}{border-style}{border-width}{border-color}" alt="{alt}"{width}{height} class="bbc_img resized" />',
		'validate' => 'BBCode_Float_Validate',
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgright',
		'type' => 'unparsed_content',
		'parameters' => $params1,
		'content' => '<img src="$1" style="align:right;{margin}{margin-left}{margin-right}{margin-top}{margin-bottom}" alt="{alt}"{width}{height} class="bbc_img resized" />',
		'validate' => 'BBCode_Float_Validate',
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgright',
		'type' => 'unparsed_content',
		'content' => '<img src="$1" style="float:right; margin:15px;" class="bbc_img resized" />',
		'validate' => 'BBCode_Float_Validate',
		'disabled_content' => '($1)',
	);
}

function BBCode_Float_Validate(&$tag, &$data, &$disabled)
{
	$data = strtr($data, array('<br />' => ''));
	if (strpos($data, 'http://') !== 0 && strpos($data, 'https://') !== 0)
		$data = 'http://' . $data;
	$tag['content'] = str_replace(' style=""', '', $tag['content']);
}

function BBCode_Float_Button(&$buttons)
{
	global $txt;

	$buttons[count($buttons) - 1][] = array(
		'image' => 'imgleft',
		'code' => 'imgleft',
		'description' => $txt['imgleft'],
		'before' => '[imgleft]',
		'after' => '[/imgleft]',
	);
	$buttons[count($buttons) - 1][] = array(
		'image' => 'imgright',
		'code' => 'imgright',
		'description' => $txt['imgright'],
		'before' => '[imgright]',
		'after' => '[/imgright]',
	);
}

function BBCode_Float_Fix_Param_Order(&$message)
{
	global $context;

	BBCode_Float_parameters($dummy, $float_params);
	foreach (array('imgleft', 'imgright') as $tag)
	{
		$pattern = '#\[' . $tag . ' (.+?)\]#i' . ($context['utf8'] ? 'u' : '');
		preg_match_all($pattern, $message, $matches);
		$matches = array_unique($matches[0]);
		asort($matches);
		foreach ($matches as $match)
		{
			$params = explode('|', str_replace(' ', '|', str_replace(']', ' ]', $match)));
			unset($params[0]);
			unset($params[count($params)]);
			$order = array();
			$old = '';
			foreach ($params as $id => $param)
			{
				if (strpos($param, '=') === false && !empty($old))
				{
					$order[$old] .= ' ' . $param;
					continue;
				}
				$key = explode('=', $param);
				if (!isset($order[$key[0]]))
					$order[$key[0]] = $key[1];
				$old = $key[0];
			}
			$out = '[' . $tag;
			foreach ($float_params as $key => $ignore)
				$out .= (isset($order[$key]) ? ' ' . $key . '=' . $order[$key] : '');
			$message = str_replace($match, $out . ']', $message);
		}
	}
}

?>