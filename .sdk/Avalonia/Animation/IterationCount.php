<?php
namespace Avalonia\Animation;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait IterationCountOverride {
	/**
	 * @param \System\UInt64 $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\UInt64 $value
	 * @param \Avalonia\Animation\IterationType $type
	 */
	#[MethodOverride]public function __construct_2 ($value, $type){}
}
final class IterationCount extends \System\ValueType implements
	\System\IEquatable_1
{
	use IterationCountOverride;

	/**
	 * @property
	 * @var \Avalonia\Animation\IterationCount
	 * @since readonly
	 */
	public $Infinite;
	/**
	 * @property
	 * @var \Avalonia\Animation\IterationType
	 * @since readonly
	 */
	public $RepeatType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsInfinite;
	/**
	 * @property
	 * @var \System\UInt64
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \Avalonia\Animation\IterationCount $a
	 * @param \Avalonia\Animation\IterationCount $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Animation\IterationCount $rc1
	 * @param \Avalonia\Animation\IterationCount $rc2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($rc1, $rc2){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Animation\IterationCount
	 */
	public static function Parse($s){}
	/**
	 * @uses IterationCountOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses IterationCountOverride::__construct_2 <br>public , args: ($value, $type)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}