<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GCHandleOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	#[MethodOverride]public static function Alloc_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Object|object $value
	 * @param \System\Runtime\InteropServices\GCHandleType $type
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	#[MethodOverride]public static function Alloc_2 ($value, $type){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $value
	 * @return \System\Runtime\InteropServices\GCHandle
	 */
	#[MethodOverride]public static function op_Explicit_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Runtime\InteropServices\GCHandle $value
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function op_Explicit_2 ($value){}
}
final class GCHandle extends \System\ValueType implements
	\System\IEquatable_1
{
	use GCHandleOverride;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Target;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAllocated;
	private static function InternalAlloc($value, $type){}
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
	 * @uses GCHandleOverride::Alloc_1 <br>public , args: ($value)<br>
	 * @uses GCHandleOverride::Alloc_2 <br>public , args: ($value, $type)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\InteropServices\GCHandle|mixed|\override
	 */
	#[MethodOverridePublic]function Alloc (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Free(){}
	/**
	 * @return \System\IntPtr
	 */
	public function AddrOfPinnedObject(){}
	/**
	 * @uses GCHandleOverride::op_Explicit_1 <br>public , args: ($value)<br>
	 * @uses GCHandleOverride::op_Explicit_2 <br>public , args: ($value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\InteropServices\GCHandle|\System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function op_Explicit (\override ...$args){}
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
	 * @param \System\Runtime\InteropServices\GCHandle $a
	 * @param \System\Runtime\InteropServices\GCHandle $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Runtime\InteropServices\GCHandle $a
	 * @param \System\Runtime\InteropServices\GCHandle $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	private static function GetHandleValue($handle){}
	private static function IsPinned($handle){}
	private static function ThrowIfInvalid($handle){}
}