<?php
namespace Avalonia\Media\Imaging;
final class Rgba8888Pixel extends \System\ValueType implements
	\System\IEquatable_1
{

	/**
	 * @field
	 * @var \System\Byte
	 */
	public $R;
	/**
	 * @field
	 * @var \System\Byte
	 */
	public $G;
	/**
	 * @field
	 * @var \System\Byte
	 */
	public $B;
	/**
	 * @field
	 * @var \System\Byte
	 */
	public $A;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Imaging\Rgba8888Pixel $left
	 * @param \Avalonia\Media\Imaging\Rgba8888Pixel $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Imaging\Rgba8888Pixel $left
	 * @param \Avalonia\Media\Imaging\Rgba8888Pixel $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Byte $r
	 * @param \System\Byte $g
	 * @param \System\Byte $b
	 * @param \System\Byte $a
	 */
	public function __construct($r, $g, $b, $a){}
}