<?php
namespace Avalonia\Platform;
final class PixelFormat extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @field
	 * @var \Avalonia\Platform\PixelFormatEnum
	 */
	protected $FormatEnum;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $BitsPerPixel;
	/**
	 * @property
	 * @var \Avalonia\Platform\PixelFormat
	 * @since readonly
	 */
	public $Rgb565;
	/**
	 * @property
	 * @var \Avalonia\Platform\PixelFormat
	 * @since readonly
	 */
	public $Rgba8888;
	/**
	 * @property
	 * @var \Avalonia\Platform\PixelFormat
	 * @since readonly
	 */
	public $Bgra8888;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $left
	 * @param \Avalonia\Platform\PixelFormat $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\PixelFormat $left
	 * @param \Avalonia\Platform\PixelFormat $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}