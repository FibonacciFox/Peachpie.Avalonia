<?php
namespace System;
interface IFormattable
{

	/**
	 * @param \System\String|string $format
	 * @param \System\IFormatProvider $formatProvider
	 * @return \System\String|string
	 */
	public function ToString($format, $formatProvider);
}