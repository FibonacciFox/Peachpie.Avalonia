<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait OSPlatformOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $other
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function Equals_1 ($other){}
}
final class OSPlatform extends \System\ValueType implements
	\System\IEquatable_1
{
	use OSPlatformOverride;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @since readonly
	 */
	public $FreeBSD;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @since readonly
	 */
	public $Linux;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @since readonly
	 */
	public $OSX;
	/**
	 * @property
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @since readonly
	 */
	public $Windows;
	/**
	 * @param \System\String|string $osPlatform
	 * @return \System\Runtime\InteropServices\OSPlatform
	 */
	public static function Create($osPlatform){}
	/**
	 * @param \System\Runtime\InteropServices\OSPlatform $left
	 * @param \System\Runtime\InteropServices\OSPlatform $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Runtime\InteropServices\OSPlatform $left
	 * @param \System\Runtime\InteropServices\OSPlatform $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
}