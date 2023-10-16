<?php
namespace System;
/**
 */
interface ICustomFormatter
{
	/**
	 * @param \System\String|string $format
	 * @param \System\Object|object $arg
	 * @param \System\IFormatProvider $formatProvider
	 */
	public function Format($format, $arg, $formatProvider);
}
