<?php
namespace System;
class StartupHookProvider extends \System\Object
{

	private static function ProcessStartupHooks(){}
	private static function CallStartupHook($startupHook){}
}ystem\Void* $szLhs
	 * @param \System\Void* $szRhs
	 * @param \System\Int32|int $cSz
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private static function EqualsCaseInsensitive_1 ($szLhs, $szRhs, $cSz){}
	/**
	 * @deprecated
	 * @param \System\MdUtf8String $s
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function EqualsCaseInsensitive_2 ($s){}
	/**
	 * @deprecated
	 * @param \System\Void* $sz
	 * @param \System\Int32|int $cSz
	 * @return \System\UInt32
	 */
	#[MethodOverride]private static function HashCaseInsensitive_1 ($sz, $cSz){}
	/**
	 * @deprecated
	 * @return \System\UInt32
	 */
	#[MethodOverride]protected function HashCaseInsensitive_2 (){}
	/**
	 * @deprecated
	 * @param \System\MdUtf8String $s
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]protected function Equals_1 ($s){}
}
final class MdUtf8String extends \System\ValueType
{
	use MdUtf8StringOverride;

	/**
	 * @uses MdUtf8StringOverride::EqualsCaseInsensitive_1 <br>private , args: ($szLhs, $szRhs, $cSz)<br>
	 * @uses MdUtf8StringOverride::EqualsCaseInsensitive_2 <br>protected , args: ($s)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|mixed|\override
	 */
	#[MethodOverrideProtected]function EqualsCaseInsensitive (\override ...$args){}
	/**
	 * @uses MdUtf8StringOverride::HashCaseInsensitive_1 <br>private , args: ($sz, $cSz)<br>
	 * @uses MdUtf8StringOverride::HashCaseInsensitive_2 <br>protected , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\UInt32|mixed|\override
	 */
	#[MethodOverrideProtected]function HashCaseInsensitive (\override ...$args){}
}