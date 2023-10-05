<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GridLengthMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($gridLength){}
}
/**
 */
class GridLength extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Controls\GridLength
	 * @property
	 */
	public readonly $Auto;
	/**
	 * @var \Avalonia\Controls\GridLength
	 * @property
	 */
	public readonly $Star;
	/**
	 * @var \Avalonia\Controls\GridUnitType
	 * @property
	 */
	public readonly $GridUnitType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAbsolute;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAuto;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsStar;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \Avalonia\Controls\GridLength
	 */
	public static function get_Auto(){}
	/**
	 * @return \Avalonia\Controls\GridLength
	 */
	public static function get_Star(){}
	/**
	 * @return \Avalonia\Controls\GridUnitType
	 */
	public  function get_GridUnitType(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAbsolute(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAuto(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsStar(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Value(){}
	/**
	 * @param \Avalonia\Controls\GridLength $a
	 * @param \Avalonia\Controls\GridLength $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Controls\GridLength $gl1
	 * @param \Avalonia\Controls\GridLength $gl2
	 * @return \System\Boolean
	 */
	public static function op_Inequality($gl1, $gl2){}
	/**
	 * @uses GridLengthMethodsOverride::Equals_1 ($o)
	 * @uses GridLengthMethodsOverride::Equals_2 ($gridLength)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Controls\GridLength
	 */
	public static function Parse($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function ParseLengths($s){}
}
