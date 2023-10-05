<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableExperimentalAcrylicMaterialMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
}
/**
 */
class ImmutableExperimentalAcrylicMaterial extends \System\ValueType implements 
	\Avalonia\Media\IExperimentalAcrylicMaterial,
	\System\IEquatable_1
{
	/**
	 * @var \Avalonia\Media\AcrylicBackgroundSource
	 * @property
	 */
	public readonly $BackgroundSource;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public readonly $TintColor;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public readonly $MaterialColor;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $TintOpacity;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public readonly $FallbackColor;
	/**
	 * @return \Avalonia\Media\AcrylicBackgroundSource
	 */
	public  function get_BackgroundSource(){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_TintColor(){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_MaterialColor(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_TintOpacity(){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_FallbackColor(){}
	/**
	 * @uses ImmutableExperimentalAcrylicMaterialMethodsOverride::Equals_1 ($other)
	 * @uses ImmutableExperimentalAcrylicMaterialMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function GetEffectiveTintColor(){}
	/**
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $left
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $left
	 * @param \Avalonia\Media\ImmutableExperimentalAcrylicMaterial $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
