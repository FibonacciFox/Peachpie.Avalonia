<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnicodeRangeOverride {
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $end
	 */
	#[MethodOverride]public function __construct_1 ($start, $end){}
	/**
	 * @param \Avalonia\Media\UnicodeRangeSegment $single
	 */
	#[MethodOverride]public function __construct_2 ($single){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $segments [generic: Avalonia\Media\UnicodeRangeSegment]
	 */
	#[MethodOverride]public function __construct_3 ($segments){}
}
final class UnicodeRange extends \System\ValueType implements
	\System\IEquatable_1
{
	use UnicodeRangeOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Media\UnicodeRange
	 */
	public static $Default;
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Boolean|bool
	 */
	public function IsInRange($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\UnicodeRange
	 */
	public static function Parse($s){}
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\UnicodeRange $left
	 * @param \Avalonia\Media\UnicodeRange $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\UnicodeRange $left
	 * @param \Avalonia\Media\UnicodeRange $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses UnicodeRangeOverride::__construct_1 <br>public , args: ($start, $end)<br>
	 * @uses UnicodeRangeOverride::__construct_2 <br>public , args: ($single)<br>
	 * @uses UnicodeRangeOverride::__construct_3 <br>public , args: ($segments)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}