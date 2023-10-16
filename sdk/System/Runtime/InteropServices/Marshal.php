<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait MarshalMethodsOverride
{
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function OffsetOf_1($t, $fieldName){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function OffsetOf_2($fieldName){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function ReadByte_1($ptr, $ofs){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function ReadByte_2($ptr, $ofs){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function ReadByte_3($ptr){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function ReadInt16_1($ptr, $ofs){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function ReadInt16_2($ptr, $ofs){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function ReadInt16_3($ptr){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ReadInt32_1($ptr, $ofs){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ReadInt32_2($ptr, $ofs){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function ReadInt32_3($ptr){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function ReadInt64_1($ptr, $ofs){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function ReadInt64_2($ptr, $ofs){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function ReadInt64_3($ptr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteByte_1($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteByte_2($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteByte_3($ptr, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt16_1($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt16_2($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt16_3($ptr, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt16_4($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt16_5($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt16_6($ptr, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt32_1($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt32_2($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt32_3($ptr, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt64_1($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt64_2($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteInt64_3($ptr, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StructureToPtr_1($structure, $ptr, $fDeleteOld){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function StructureToPtr_2($structure, $ptr, $fDeleteOld){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function DestroyStructure_1($ptr, $structuretype){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function DestroyStructure_2($ptr){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function GetHINSTANCE_1($m){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] private static function GetHINSTANCE_2($m){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] protected static function GetTypeFromCLSID_1($clsid, $server, $throwOnError){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private static function GetTypeFromCLSID_2($clsid, $server, $retType){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public static function GetTypeFromCLSID_3($clsid){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function GetComInterfaceForObject_1($o, $T){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function GetComInterfaceForObject_2($o){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function GetComInterfaceForObject_3($o, $T, $mode){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function CreateAggregatedObject_1($pOuter, $o){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function CreateAggregatedObject_2($pOuter, $o){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function CreateWrapperOfType_1($o, $t){}
	/**
	 * @return \System\Runtime\InteropServices\TWrapper
	 */
	#[MethodOverride] public static function CreateWrapperOfType_2($o){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function GetNativeVariantForObject_1($obj, $pDstNativeVariant){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function GetNativeVariantForObject_2($obj, $pDstNativeVariant){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function GetObjectForNativeVariant_1($pSrcNativeVariant){}
	/**
	 * @return \System\Runtime\InteropServices\T
	 */
	#[MethodOverride] public static function GetObjectForNativeVariant_2($pSrcNativeVariant){}
	/**
	 * @return \System\Object[]
	 */
	#[MethodOverride] public static function GetObjectsForNativeVariants_1($aSrcNativeVariant, $cVars){}
	/**
	 * @return \System\Runtime\InteropServices\T[]
	 */
	#[MethodOverride] public static function GetObjectsForNativeVariants_2($aSrcNativeVariant, $cVars){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function AllocHGlobal_1($cb){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function AllocHGlobal_2($cb){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringAnsi_1($ptr){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringAnsi_2($ptr, $len){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringUni_1($ptr){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringUni_2($ptr, $len){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringUTF8_1($ptr){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringUTF8_2($ptr, $byteLen){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SizeOf_1($structure){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SizeOf_2($structure){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SizeOf_3($t){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function SizeOf_4(){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function UnsafeAddrOfPinnedArrayElement_1($arr, $index){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function UnsafeAddrOfPinnedArrayElement_2($arr, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_1($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_2($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_3($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_4($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_5($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_6($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_7($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_8($source, $startIndex, $destination, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_9($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_10($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_11($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_12($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_13($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_14($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_15($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_16($source, $destination, $startIndex, $length){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function ReadIntPtr_1($ptr, $ofs){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function ReadIntPtr_2($ptr, $ofs){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function ReadIntPtr_3($ptr){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIntPtr_1($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIntPtr_2($ptr, $ofs, $val){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteIntPtr_3($ptr, $val){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function PtrToStructure_1($ptr, $structureType){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function PtrToStructure_2($ptr, $structure){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function PtrToStructure_3($ptr, $structure){}
	/**
	 * @return \System\Runtime\InteropServices\T
	 */
	#[MethodOverride] public static function PtrToStructure_4($ptr){}
	/**
	 * @return \System\Exception
	 */
	#[MethodOverride] public static function GetExceptionForHR_1($errorCode){}
	/**
	 * @return \System\Exception
	 */
	#[MethodOverride] public static function GetExceptionForHR_2($errorCode, $errorInfo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowExceptionForHR_1($errorCode){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function ThrowExceptionForHR_2($errorCode, $errorInfo){}
	/**
	 * @return \System\Delegate
	 */
	#[MethodOverride] public static function GetDelegateForFunctionPointer_1($ptr, $t){}
	/**
	 * @return \System\Runtime\InteropServices\TDelegate
	 */
	#[MethodOverride] public static function GetDelegateForFunctionPointer_2($ptr){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function GetFunctionPointerForDelegate_1($d){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function GetFunctionPointerForDelegate_2($d){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringAuto_1($ptr, $len){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public static function PtrToStringAuto_2($ptr){}
}
/**
 */
class Marshal extends \System\Object
{
	/**
	 * @var \System\Guid
	 * @field
	 */
	protected $IID_IUnknown;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $SystemDefaultCharSize;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public readonly $SystemMaxDBCSCharSize;
	/**
	 * @param \System\Type $t
	 * @param \System\Boolean $throwIfNotMarshalable
	 * @return \System\Int32|int
	 */
	protected static function SizeOfHelper($t, $throwIfNotMarshalable){}
	/**
	 * @uses MarshalMethodsOverride::OffsetOf_1 ($t, $fieldName)
	 * @uses MarshalMethodsOverride::OffsetOf_2 ($fieldName)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function OffsetOf(mixed ...$args){}
	/**
	 * @param \System\IRuntimeFieldInfo $f
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OffsetOfHelper($f){}
	/**
	 * @uses MarshalMethodsOverride::ReadByte_1 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadByte_2 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadByte_3 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadByte(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::ReadInt16_1 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadInt16_2 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadInt16_3 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadInt16(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::ReadInt32_1 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadInt32_2 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadInt32_3 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadInt32(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::ReadInt64_1 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadInt64_2 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadInt64_3 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadInt64(mixed ...$args){}
	/**
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Func_3 $readValueHelper
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadValueSlow($ptr, $ofs, $readValueHelper){}
	/**
	 * @uses MarshalMethodsOverride::WriteByte_1 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteByte_2 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteByte_3 ($ptr, $val)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteByte(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::WriteInt16_1 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt16_2 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt16_3 ($ptr, $val)
	 * @uses MarshalMethodsOverride::WriteInt16_4 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt16_5 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt16_6 ($ptr, $val)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteInt16(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::WriteInt32_1 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt32_2 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt32_3 ($ptr, $val)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteInt32(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::WriteInt64_1 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt64_2 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteInt64_3 ($ptr, $val)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteInt64(mixed ...$args){}
	/**
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Runtime\InteropServices\T $val
	 * @param \System\Action_3 $writeValueHelper
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteValueSlow($ptr, $ofs, $val, $writeValueHelper){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetLastPInvokeError(){}
	/**
	 * @param \System\Int32|int $error
	 * @return \System\Void|void
	 */
	public static function SetLastPInvokeError($error){}
	/**
	 * @param \System\Reflection\MethodInfo $m
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PrelinkCore($m){}
	/**
	 * @param \System\RuntimeMethodHandleInternal $m
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalPrelink($m){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetExceptionPointers(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetExceptionCode(){}
	/**
	 * @uses MarshalMethodsOverride::StructureToPtr_1 ($structure, $ptr, $fDeleteOld)
	 * @uses MarshalMethodsOverride::StructureToPtr_2 ($structure, $ptr, $fDeleteOld)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StructureToPtr(mixed ...$args){}
	/**
	 * @param \System\IntPtr $ptr
	 * @param \System\Object|object $structure
	 * @param \System\Boolean $allowValueClasses
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function PtrToStructureHelper($ptr, $structure, $allowValueClasses){}
	/**
	 * @uses MarshalMethodsOverride::DestroyStructure_1 ($ptr, $structuretype)
	 * @uses MarshalMethodsOverride::DestroyStructure_2 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function DestroyStructure(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	protected static function IsPinnable($obj){}
	/**
	 * @return \System\Boolean
	 */
	protected static function get_IsBuiltInComSupported(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsBuiltInComSupportedInternal(){}
	/**
	 * @uses MarshalMethodsOverride::GetHINSTANCE_1 ($m)
	 * @uses MarshalMethodsOverride::GetHINSTANCE_2 ($m)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetHINSTANCE(mixed ...$args){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @param \System\IntPtr $errorInfo
	 * @return \System\Exception
	 */
	protected static function GetExceptionForHRInternal($errorCode, $errorInfo){}
	/**
	 * @param \System\Exception $e
	 * @return \System\Int32|int
	 */
	public static function GetHRForException($e){}
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo $typeInfo
	 * @return \System\String|string
	 */
	public static function GetTypeInfoName($typeInfo){}
	/**
	 * @uses MarshalMethodsOverride::GetTypeFromCLSID_1 ($clsid, $server, $throwOnError)
	 * @uses MarshalMethodsOverride::GetTypeFromCLSID_2 ($clsid, $server, $retType)
	 * @uses MarshalMethodsOverride::GetTypeFromCLSID_3 ($clsid)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTypeFromCLSID(mixed ...$args){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\IntPtr
	 */
	public static function GetIUnknownForObject($o){}
	/**
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIUnknownForObjectNative($o){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\IntPtr
	 */
	public static function GetIDispatchForObject($o){}
	/**
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetIDispatchForObjectNative($o){}
	/**
	 * @uses MarshalMethodsOverride::GetComInterfaceForObject_1 ($o, $T)
	 * @uses MarshalMethodsOverride::GetComInterfaceForObject_2 ($o)
	 * @uses MarshalMethodsOverride::GetComInterfaceForObject_3 ($o, $T, $mode)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetComInterfaceForObject(mixed ...$args){}
	/**
	 * @param \System\Object|object $o
	 * @param \System\Type $t
	 * @param \System\Boolean $fEnableCustomizedQueryInterface
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetComInterfaceForObjectNative($o, $t, $fEnableCustomizedQueryInterface){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @return \System\Object|object
	 */
	public static function GetObjectForIUnknown($pUnk){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetObjectForIUnknownNative($pUnk){}
	/**
	 * @param \System\IntPtr $unknown
	 * @return \System\Object|object
	 */
	public static function GetUniqueObjectForIUnknown($unknown){}
	/**
	 * @param \System\IntPtr $unknown
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUniqueObjectForIUnknownNative($unknown){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public static function GetTypedObjectForIUnknown($pUnk, $t){}
	/**
	 * @uses MarshalMethodsOverride::CreateAggregatedObject_1 ($pOuter, $o)
	 * @uses MarshalMethodsOverride::CreateAggregatedObject_2 ($pOuter, $o)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateAggregatedObject(mixed ...$args){}
	/**
	 * @param \System\IntPtr $pOuter
	 * @param \System\Object|object $o
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateAggregatedObjectNative($pOuter, $o){}
	/**
	 * @return \System\Void|void
	 */
	public static function CleanupUnusedObjectsInCurrentContext(){}
	/**
	 * @return \System\Boolean
	 */
	public static function AreComObjectsAvailableForCleanup(){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean
	 */
	public static function IsComObject($o){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Int32|int
	 */
	public static function ReleaseComObject($o){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Int32|int
	 */
	protected static function InternalReleaseComObject($o){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Int32|int
	 */
	public static function FinalReleaseComObject($o){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Void|void
	 */
	protected static function InternalFinalReleaseComObject($o){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	public static function GetComObjectData($obj, $key){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $key
	 * @param \System\Object|object $data
	 * @return \System\Boolean
	 */
	public static function SetComObjectData($obj, $key, $data){}
	/**
	 * @uses MarshalMethodsOverride::CreateWrapperOfType_1 ($o, $t)
	 * @uses MarshalMethodsOverride::CreateWrapperOfType_2 ($o)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CreateWrapperOfType(mixed ...$args){}
	/**
	 * @param \System\Object|object $o
	 * @param \System\Type $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalCreateWrapperOfType($o, $t){}
	/**
	 * @param \System\Type $t
	 * @return \System\Boolean
	 */
	public static function IsTypeVisibleFromCom($t){}
	/**
	 * @uses MarshalMethodsOverride::GetNativeVariantForObject_1 ($obj, $pDstNativeVariant)
	 * @uses MarshalMethodsOverride::GetNativeVariantForObject_2 ($obj, $pDstNativeVariant)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetNativeVariantForObject(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\IntPtr $pDstNativeVariant
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetNativeVariantForObjectNative($obj, $pDstNativeVariant){}
	/**
	 * @uses MarshalMethodsOverride::GetObjectForNativeVariant_1 ($pSrcNativeVariant)
	 * @uses MarshalMethodsOverride::GetObjectForNativeVariant_2 ($pSrcNativeVariant)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetObjectForNativeVariant(mixed ...$args){}
	/**
	 * @param \System\IntPtr $pSrcNativeVariant
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetObjectForNativeVariantNative($pSrcNativeVariant){}
	/**
	 * @uses MarshalMethodsOverride::GetObjectsForNativeVariants_1 ($aSrcNativeVariant, $cVars)
	 * @uses MarshalMethodsOverride::GetObjectsForNativeVariants_2 ($aSrcNativeVariant, $cVars)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetObjectsForNativeVariants(mixed ...$args){}
	/**
	 * @param \System\IntPtr $aSrcNativeVariant
	 * @param \System\Int32|int $cVars
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetObjectsForNativeVariantsNative($aSrcNativeVariant, $cVars){}
	/**
	 * @param \System\Type $t
	 * @return \System\Int32|int
	 */
	public static function GetStartComSlot($t){}
	/**
	 * @param \System\Type $t
	 * @return \System\Int32|int
	 */
	public static function GetEndComSlot($t){}
	/**
	 * @param \System\String|string $monikerName
	 * @return \System\Object|object
	 */
	public static function BindToMoniker($monikerName){}
	/**
	 * @param \System\UInt32 $reserved
	 * @param \System\IntPtr& $ppbc
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateBindCtx($reserved, $ppbc){}
	/**
	 * @param \System\IntPtr $pbc
	 * @param \System\String|string $szUserName
	 * @param \System\UInt32& $pchEaten
	 * @param \System\IntPtr& $ppmk
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MkParseDisplayName($pbc, $szUserName, $pchEaten, $ppmk){}
	/**
	 * @param \System\IntPtr $pmk
	 * @param \System\UInt32 $grfOpt
	 * @param \System\Guid& $iidResult
	 * @param \System\IntPtr& $ppvResult
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function BindMoniker($pmk, $grfOpt, $iidResult, $ppvResult){}
	/**
	 * @param \System\Object|object $otp
	 * @param \System\Boolean $fIsWeak
	 * @return \System\Void|void
	 */
	public static function ChangeWrapperHandleStrength($otp, $fIsWeak){}
	/**
	 * @param \System\IntPtr $ptr
	 * @param \System\Type $t
	 * @return \System\Delegate
	 */
	protected static function GetDelegateForFunctionPointerInternal($ptr, $t){}
	/**
	 * @param \System\Delegate $d
	 * @return \System\IntPtr
	 */
	protected static function GetFunctionPointerForDelegateInternal($d){}
	/**
	 * @uses MarshalMethodsOverride::AllocHGlobal_1 ($cb)
	 * @uses MarshalMethodsOverride::AllocHGlobal_2 ($cb)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AllocHGlobal(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::PtrToStringAnsi_1 ($ptr)
	 * @uses MarshalMethodsOverride::PtrToStringAnsi_2 ($ptr, $len)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PtrToStringAnsi(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::PtrToStringUni_1 ($ptr)
	 * @uses MarshalMethodsOverride::PtrToStringUni_2 ($ptr, $len)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PtrToStringUni(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::PtrToStringUTF8_1 ($ptr)
	 * @uses MarshalMethodsOverride::PtrToStringUTF8_2 ($ptr, $byteLen)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PtrToStringUTF8(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::SizeOf_1 ($structure)
	 * @uses MarshalMethodsOverride::SizeOf_2 ($structure)
	 * @uses MarshalMethodsOverride::SizeOf_3 ($t)
	 * @uses MarshalMethodsOverride::SizeOf_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SizeOf(mixed ...$args){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @param \System\Guid& $iid
	 * @param \System\IntPtr& $ppv
	 * @return \System\Int32|int
	 */
	public static function QueryInterface($pUnk, $iid, $ppv){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @return \System\Int32|int
	 */
	public static function AddRef($pUnk){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @return \System\Int32|int
	 */
	public static function Release($pUnk){}
	/**
	 * @uses MarshalMethodsOverride::UnsafeAddrOfPinnedArrayElement_1 ($arr, $index)
	 * @uses MarshalMethodsOverride::UnsafeAddrOfPinnedArrayElement_2 ($arr, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function UnsafeAddrOfPinnedArrayElement(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::Copy_1 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_2 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_3 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_4 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_5 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_6 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_7 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_8 ($source, $startIndex, $destination, $length)
	 * @uses MarshalMethodsOverride::Copy_9 ($source, $destination, $startIndex, $length)
	 * @uses MarshalMethodsOverride::Copy_10 ($source, $destination, $startIndex, $length)
	 * @uses MarshalMethodsOverride::Copy_11 ($source, $destination, $startIndex, $length)
	 * @uses MarshalMethodsOverride::Copy_12 ($source, $destination, $startIndex, $length)
	 * @uses MarshalMethodsOverride::Copy_13 ($source, $destination, $startIndex, $length)
	 * @uses MarshalMethodsOverride::Copy_14 ($source, $destination, $startIndex, $length)
	 * @uses MarshalMethodsOverride::Copy_15 ($source, $destination, $startIndex, $length)
	 * @uses MarshalMethodsOverride::Copy_16 ($source, $destination, $startIndex, $length)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Copy(mixed ...$args){}
	/**
	 * @param \System\Runtime\InteropServices\T[] $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CopyToNative($source, $startIndex, $destination, $length){}
	/**
	 * @param \System\IntPtr $source
	 * @param \System\Runtime\InteropServices\T[] $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CopyToManaged($source, $destination, $startIndex, $length){}
	/**
	 * @uses MarshalMethodsOverride::ReadIntPtr_1 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadIntPtr_2 ($ptr, $ofs)
	 * @uses MarshalMethodsOverride::ReadIntPtr_3 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadIntPtr(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::WriteIntPtr_1 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteIntPtr_2 ($ptr, $ofs, $val)
	 * @uses MarshalMethodsOverride::WriteIntPtr_3 ($ptr, $val)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteIntPtr(mixed ...$args){}
	/**
	 * @param \System\Reflection\MethodInfo $m
	 * @return \System\Void|void
	 */
	public static function Prelink($m){}
	/**
	 * @param \System\Type $c
	 * @return \System\Void|void
	 */
	public static function PrelinkAll($c){}
	/**
	 * @uses MarshalMethodsOverride::PtrToStructure_1 ($ptr, $structureType)
	 * @uses MarshalMethodsOverride::PtrToStructure_2 ($ptr, $structure)
	 * @uses MarshalMethodsOverride::PtrToStructure_3 ($ptr, $structure)
	 * @uses MarshalMethodsOverride::PtrToStructure_4 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PtrToStructure(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::GetExceptionForHR_1 ($errorCode)
	 * @uses MarshalMethodsOverride::GetExceptionForHR_2 ($errorCode, $errorInfo)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetExceptionForHR(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::ThrowExceptionForHR_1 ($errorCode)
	 * @uses MarshalMethodsOverride::ThrowExceptionForHR_2 ($errorCode, $errorInfo)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ThrowExceptionForHR(mixed ...$args){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToBSTR($s){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToCoTaskMemAnsi($s){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToCoTaskMemUnicode($s){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToGlobalAllocAnsi($s){}
	/**
	 * @param \System\Security\SecureString $s
	 * @return \System\IntPtr
	 */
	public static function SecureStringToGlobalAllocUnicode($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToHGlobalAnsi($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToHGlobalUni($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToCoTaskMemUni($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToCoTaskMemUTF8($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToCoTaskMemAnsi($s){}
	/**
	 * @param \System\Type $type
	 * @return \System\Guid
	 */
	public static function GenerateGuidForType($type){}
	/**
	 * @param \System\Type $type
	 * @return \System\String|string
	 */
	public static function GenerateProgIdForType($type){}
	/**
	 * @uses MarshalMethodsOverride::GetDelegateForFunctionPointer_1 ($ptr, $t)
	 * @uses MarshalMethodsOverride::GetDelegateForFunctionPointer_2 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetDelegateForFunctionPointer(mixed ...$args){}
	/**
	 * @uses MarshalMethodsOverride::GetFunctionPointerForDelegate_1 ($d)
	 * @uses MarshalMethodsOverride::GetFunctionPointerForDelegate_2 ($d)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetFunctionPointerForDelegate(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetHRForLastWin32Error(){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\Void|void
	 */
	public static function ZeroFreeBSTR($s){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\Void|void
	 */
	public static function ZeroFreeCoTaskMemAnsi($s){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\Void|void
	 */
	public static function ZeroFreeCoTaskMemUnicode($s){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\Void|void
	 */
	public static function ZeroFreeCoTaskMemUTF8($s){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\Void|void
	 */
	public static function ZeroFreeGlobalAllocAnsi($s){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\Void|void
	 */
	public static function ZeroFreeGlobalAllocUnicode($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToBSTR($s){}
	/**
	 * @param \System\IntPtr $ptr
	 * @return \System\String|string
	 */
	public static function PtrToStringBSTR($ptr){}
	/**
	 * @param \System\IntPtr $s
	 * @return \System\UInt32
	 */
	protected static function SysStringByteLen($s){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $safeHandle
	 * @param \System\IntPtr $handle
	 * @return \System\Void|void
	 */
	public static function InitHandle($safeHandle, $handle){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetLastWin32Error(){}
	/**
	 * @return \System\String|string
	 */
	public static function GetLastPInvokeErrorMessage(){}
	/**
	 * @uses MarshalMethodsOverride::PtrToStringAuto_1 ($ptr, $len)
	 * @uses MarshalMethodsOverride::PtrToStringAuto_2 ($ptr)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function PtrToStringAuto(mixed ...$args){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToHGlobalAuto($s){}
	/**
	 * @param \System\String|string $s
	 * @return \System\IntPtr
	 */
	public static function StringToCoTaskMemAuto($s){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetSystemMaxDBCSCharSize(){}
	/**
	 * @param \System\IntPtr $ptr
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsNullOrWin32Atom($ptr){}
	/**
	 * @param \System\String|string $s
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferLength
	 * @param \System\Boolean $bestFit
	 * @param \System\Boolean $throwOnUnmappableChar
	 * @return \System\Int32|int
	 */
	protected static function StringToAnsiString($s, $buffer, $bufferLength, $bestFit, $throwOnUnmappableChar){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @return \System\Int32|int
	 */
	protected static function GetAnsiStringByteCount($chars){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars
	 * @param \System\Span_1 $bytes
	 * @return \System\Void|void
	 */
	protected static function GetAnsiStringBytes($chars, $bytes){}
	/**
	 * @param \System\IntPtr $hglobal
	 * @return \System\Void|void
	 */
	public static function FreeHGlobal($hglobal){}
	/**
	 * @param \System\IntPtr $pv
	 * @param \System\IntPtr $cb
	 * @return \System\IntPtr
	 */
	public static function ReAllocHGlobal($pv, $cb){}
	/**
	 * @param \System\Int32|int $cb
	 * @return \System\IntPtr
	 */
	public static function AllocCoTaskMem($cb){}
	/**
	 * @param \System\IntPtr $ptr
	 * @return \System\Void|void
	 */
	public static function FreeCoTaskMem($ptr){}
	/**
	 * @param \System\IntPtr $pv
	 * @param \System\Int32|int $cb
	 * @return \System\IntPtr
	 */
	public static function ReAllocCoTaskMem($pv, $cb){}
	/**
	 * @param \System\Int32|int $length
	 * @return \System\IntPtr
	 */
	protected static function AllocBSTR($length){}
	/**
	 * @param \System\UInt32 $length
	 * @return \System\IntPtr
	 */
	protected static function AllocBSTRByteLen($length){}
	/**
	 * @param \System\IntPtr $ptr
	 * @return \System\Void|void
	 */
	public static function FreeBSTR($ptr){}
	/**
	 * @param \System\String|string $progID
	 * @param \System\String|string $server
	 * @param \System\Boolean $throwOnError
	 * @return \System\Type
	 */
	protected static function GetTypeFromProgID($progID, $server, $throwOnError){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetLastSystemError(){}
	/**
	 * @param \System\Int32|int $error
	 * @return \System\Void|void
	 */
	public static function SetLastSystemError($error){}
	/**
	 * @param \System\Int32|int $error
	 * @return \System\String|string
	 */
	public static function GetPInvokeErrorMessage($error){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
