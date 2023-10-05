<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThemeVariantMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	#[MethodOverride] public static function op_Explicit_1($themeVariant){}
	/**
	 * @return \System\Nullable_1
	 */
	#[MethodOverride] public static function op_Explicit_2($themeVariant){}
}
/**
 */
class ThemeVariant extends \System\Object implements 
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ThemeVariant]
	 * @field
	 */
	protected readonly $ActualThemeVariantProperty;
	/**
	 * @var \Avalonia\StyledProperty_1[Avalonia\Styling\ThemeVariant]
	 * @field
	 */
	protected readonly $RequestedThemeVariantProperty;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Key;
	/**
	 * @var \Avalonia\Styling\ThemeVariant
	 * @property
	 */
	public readonly $InheritVariant;
	/**
	 * @var \Avalonia\Styling\ThemeVariant
	 * @property
	 */
	public readonly $Default;
	/**
	 * @var \Avalonia\Styling\ThemeVariant
	 * @property
	 */
	public readonly $Light;
	/**
	 * @var \Avalonia\Styling\ThemeVariant
	 * @property
	 */
	public readonly $Dark;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_EqualityContract(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Key(){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	public  function get_InheritVariant(){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	public static function get_Default(){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	public static function get_Light(){}
	/**
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	public static function get_Dark(){}
	/**
	 * @uses ThemeVariantMethodsOverride::Equals_1 ($other)
	 * @uses ThemeVariantMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses ThemeVariantMethodsOverride::op_Explicit_1 ($themeVariant)
	 * @uses ThemeVariantMethodsOverride::op_Explicit_2 ($themeVariant)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Explicit(mixed ...$args){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $left
	 * @param \Avalonia\Styling\ThemeVariant $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $left
	 * @param \Avalonia\Styling\ThemeVariant $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
}
