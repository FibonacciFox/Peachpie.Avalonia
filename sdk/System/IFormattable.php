<?php
namespace System;
/**
 */
interface IFormattable
{
	/**
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 */
	public function ToString($format, $formatProvider);
}
