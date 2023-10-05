<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait WindowTransparencyLevelMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class WindowTransparencyLevel extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $None;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $Transparent;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $Blur;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $AcrylicBlur;
	/**
	 * @var \Avalonia\Controls\WindowTransparencyLevel
	 * @property
	 */
	public readonly $Mica;
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public static function get_None(){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public static function get_Transparent(){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public static function get_Blur(){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public static function get_AcrylicBlur(){}
	/**
	 * @return \Avalonia\Controls\WindowTransparencyLevel
	 */
	public static function get_Mica(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $left
	 * @param \Avalonia\Controls\WindowTransparencyLevel $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Controls\WindowTransparencyLevel $left
	 * @param \Avalonia\Controls\WindowTransparencyLevel $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses WindowTransparencyLevelMethodsOverride::Equals_1 ($obj)
	 * @uses WindowTransparencyLevelMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
