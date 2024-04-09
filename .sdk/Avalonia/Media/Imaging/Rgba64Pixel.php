<?php
namespace Avalonia\Media\Imaging;
final class Rgba64Pixel extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $R;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $G;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $B;
	/**
	 * @field
	 * @var \System\UInt16
	 */
	public $A;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Media\Imaging\Rgba64Pixel $left
	 * @param \Avalonia\Media\Imaging\Rgba64Pixel $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Media\Imaging\Rgba64Pixel $left
	 * @param \Avalonia\Media\Imaging\Rgba64Pixel $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\UInt16 $r
	 * @param \System\UInt16 $g
	 * @param \System\UInt16 $b
	 * @param \System\UInt16 $a
	 */
	public function __construct($r, $g, $b, $a){}
}