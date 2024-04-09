<?php
namespace Avalonia\Platform;
final class PlatformGraphicsExternalImageProperties extends \System\ValueType implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Width;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Height;
	/**
	 * @property
	 * @var \Avalonia\Platform\PlatformGraphicsExternalImageFormat
	 */
	public $Format;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $MemorySize;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $MemoryOffset;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $TopLeftOrigin;
	private function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $left
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $left
	 * @param \Avalonia\Platform\PlatformGraphicsExternalImageProperties $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
}