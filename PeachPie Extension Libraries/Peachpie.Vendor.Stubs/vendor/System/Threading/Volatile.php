<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait VolatileOverride {
	/**
	 * @deprecated
	 * @param \System\Boolean& $location
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public static function Read_1 ($location){}
	/**
	 * @deprecated
	 * @param \System\Byte& $location
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function Read_2 ($location){}
	/**
	 * @deprecated
	 * @param \System\Double& $location
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Read_3 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int16& $location
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function Read_4 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Read_5 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Read_6 ($location){}
	/**
	 * @deprecated
	 * @param \System\IntPtr& $location
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Read_7 ($location){}
	/**
	 * @deprecated
	 * @param \System\SByte& $location
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function Read_8 ($location){}
	/**
	 * @deprecated
	 * @param \System\Single& $location
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Read_9 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt16& $location
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function Read_10 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Read_11 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Read_12 ($location){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr& $location
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Read_13 ($location){}
	/**
	 * @deprecated
	 * @param \T& $location
	 * @return \T|object
	 */
	#[MethodOverride]public static function Read_14 ($location){}
	/**
	 * @deprecated
	 * @param \System\Boolean& $location
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_1 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\Byte& $location
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_2 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\Double& $location
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_3 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\Int16& $location
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_4 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_5 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_6 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr& $location
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_7 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\SByte& $location
	 * @param \System\SByte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_8 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\Single& $location
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_9 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt16& $location
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_10 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_11 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_12 ($location, $value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr& $location
	 * @param \System\UIntPtr $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_13 ($location, $value){}
	/**
	 * @deprecated
	 * @param \T& $location
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Write_14 ($location, $value){}
}
class Volatile extends \System\Object
{
	use VolatileOverride;

	/**
	 * @uses VolatileOverride::Read_1 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_2 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_3 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_4 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_5 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_6 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_7 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_8 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_9 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_10 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_11 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_12 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_13 <br>public , args: ($location)<br>
	 * @uses VolatileOverride::Read_14 <br>public , args: ($location)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Byte|\System\Double|double|\System\Int16|\System\Int32|int|\System\Int64|int|\System\IntPtr|\System\SByte|\System\Single|\System\UInt16|\System\UInt32|\System\UInt64|\System\UIntPtr|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function Read (\override ...$args){}
	/**
	 * @uses VolatileOverride::Write_1 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_2 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_3 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_4 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_5 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_6 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_7 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_8 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_9 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_10 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_11 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_12 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_13 <br>public , args: ($location, $value)<br>
	 * @uses VolatileOverride::Write_14 <br>public , args: ($location, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Write (\override ...$args){}
}