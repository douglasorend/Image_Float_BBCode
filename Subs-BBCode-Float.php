<?php
/**********************************************************************************
* Subs-BBCode-Float.php
***********************************************************************************
***********************************************************************************
* This program is distributed in the hope that it is and will be useful, but      *
* WITHOUT ANY WARRANTIES; without even any implied warranty of MERCHANTABILITY    *
* or FITNESS FOR A PARTICULAR PURPOSE.                                            *
**********************************************************************************/

function BBCode_Float(&$bbc)
{
	$bbc[] = array(
		'tag' => 'imgleft',
		'type' => 'unparsed_content',
		'parameters' => array(
			'alt' => array('optional' => true),
			'width' => array('optional' => true, 'value' => ' width="$1"', 'match' => '(\d+)'),
			'height' => array('optional' => true, 'value' => ' height="$1"', 'match' => '(\d+)'),
			'margin' => array('optional' => true, 'value' => ' margin: $1px;', 'match' => '(\d+)'),
			'margin-left' => array('optional' => true, 'value' => ' margin-left: $1px;', 'match' => '(\d+)'),
			'margin-right' => array('optional' => true, 'value' => ' margin-right: $1px;', 'match' => '(\d+)'),
			'margin-top' => array('optional' => true, 'value' => ' margin-top: $1px;', 'match' => '(\d+)'),
			'margin-bottom' => array('optional' => true, 'value' => ' margin-bottom: $1px;', 'match' => '(\d+)'),
		),
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
		'parameters' => array(
			'alt' => array('optional' => true),
			'width' => array('optional' => true, 'value' => ' width="$1"', 'match' => '(\d+)'),
			'height' => array('optional' => true, 'value' => ' height="$1"', 'match' => '(\d+)'),
			'margin' => array('optional' => true, 'value' => ' margin: $1px;', 'match' => '(\d+)'),
			'margin-left' => array('optional' => true, 'value' => ' margin-left: $1px;', 'match' => '(\d+)'),
			'margin-right' => array('optional' => true, 'value' => ' margin-right: $1px;', 'match' => '(\d+)'),
			'margin-top' => array('optional' => true, 'value' => ' margin-top: $1px;', 'match' => '(\d+)'),
			'margin-bottom' => array('optional' => true, 'value' => ' margin-bottom: $1px;', 'match' => '(\d+)'),
		),
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

?>