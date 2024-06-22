<?php
namespace System;
interface IParsable_1
{


	/**
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @return \TSelf
	 */
	public static function Parse($s, $provider);
	/**
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \TSelf& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryParse($s, $provider, &$result);
}