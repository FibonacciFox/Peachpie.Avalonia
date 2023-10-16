<?php
namespace System\Globalization;
/**
 */
class StringParser extends \System\ValueType
{
	/**
	 * @return \System\Void|void
	 */
	protected  function NextChar(){}
	/**
	 * @return \System\Char
	 */
	protected  function NextNonDigit(){}
	/**
	 * @param \System\ReadOnlySpan_1 $input
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @return \System\Boolean
	 */
	protected  function TryParse($input, $result){}
	/**
	 * @param \System\Int32|int $max
	 * @param \System\Int32& $i
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @return \System\Boolean
	 */
	protected  function ParseInt($max, $i, $result){}
	/**
	 * @param \System\Int64& $time
	 * @param \System\Globalization\TimeSpanResult& $result
	 * @return \System\Boolean
	 */
	protected  function ParseTime($time, $result){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SkipBlanks(){}
}
