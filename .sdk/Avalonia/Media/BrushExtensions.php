<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BrushExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IBrush $brush
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	#[MethodOverride]public static function ToImmutable_1 ($brush){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IDashStyle $style
	 * @return \Avalonia\Media\Immutable\ImmutableDashStyle
	 */
	#[MethodOverride]public static function ToImmutable_2 ($style){}
	/**
	 * @deprecated
	 * @param \Avalonia\Media\IPen $pen
	 * @return \Avalonia\Media\Immutable\ImmutablePen
	 */
	#[MethodOverride]public static function ToImmutable_3 ($pen){}
}
class BrushExtensions extends \System\Object
{
	use BrushExtensionsOverride;


	/**
	 * @uses BrushExtensionsOverride::ToImmutable_1 <br>public , args: ($brush)<br>
	 * @uses BrushExtensionsOverride::ToImmutable_2 <br>public , args: ($style)<br>
	 * @uses BrushExtensionsOverride::ToImmutable_3 <br>public , args: ($pen)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\IImmutableBrush|\Avalonia\Media\Immutable\ImmutableDashStyle|\Avalonia\Media\Immutable\ImmutablePen|mixed|\override
	 */
	#[MethodOverridePublic]function ToImmutable (\override ...$args){}
}