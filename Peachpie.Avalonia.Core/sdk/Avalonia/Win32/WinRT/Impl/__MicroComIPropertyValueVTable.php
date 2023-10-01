<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIPropertyValueVTableMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private static function GetType_1($this, $value){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_1($d){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function AddMethod_2($m){}
}
/**
 */
class __MicroComIPropertyValueVTable extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableVTable
{
	/**
	 * @uses __MicroComIPropertyValueVTableMethodsOverride::GetType_1 ($this, $value)
	 * @uses __MicroComIPropertyValueVTableMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIsNumericScalar($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Byte* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt8($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int16* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt16($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt16* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt16($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt32($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt32($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int64* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt64($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt64* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt64($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Single* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSingle($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Double* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDouble($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Char* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetChar16($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBoolean($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\IntPtr* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetString($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Guid* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGuid($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateTime($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeSpan($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPoint($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSize($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Void* $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRect($this, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Byte** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt8Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Int16** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt16Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\UInt16** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt16Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Int32** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt32Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\UInt32** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt32Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Int64** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInt64Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\UInt64** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUInt64Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Single** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSingleArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Double** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDoubleArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Char** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetChar16Array($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Int32** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetBooleanArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\IntPtr** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetStringArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Void*** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetInspectableArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Guid** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetGuidArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetDateTimeArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTimeSpanArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetPointArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSizeArray($this, $__valueSize, $value){}
	/**
	 * @param \System\Void* $this
	 * @param \System\UInt32* $__valueSize
	 * @param \System\Void** $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetRectArray($this, $__valueSize, $value){}
	/**
	 * @uses __MicroComIPropertyValueVTableMethodsOverride::AddMethod_1 ($d)
	 * @uses __MicroComIPropertyValueVTableMethodsOverride::AddMethod_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddMethod(mixed ...$args){}
}
