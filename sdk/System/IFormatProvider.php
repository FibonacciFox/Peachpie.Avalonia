<?php
namespace System;
/**
 */
interface IFormatProvider
{
	/**
	 * @param \System\Type $formatType
	 */
	public function GetFormat($formatType);
}
