<?php
namespace System\Globalization;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TimeSpanParseOverride {
	/**
	 * @param \System\Globalization\TimeSpanParse+TTT $type
	 */
	#[MethodOverride]public function __construct_1 ($type){}
	/**
	 * @param \System\Int32|int $number
	 */
	#[MethodOverride]public function __construct_2 ($number){}
	/**
	 * @param \System\Int32|int $number
	 * @param \System\Int32|int $leadingZeroes
	 */
	#[MethodOverride]public function __construct_3 ($number, $leadingZeroes){}
	/**
	 * @param \System\Globalization\TimeSpanParse+TTT $type
	 * @param \System\Int32|int $number
	 * @param \System\Int32|int $leadingZeroes
	 * @param \System\ReadOnlySpan_1 $separator [generic: System\Char]
	 */
	#[MethodOverride]public function __construct_4 ($type, $number, $leadingZeroes, $separator){}
}
final class TimeSpanToken extends \System\ValueType
{
	use TimeSpanParseOverride;
	/**
	 * @field
	 * @var \System\Globalization\TimeSpanParse+TTT
	 */
	protected $_ttt;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_num;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $_zeroes;
	/**
	 * @field
	 * @var \System\ReadOnlySpan_1[System\Char]
	 */
	protected $_sep;
	/**
	 * @return \System\Boolean|bool
	 */
	public function NormalizeAndValidateFraction(){}
	/**
	 * @uses TimeSpanTokenOverride::__construct_1 <br>public , args: ($type)<br>
	 * @uses TimeSpanTokenOverride::__construct_2 <br>public , args: ($number)<br>
	 * @uses TimeSpanTokenOverride::__construct_3 <br>public , args: ($number, $leadingZeroes)<br>
	 * @uses TimeSpanTokenOverride::__construct_4 <br>public , args: ($type, $number, $leadingZeroes, $separator)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}