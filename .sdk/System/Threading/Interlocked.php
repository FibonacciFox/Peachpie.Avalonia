<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait InterlockedOverride {
	/**
	 * @deprecated
	 * @param \System\Int32& $location
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Increment_1 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Increment_2 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Increment_3 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Increment_4 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Decrement_1 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Decrement_2 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Decrement_3 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Decrement_4 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location1
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Exchange_1 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location1
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Exchange_2 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Single& $location1
	 * @param \System\Single $value
	 * @return \System\Single
	 */
	#[MethodOverride]public static function Exchange_3 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Double& $location1
	 * @param \System\Double|double $value
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function Exchange_4 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Object& $location1
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function Exchange_5 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \T& $location1
	 * @param \T|object $value
	 * @return \T|object
	 */
	#[MethodOverride]public static function Exchange_6 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location1
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Exchange_7 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location1
	 * @param \System\UInt64 $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Exchange_8 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr& $location1
	 * @param \System\IntPtr $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function Exchange_9 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr& $location1
	 * @param \System\UIntPtr $value
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function Exchange_10 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location1
	 * @param \System\Int32|int $value
	 * @param \System\Int32|int $comparand
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function CompareExchange_1 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location1
	 * @param \System\Int64|int $value
	 * @param \System\Int64|int $comparand
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function CompareExchange_2 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\Single& $location1
	 * @param \System\Single $value
	 * @param \System\Single $comparand
	 * @return \System\Single
	 */
	#[MethodOverride]public static function CompareExchange_3 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\Double& $location1
	 * @param \System\Double|double $value
	 * @param \System\Double|double $comparand
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function CompareExchange_4 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\Object& $location1
	 * @param \System\Object|object $value
	 * @param \System\Object|object $comparand
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CompareExchange_5 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \T& $location1
	 * @param \T|object $value
	 * @param \T|object $comparand
	 * @return \T|object
	 */
	#[MethodOverride]public static function CompareExchange_6 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location1
	 * @param \System\UInt32 $value
	 * @param \System\UInt32 $comparand
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function CompareExchange_7 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location1
	 * @param \System\UInt64 $value
	 * @param \System\UInt64 $comparand
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function CompareExchange_8 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\IntPtr& $location1
	 * @param \System\IntPtr $value
	 * @param \System\IntPtr $comparand
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function CompareExchange_9 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr& $location1
	 * @param \System\UIntPtr $value
	 * @param \System\UIntPtr $comparand
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function CompareExchange_10 ($location1, $value, $comparand){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location1
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Add_1 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location1
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Add_2 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location1
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Add_3 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location1
	 * @param \System\UInt64 $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Add_4 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location1
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]private static function ExchangeAdd_1 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location1
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]private static function ExchangeAdd_2 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Read_1 ($location){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Read_2 ($location){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location1
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function And_1 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location1
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function And_2 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location1
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function And_3 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location1
	 * @param \System\UInt64 $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function And_4 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32& $location1
	 * @param \System\Int32|int $value
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function Or_1 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $location1
	 * @param \System\UInt32 $value
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function Or_2 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $location1
	 * @param \System\Int64|int $value
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function Or_3 ($location1, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $location1
	 * @param \System\UInt64 $value
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function Or_4 ($location1, $value){}
}
class Interlocked extends \System\Object
{
	use InterlockedOverride;


	/**
	 * @uses InterlockedOverride::Increment_1 <br>public , args: ($location)<br>
	 * @uses InterlockedOverride::Increment_2 <br>public , args: ($location)<br>
	 * @uses InterlockedOverride::Increment_3 <br>public , args: ($location)<br>
	 * @uses InterlockedOverride::Increment_4 <br>public , args: ($location)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\UInt32|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function Increment (\override ...$args){}
	/**
	 * @uses InterlockedOverride::Decrement_1 <br>public , args: ($location)<br>
	 * @uses InterlockedOverride::Decrement_2 <br>public , args: ($location)<br>
	 * @uses InterlockedOverride::Decrement_3 <br>public , args: ($location)<br>
	 * @uses InterlockedOverride::Decrement_4 <br>public , args: ($location)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\UInt32|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function Decrement (\override ...$args){}
	/**
	 * @uses InterlockedOverride::Exchange_1 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_2 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_3 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_4 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_5 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_6 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_7 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_8 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_9 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Exchange_10 <br>public , args: ($location1, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\Single|\System\Double|double|\System\Object|object|\T|object|\System\UInt32|\System\UInt64|\System\IntPtr|\System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function Exchange (\override ...$args){}
	/**
	 * @uses InterlockedOverride::CompareExchange_1 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_2 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_3 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_4 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_5 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_6 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_7 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_8 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_9 <br>public , args: ($location1, $value, $comparand)<br>
	 * @uses InterlockedOverride::CompareExchange_10 <br>public , args: ($location1, $value, $comparand)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\Single|\System\Double|double|\System\Object|object|\T|object|\System\UInt32|\System\UInt64|\System\IntPtr|\System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function CompareExchange (\override ...$args){}
	/**
	 * @uses InterlockedOverride::Add_1 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Add_2 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Add_3 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Add_4 <br>public , args: ($location1, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|\System\UInt32|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @since @override => public | private | protected
	 * @internal Please ensure that this item can interact with your program before using it, as it may not be available and its use is your responsibility.
	 * @uses InterlockedOverride::ExchangeAdd_1 <br>private , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::ExchangeAdd_2 <br>private , args: ($location1, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\Int64|int|mixed|\override
	 */
	#[MethodOverridePrivate]function ExchangeAdd (\override ...$args){}
	/**
	 * @uses InterlockedOverride::Read_1 <br>public , args: ($location)<br>
	 * @uses InterlockedOverride::Read_2 <br>public , args: ($location)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function Read (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function MemoryBarrier(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ReadMemoryBarrier(){}
	private static function _MemoryBarrierProcessWide(){}
	/**
	 * @return \System\Void|void
	 */
	public static function MemoryBarrierProcessWide(){}
	/**
	 * @uses InterlockedOverride::And_1 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::And_2 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::And_3 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::And_4 <br>public , args: ($location1, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\UInt32|\System\Int64|int|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function And (\override ...$args){}
	/**
	 * @uses InterlockedOverride::Or_1 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Or_2 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Or_3 <br>public , args: ($location1, $value)<br>
	 * @uses InterlockedOverride::Or_4 <br>public , args: ($location1, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|\System\UInt32|\System\Int64|int|\System\UInt64|mixed|\override
	 */
	#[MethodOverridePublic]function Or (\override ...$args){}
}