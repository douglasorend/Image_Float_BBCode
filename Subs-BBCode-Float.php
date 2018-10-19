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
			'width' => array('optional' => true, 'value' => ' width="$1"', 'match' => '(\d+)'),
			'height' => array('optional' => true, 'value' => ' height="$1"', 'match' => '(\d+)'),
		),
		'content' => '<img src="$1" style="float:left; margin:15px;" {width}{height} />',
		'validate' => isset($disabled['imgleft']) ? null : create_function('&$tag, &$data, $disabled', '
			$data = strtr($data, array(\'<br />\' => \'\'));
			if (strpos($data, \'http://\') !== 0 && strpos($data, \'https://\') !== 0)
				$data = \'http://\' . $data;
		'),
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgleft',
		'type' => 'unparsed_content',
		'content' => '<img src="$1" style="float:left; margin:15px;" />',
		'validate' => isset($disabled['imgleft']) ? null : create_function('&$tag, &$data, $disabled', '
			$data = strtr($data, array(\'<br />\' => \'\'));
			if (strpos($data, \'http://\') !== 0 && strpos($data, \'https://\') !== 0)
				$data = \'http://\' . $data;
		'),
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgright',
		'type' => 'unparsed_content',
		'parameters' => array(
			'width' => array('optional' => true, 'value' => ' width="$1"', 'match' => '(\d+)'),
			'height' => array('optional' => true, 'value' => ' height="$1"', 'match' => '(\d+)'),
		),
		'content' => '<img src="$1" style="float:right; margin:15px;" {width}{height} />',
		'validate' => isset($disabled['imgright']) ? null : create_function('&$tag, &$data, $disabled', '
			$data = strtr($data, array(\'<br />\' => \'\'));
			if (strpos($data, \'http://\') !== 0 && strpos($data, \'https://\') !== 0)
				$data = \'http://\' . $data;
		'),
		'disabled_content' => '($1)',
	);
	$bbc[] = array(
		'tag' => 'imgright',
		'type' => 'unparsed_content',
		'content' => '<img src="$1" style="float:right; margin:15px;" />',
		'validate' => isset($disabled['imgright']) ? null : create_function('&$tag, &$data, $disabled', '
			$data = strtr($data, array(\'<br />\' => \'\'));
			if (strpos($data, \'http://\') !== 0 && strpos($data, \'https://\') !== 0)
				$data = \'http://\' . $data;
		'),
		'disabled_content' => '($1)',
	);
}

?>