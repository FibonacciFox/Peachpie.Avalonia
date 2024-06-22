<?php
namespace Avalonia\Media\Immutable;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImmutableSolidColorBrushOverride {
	/**
	 * @param \Avalonia\Media\Color $color
	 * @param \System\Double|double $opacity
	 * @param \Avalonia\Media\Immutable\ImmutableTransform $transform
	 */
	#[MethodOverride]public function __construct_1 ($color, $opacity, $transform){}
	/**
	 * @param \System\UInt32 $color
	 */
	#[MethodOverride]public function __construct_2 ($color){}
	/**
	 * @param \Avalonia\Media\ISolidColorBrush $source
	 */
	#[MethodOverride]public function __construct_3 ($source){}
}
class ImmutableSolidColorBrush extends \System\Object implements
	\Avalonia\Media\IImmutableSolidColorBrush,
	\Avalonia\Media\ISolidColorBrush,
	\Avalonia\Media\IBrush,
	\Avalonia\Media\IImmutableBrush,
	\System\IEquatable_1
{
	use ImmutableSolidColorBrushOverride;

	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 * @since readonly
	 */
	public $Color;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 * @since readonly
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 * @since readonly
	 */
	public $TransformOrigin;
	/**
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $left
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $left
	 * @param \Avalonia\Media\Immutable\ImmutableSolidColorBrush $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @uses ImmutableSolidColorBrushOverride::__construct_1 <br>public , args: ($color, $opacity, $transform)<br>
	 * @uses ImmutableSolidColorBrushOverride::__construct_2 <br>public , args: ($color)<br>
	 * @uses ImmutableSolidColorBrushOverride::__construct_3 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}