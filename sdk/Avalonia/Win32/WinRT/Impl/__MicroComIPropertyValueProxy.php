<?php
namespace Avalonia\Win32\WinRT\Impl;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait __MicroComIPropertyValueProxyMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function QueryInterface_1($guid, $ppv){}
	/**
	 * @return \MicroCom\Runtime\T
	 */
	#[MethodOverride] public  function QueryInterface_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_1($disposing){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_2(){}
}
/**
 */
class __MicroComIPropertyValueProxy extends \Avalonia\Win32\WinRT\Impl\__MicroComIInspectableProxy implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\Avalonia\Win32\WinRT\IInspectable,
	\Avalonia\Win32\WinRT\IPropertyValue
{
	/**
	 * @var \Avalonia\Win32\WinRT\PropertyType
	 * @property
	 */
	public readonly $Type;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $IsNumericScalar;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $UInt8;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $Int16;
	/**
	 * @var \System\UInt16
	 * @property
	 */
	public readonly $UInt16;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Int32;
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public readonly $UInt32;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Int64;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $UInt64;
	/**
	 * @var \System\Single
	 * @property
	 */
	public readonly $Single;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Double;
	/**
	 * @var \System\Char
	 * @property
	 */
	public readonly $Char16;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Boolean;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $String;
	/**
	 * @var \System\Guid
	 * @property
	 */
	public readonly $Guid;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $RuntimeClassName;
	/**
	 * @var \Avalonia\Win32\WinRT\TrustLevel
	 * @property
	 */
	public readonly $TrustLevel;
	/**
	 * @var \System\IntPtr
	 * @property
	 */
	public readonly $NativePointer;
	/**
	 * @var \System\Void***
	 * @property
	 */
	public readonly $PPV;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDisposed;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $OwnsHandle;
	/**
	 * @return \Avalonia\Win32\WinRT\PropertyType
	 */
	public  function get_Type(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_IsNumericScalar(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_UInt8(){}
	/**
	 * @return \System\Int16
	 */
	public  function get_Int16(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_UInt16(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Int32(){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_UInt32(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Int64(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_UInt64(){}
	/**
	 * @return \System\Single
	 */
	public  function get_Single(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Double(){}
	/**
	 * @return \System\Char
	 */
	public  function get_Char16(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Boolean(){}
	/**
	 * @return \System\IntPtr
	 */
	public  function get_String(){}
	/**
	 * @return \System\Guid
	 */
	public  function get_Guid(){}
	/**
	 * @param \System\Void* $value
	 * @return \System\Void|void
	 */
	public  function GetDateTime($value){}
	/**
	 * @param \System\Void* $value
	 * @return \System\Void|void
	 */
	public  function GetTimeSpan($value){}
	/**
	 * @param \System\Void* $value
	 * @return \System\Void|void
	 */
	public  function GetPoint($value){}
	/**
	 * @param \System\Void* $value
	 * @return \System\Void|void
	 */
	public  function GetSize($value){}
	/**
	 * @param \System\Void* $value
	 * @return \System\Void|void
	 */
	public  function GetRect($value){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Byte*
	 */
	public  function GetUInt8Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Int16*
	 */
	public  function GetInt16Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\UInt16*
	 */
	public  function GetUInt16Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Int32*
	 */
	public  function GetInt32Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\UInt32*
	 */
	public  function GetUInt32Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Int64*
	 */
	public  function GetInt64Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\UInt64*
	 */
	public  function GetUInt64Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Single*
	 */
	public  function GetSingleArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Double*
	 */
	public  function GetDoubleArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Char*
	 */
	public  function GetChar16Array($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Int32*
	 */
	public  function GetBooleanArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\IntPtr*
	 */
	public  function GetStringArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Void**
	 */
	public  function GetInspectableArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Guid*
	 */
	public  function GetGuidArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Void*
	 */
	public  function GetDateTimeArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Void*
	 */
	public  function GetTimeSpanArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Void*
	 */
	public  function GetPointArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Void*
	 */
	public  function GetSizeArray($__valueSize){}
	/**
	 * @param \System\UInt32* $__valueSize
	 * @return \System\Void*
	 */
	public  function GetRectArray($__valueSize){}
	/**
	 * @uses __MicroComIPropertyValueProxyMethodsOverride::QueryInterface_1 ($guid, $ppv)
	 * @uses __MicroComIPropertyValueProxyMethodsOverride::QueryInterface_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function QueryInterface(mixed ...$args){}
	/**
	 * @uses __MicroComIPropertyValueProxyMethodsOverride::Dispose_1 ($disposing)
	 * @uses __MicroComIPropertyValueProxyMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
