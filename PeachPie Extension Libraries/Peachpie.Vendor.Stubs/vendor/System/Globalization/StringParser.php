<?php
namespace System\Globalization;
final class StringParser extends \System\ValueType
{

	/**
	 * @return \System\Void|void
	 */
	protected function NextChar(){}
	/**
	 * @return \System\Char
	 */
	protected function NextNonDigit(){}
	/**
	 * @param \System\ReadOnlySpan_1 $input [generic: System\Char]
	 * @param \System\Globalization\TimeSpanParse+TimeSpanResult& $result
	 * @return \System\Boolean|bool
	 */
	protected function TryParse($input, $result){}
	/**
	 * @param \System\Int32|int $max
	 * @param \System\Int32& &$i
	 * @param \System\Globalization\TimeSpanParse+TimeSpanResult& $result
	 * @return \System\Boolean|bool
	 */
	protected function ParseInt($max, &$i, $result){}
	/**
	 * @param \System\Int64& &$time
	 * @param \System\Globalization\TimeSpanParse+TimeSpanResult& $result
	 * @return \System\Boolean|bool
	 */
	protected function ParseTime(&$time, $result){}
	/**
	 * @return \System\Void|void
	 */
	protected function SkipBlanks(){}
}