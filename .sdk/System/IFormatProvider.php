<?php
namespace System;
interface IFormatProvider
{


	/**
	 * @param \System\Type $formatType
	 * @return \System\Object|object
	 */
	public function GetFormat($formatType);
}