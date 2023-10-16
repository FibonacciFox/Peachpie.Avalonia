<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
interface IParsable_1
{
	/**
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 */
	public function Parse($s, $provider);
	/**
	 * @param \System\String|string $s
	 * @param \System\IFormatProvider $provider
	 * @param \System\TSelf& $result
	 */
	public function TryParse($s, $provider, $result);
}
