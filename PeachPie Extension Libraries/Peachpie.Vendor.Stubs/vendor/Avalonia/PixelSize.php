<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait PixelSizeOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public function ToSize_1 ($scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public function ToSize_2 ($scale){}
	/**
	 * @deprecated
	 * @param \System\Double|double $dpi
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public function ToSizeWithDpi_1 ($dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\Size
	 */
	#[MethodOverride]public function ToSizeWithDpi_2 ($dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $scale
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride]public static function FromSize_1 ($size, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Vector $scale
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride]public static function FromSize_2 ($size, $scale){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \System\Double|double $dpi
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride]public static function FromSizeWithDpi_1 ($size, $dpi){}
	/**
	 * @deprecated
	 * @param \Avalonia\Size $size
	 * @param \Avalonia\Vector $dpi
	 * @return \Avalonia\PixelSize
	 */
	#[MethodOverride]public static function FromSizeWithDpi_2 ($size, $dpi){}
}
final class PixelSize extends \System\ValueType implements
	\System\IEquatable_1
{
	use PixelSizeOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\PixelSize
	 */
	public static $Empty;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $AspectRatio;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Height;
	/**
	 * @param \Avalonia\PixelSize $left
	 * @param \Avalonia\PixelSize $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \Avalonia\PixelSize $left
	 * @param \Avalonia\PixelSize $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\PixelSize
	 */
	public static function Parse($s){}
	/**
	 * @param \System\Int32|int $width
	 * @return \Avalonia\PixelSize
	 */
	public function WithWidth($width){}
	/**
	 * @param \System\Int32|int $height
	 * @return \Avalonia\PixelSize
	 */
	public function WithHeight($height){}
	/**
	 * @uses PixelSizeOverride::ToSize_1 <br>public , args: ($scale)<br>
	 * @uses PixelSizeOverride::ToSize_2 <br>public , args: ($scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function ToSize (\override ...$args){}
	/**
	 * @uses PixelSizeOverride::ToSizeWithDpi_1 <br>public , args: ($dpi)<br>
	 * @uses PixelSizeOverride::ToSizeWithDpi_2 <br>public , args: ($dpi)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Size|mixed|\override
	 */
	#[MethodOverridePublic]function ToSizeWithDpi (\override ...$args){}
	/**
	 * @uses PixelSizeOverride::FromSize_1 <br>public , args: ($size, $scale)<br>
	 * @uses PixelSizeOverride::FromSize_2 <br>public , args: ($size, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelSize|mixed|\override
	 */
	#[MethodOverridePublic]function FromSize (\override ...$args){}
	/**
	 * @uses PixelSizeOverride::FromSizeWithDpi_1 <br>public , args: ($size, $dpi)<br>
	 * @uses PixelSizeOverride::FromSizeWithDpi_2 <br>public , args: ($size, $dpi)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\PixelSize|mixed|\override
	 */
	#[MethodOverridePublic]function FromSizeWithDpi (\override ...$args){}
	/**
	 * @param \System\Int32|int $width
	 * @param \System\Int32|int $height
	 */
	public function __construct($width, $height){}
}