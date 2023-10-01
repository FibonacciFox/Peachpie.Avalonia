<?php
namespace Avalonia\Media\Immutable;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableSolidColorBrushMethodsOverride
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
class ImmutableSolidColorBrush extends \System\Object implements 
	\Avalonia\Media\IImmutableSolidColorBrush,
	\Avalonia\Media\ISolidColorBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\System\IEquatable_1
{
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_Color(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Opacity(){}
	/**
	 * @return \Avalonia\Media\ITransform
	 */
	public  function get_Transform(){}
	/**
	 * @return \Avalonia\RelativePoint
	 */
	public  function get_TransformOrigin(){}
	/**
	 * @uses ImmutableSolidColorBrushMethodsOverride::Equals_1 ($other)
	 * @uses ImmutableSolidColorBrushMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $left
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $left
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
