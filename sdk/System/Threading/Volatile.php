<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait VolatileMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public static function Read_1($location){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function Read_2($location){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function Read_3($location){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function Read_4($location){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function Read_5($location){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function Read_6($location){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function Read_7($location){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function Read_8($location){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function Read_9($location){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function Read_10($location){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function Read_11($location){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function Read_12($location){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function Read_13($location){}
	/**
	 * @return \System\Threading\T
	 */
	#[MethodOverride] public static function Read_14($location){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_1($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_2($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_3($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_4($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_5($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_6($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_7($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_8($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_9($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_10($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_11($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_12($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_13($location, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Write_14($location, $value){}
}
/**
 */
class Volatile extends \System\Object
{
	/**
	 * @uses VolatileMethodsOverride::Read_1 ($location)
	 * @uses VolatileMethodsOverride::Read_2 ($location)
	 * @uses VolatileMethodsOverride::Read_3 ($location)
	 * @uses VolatileMethodsOverride::Read_4 ($location)
	 * @uses VolatileMethodsOverride::Read_5 ($location)
	 * @uses VolatileMethodsOverride::Read_6 ($location)
	 * @uses VolatileMethodsOverride::Read_7 ($location)
	 * @uses VolatileMethodsOverride::Read_8 ($location)
	 * @uses VolatileMethodsOverride::Read_9 ($location)
	 * @uses VolatileMethodsOverride::Read_10 ($location)
	 * @uses VolatileMethodsOverride::Read_11 ($location)
	 * @uses VolatileMethodsOverride::Read_12 ($location)
	 * @uses VolatileMethodsOverride::Read_13 ($location)
	 * @uses VolatileMethodsOverride::Read_14 ($location)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Read(mixed ...$args){}
	/**
	 * @uses VolatileMethodsOverride::Write_1 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_2 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_3 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_4 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_5 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_6 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_7 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_8 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_9 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_10 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_11 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_12 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_13 ($location, $value)
	 * @uses VolatileMethodsOverride::Write_14 ($location, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Write(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
