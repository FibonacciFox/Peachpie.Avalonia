<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BrushExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	#[MethodOverride] public static function ToImmutable_1($brush){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutableDashStyle
	 */
	#[MethodOverride] public static function ToImmutable_2($style){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutablePen
	 */
	#[MethodOverride] public static function ToImmutable_3($pen){}
}
/**
 */
class BrushExtensions extends \System\Object
{
	/**
	 * @uses BrushExtensionsMethodsOverride::ToImmutable_1 ($brush)
	 * @uses BrushExtensionsMethodsOverride::ToImmutable_2 ($style)
	 * @uses BrushExtensionsMethodsOverride::ToImmutable_3 ($pen)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ToImmutable(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
