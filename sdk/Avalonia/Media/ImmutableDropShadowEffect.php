<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableDropShadowEffectMethodsOverride
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
class ImmutableDropShadowEffect extends \System\Object implements 
	\Avalonia\Media\IDropShadowEffect,
	\Avalonia\Media\IEffect,
	\Avalonia\Media\IImmutableEffect,
	\System\IEquatable_1
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $OffsetX;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $OffsetY;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $BlurRadius;
	/**
	 * @var \Avalonia\Media\Color
	 * @property
	 */
	public readonly $Color;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Opacity;
	/**
	 * @return \System\Double|double
	 */
	public  function get_OffsetX(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_OffsetY(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_BlurRadius(){}
	/**
	 * @return \Avalonia\Media\Color
	 */
	public  function get_Color(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Opacity(){}
	/**
	 * @uses ImmutableDropShadowEffectMethodsOverride::Equals_1 ($other)
	 * @uses ImmutableDropShadowEffectMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
