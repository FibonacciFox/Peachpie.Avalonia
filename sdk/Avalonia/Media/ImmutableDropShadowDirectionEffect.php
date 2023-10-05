<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ImmutableDropShadowDirectionEffectMethodsOverride
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
class ImmutableDropShadowDirectionEffect extends \System\Object implements 
	\Avalonia\Media\IDirectionDropShadowEffect,
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
	public readonly $Direction;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $ShadowDepth;
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
	public  function get_Direction(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_ShadowDepth(){}
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
	 * @uses ImmutableDropShadowDirectionEffectMethodsOverride::Equals_1 ($other)
	 * @uses ImmutableDropShadowDirectionEffectMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
