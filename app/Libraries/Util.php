<?php

namespace App\Libraries;

class Util
{
	public function printText($text = '')
	{
		return $text;
	}

	/**
     * Convert base64 image format to image
     *
     */
	public function base64_decode_to_image($value = '')
	{
		$value = str_replace('data:image/png;base64,', '', $value);
		$value = str_replace(' ', '+', $value);
		$image = base64_decode($value);
		return $image;
	}
}