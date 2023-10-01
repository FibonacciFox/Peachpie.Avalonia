<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableBlurEffectMethodsOverride
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
class ImmutableBlurEffect extends \System\Object implements 
	\Avalonia\Media\IBlurEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IImmutableEffect,
	\System\IEquatable_1
{
	/**
	 * @return \System\Double|double
	 */
	public  function get_Radius(){}
	/**
	 * @uses ImmutableBlurEffectMethodsOverride::Equals_1 ($other)
	 * @uses ImmutableBlurEffectMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
