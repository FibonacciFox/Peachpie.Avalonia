<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait GCHandleMethodsOverride
{
	/**
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	#[MethodOverride] public static function Alloc_1($value){}
	/**
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	#[MethodOverride] public static function Alloc_2($value, $type){}
	/**
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	#[MethodOverride] public static function op_Explicit_1($value){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function op_Explicit_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($o){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class GCHandle extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Target;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAllocated;
	/**
	 * @param \System\Object|object $value
	 * @param \System\Runtime\InteropServices\GCHandleType $type
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalAlloc($value, $type){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	protected static function InternalFree($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @return \System\Object|object
	 */
	protected static function InternalGet($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected static function InternalSet($handle, $value){}
	/**
	 * @param \System\IntPtr $handle
	 * @param \System\Object|object $value
	 * @param \System\Object|object $oldValue
	 * @return \System\Object|object
	 */
	protected static function InternalCompareExchange($handle, $value, $oldValue){}
	/**
	 * @uses GCHandleMethodsOverride::Alloc_1 ($value)
	 * @uses GCHandleMethodsOverride::Alloc_2 ($value, $type)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Alloc(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Free(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Target(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Target($value){}
	/**
	 * @return \System\IntPtr
	 */
	public  function AddrOfPinnedObject(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAllocated(){}
	/**
	 * @uses GCHandleMethodsOverride::op_Explicit_1 ($value)
	 * @uses GCHandleMethodsOverride::op_Explicit_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function op_Explicit(mixed ...$args){}
	/**
	 * @param \System\IntPtr $value
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	public static function FromIntPtr($value){}
	/**
	 * @param \System\Runtime\InteropServices\GCHandle $value
	 * @return \System\IntPtr
	 */
	public static function ToIntPtr($value){}
	/**
	 * @uses GCHandleMethodsOverride::Equals_1 ($o)
	 * @uses GCHandleMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\GCHandle $a
	 * @param \System\Runtime\InteropServices\GCHandle $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Runtime\InteropServices\GCHandle $a
	 * @param \System\Runtime\InteropServices\GCHandle $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetHandleValue($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsPinned($handle){}
	/**
	 * @param \System\IntPtr $handle
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowIfInvalid($handle){}
}
