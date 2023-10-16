<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OSPlatformMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function Equals_2($other){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_3($obj){}
}
/**
 */
class OSPlatform extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @property
	 */
	public readonly $FreeBSD;
	/**
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @property
	 */
	public readonly $Linux;
	/**
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @property
	 */
	public readonly $OSX;
	/**
	 * @var \System\Runtime\InteropServices\OSPlatform
	 * @property
	 */
	public readonly $Windows;
	/**
	 * @return \System\Runtime\InteropServices\OSPlatform
	 */
	public static function get_FreeBSD(){}
	/**
	 * @return \System\Runtime\InteropServices\OSPlatform
	 */
	public static function get_Linux(){}
	/**
	 * @return \System\Runtime\InteropServices\OSPlatform
	 */
	public static function get_OSX(){}
	/**
	 * @return \System\Runtime\InteropServices\OSPlatform
	 */
	public static function get_Windows(){}
	/**
	 * @return \System\String|string
	 */
	protected  function get_Name(){}
	/**
	 * @param \System\String|string $osPlatform
	 * @return \System\Runtime\InteropServices\OSPlatform
	 */
	public static function Create($osPlatform){}
	/**
	 * @uses OSPlatformMethodsOverride::Equals_1 ($other)
	 * @uses OSPlatformMethodsOverride::Equals_2 ($other)
	 * @uses OSPlatformMethodsOverride::Equals_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\OSPlatform $left
	 * @param \System\Runtime\InteropServices\OSPlatform $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Runtime\InteropServices\OSPlatform $left
	 * @param \System\Runtime\InteropServices\OSPlatform $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
}
