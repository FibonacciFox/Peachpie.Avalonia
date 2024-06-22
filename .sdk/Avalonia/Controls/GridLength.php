<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GridLengthOverride {
	/**
	 * @param \System\Double|double $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\Double|double $value
	 * @param \Avalonia\Controls\GridUnitType $type
	 */
	#[MethodOverride]public function __construct_2 ($value, $type){}
}
final class GridLength extends \System\ValueType implements
	\System\IEquatable_1
{
	use GridLengthOverride;

	/**
	 * @property
	 * @var \Avalonia\Controls\GridLength
	 * @since readonly
	 */
	public $Auto;
	/**
	 * @property
	 * @var \Avalonia\Controls\GridLength
	 * @since readonly
	 */
	public $Star;
	/**
	 * @property
	 * @var \Avalonia\Controls\GridUnitType
	 * @since readonly
	 */
	public $GridUnitType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAbsolute;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAuto;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsStar;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \Avalonia\Controls\GridLength $a
	 * @param \Avalonia\Controls\GridLength $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Controls\GridLength $gl1
	 * @param \Avalonia\Controls\GridLength $gl2
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($gl1, $gl2){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Controls\GridLength
	 */
	public static function Parse($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Controls\GridLength]
	 */
	public static function ParseLengths($s){}
	/**
	 * @uses GridLengthOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses GridLengthOverride::__construct_2 <br>public , args: ($value, $type)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}