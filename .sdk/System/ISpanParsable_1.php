<?php
namespace System;
interface ISpanParsable_1
{

	/**
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @return \TSelf
	 */
	public static function Parse($s, $provider);
	/**
	 * @param \System\ReadOnlySpan_1 $s [generic: System\Char]
	 * @param \System\IFormatProvider $provider
	 * @param \TSelf& &$result
	 * @return \System\Boolean|bool
	 */
	public static function TryParse($s, $provider, &$result);
}