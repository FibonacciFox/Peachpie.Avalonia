<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MarshalOverride {
	/**
	 * @deprecated
	 * @param \System\Type $t
	 * @param \System\String|string $fieldName
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function OffsetOf_1 ($t, $fieldName){}
	/**
	 * @deprecated
	 * @param \System\String|string $fieldName
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function OffsetOf_2 ($fieldName){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function ReadByte_1 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function ReadByte_2 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function ReadByte_3 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function ReadInt16_1 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function ReadInt16_2 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function ReadInt16_3 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ReadInt32_1 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ReadInt32_2 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function ReadInt32_3 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Object|object &$ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function ReadInt64_1 (&$ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function ReadInt64_2 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function ReadInt64_3 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Byte $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteByte_1 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Byte $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteByte_2 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Byte $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteByte_3 ($ptr, $val){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Int16 $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt16_1 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Int16 $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt16_2 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int16 $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt16_3 ($ptr, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Char $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt16_4 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\Object|object &$ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Char $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt16_5 (&$ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Char $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt16_6 ($ptr, $val){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Int32|int $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt32_1 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Int32|int $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt32_2 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt32_3 ($ptr, $val){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Int64|int $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt64_1 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\Int64|int $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt64_2 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int64|int $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteInt64_3 ($ptr, $val){}
	/**
	 * @deprecated
	 * @param \System\Object|object $structure
	 * @param \System\IntPtr $ptr
	 * @param \System\Boolean|bool $fDeleteOld
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function StructureToPtr_1 ($structure, $ptr, $fDeleteOld){}
	/**
	 * @deprecated
	 * @param \T|object $structure
	 * @param \System\IntPtr $ptr
	 * @param \System\Boolean|bool $fDeleteOld
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function StructureToPtr_2 ($structure, $ptr, $fDeleteOld){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Type $structuretype
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function DestroyStructure_1 ($ptr, $structuretype){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function DestroyStructure_2 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $cb
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function AllocHGlobal_1 ($cb){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $cb
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function AllocHGlobal_2 ($cb){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringAnsi_1 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $len
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringAnsi_2 ($ptr, $len){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringUni_1 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $len
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringUni_2 ($ptr, $len){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringUTF8_1 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $byteLen
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringUTF8_2 ($ptr, $byteLen){}
	/**
	 * @deprecated
	 * @param \System\Object|object $structure
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function SizeOf_1 ($structure){}
	/**
	 * @deprecated
	 * @param \T|object $structure
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function SizeOf_2 ($structure){}
	/**
	 * @deprecated
	 * @param \System\Type $t
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function SizeOf_3 ($t){}
	/**
	 * @deprecated
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function SizeOf_4 (){}
	/**
	 * @deprecated
	 * @param \System\Array|array $arr
	 * @param \System\Int32|int $index
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function UnsafeAddrOfPinnedArrayElement_1 ($arr, $index){}
	/**
	 * @deprecated
	 * @param \T $arr
	 * @param \System\Int32|int $index
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function UnsafeAddrOfPinnedArrayElement_2 ($arr, $index){}
	/**
	 * @deprecated
	 * @param \System\Int32 $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_1 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\Char $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_2 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\Int16 $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_3 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\Int64 $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_4 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\Single $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_5 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\Double $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_6 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\Byte $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_7 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Int32|int $startIndex
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_8 ($source, $startIndex, $destination, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Int32 $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_9 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Char $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_10 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Int16 $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_11 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Int64 $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_12 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Single $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_13 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Double $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_14 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\Byte $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_15 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $source
	 * @param \System\IntPtr $destination
	 * @param \System\Int32|int $startIndex
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_16 ($source, $destination, $startIndex, $length){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function ReadIntPtr_1 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function ReadIntPtr_2 ($ptr, $ofs){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function ReadIntPtr_3 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\IntPtr $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIntPtr_1 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\Object|object $ptr
	 * @param \System\Int32|int $ofs
	 * @param \System\IntPtr $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIntPtr_2 ($ptr, $ofs, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\IntPtr $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteIntPtr_3 ($ptr, $val){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Type $structureType
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function PtrToStructure_1 ($ptr, $structureType){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Object|object $structure
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function PtrToStructure_2 ($ptr, $structure){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \T|object $structure
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function PtrToStructure_3 ($ptr, $structure){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \T|object
	 */
	#[MethodOverride]public static function PtrToStructure_4 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $errorCode
	 * @return \System\Exception
	 */
	#[MethodOverride]public static function GetExceptionForHR_1 ($errorCode){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $errorCode
	 * @param \System\IntPtr $errorInfo
	 * @return \System\Exception
	 */
	#[MethodOverride]public static function GetExceptionForHR_2 ($errorCode, $errorInfo){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $errorCode
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowExceptionForHR_1 ($errorCode){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $errorCode
	 * @param \System\IntPtr $errorInfo
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function ThrowExceptionForHR_2 ($errorCode, $errorInfo){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Type $t
	 * @return \System\Delegate
	 */
	#[MethodOverride]public static function GetDelegateForFunctionPointer_1 ($ptr, $t){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \TDelegate
	 */
	#[MethodOverride]public static function GetDelegateForFunctionPointer_2 ($ptr){}
	/**
	 * @deprecated
	 * @param \System\Delegate $d
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function GetFunctionPointerForDelegate_1 ($d){}
	/**
	 * @deprecated
	 * @param \TDelegate $d
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function GetFunctionPointerForDelegate_2 ($d){}
	/**
	 * @deprecated
	 * @param \System\Guid $clsid
	 * @return \System\Type
	 */
	#[MethodOverride]public static function GetTypeFromCLSID_1 ($clsid){}
	/**
	 * @deprecated
	 * @param \System\Guid $clsid
	 * @param \System\String|string $server
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Type
	 */
	#[MethodOverride]protected static function GetTypeFromCLSID_2 ($clsid, $server, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $pOuter
	 * @param \System\Object|object $o
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function CreateAggregatedObject_1 ($pOuter, $o){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $pOuter
	 * @param \T|object $o
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function CreateAggregatedObject_2 ($pOuter, $o){}
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function CreateWrapperOfType_1 ($o, $t){}
	/**
	 * @deprecated
	 * @param \T|object $o
	 * @return \TWrapper
	 */
	#[MethodOverride]public static function CreateWrapperOfType_2 ($o){}
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @param \System\Type $T
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function GetComInterfaceForObject_1 ($o, $T){}
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @param \System\Type $T
	 * @param \System\Runtime\InteropServices\CustomQueryInterfaceMode $mode
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function GetComInterfaceForObject_2 ($o, $T, $mode){}
	/**
	 * @deprecated
	 * @param \T|object $o
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function GetComInterfaceForObject_3 ($o){}
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\IntPtr $pDstNativeVariant
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function GetNativeVariantForObject_1 ($obj, $pDstNativeVariant){}
	/**
	 * @deprecated
	 * @param \T|object $obj
	 * @param \System\IntPtr $pDstNativeVariant
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function GetNativeVariantForObject_2 ($obj, $pDstNativeVariant){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $pSrcNativeVariant
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function GetObjectForNativeVariant_1 ($pSrcNativeVariant){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $pSrcNativeVariant
	 * @return \T|object
	 */
	#[MethodOverride]public static function GetObjectForNativeVariant_2 ($pSrcNativeVariant){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $aSrcNativeVariant
	 * @param \System\Int32|int $cVars
	 * @return \System\Object
	 */
	#[MethodOverride]public static function GetObjectsForNativeVariants_1 ($aSrcNativeVariant, $cVars){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $aSrcNativeVariant
	 * @param \System\Int32|int $cVars
	 * @return \T
	 */
	#[MethodOverride]public static function GetObjectsForNativeVariants_2 ($aSrcNativeVariant, $cVars){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @param \System\Int32|int $len
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringAuto_1 ($ptr, $len){}
	/**
	 * @deprecated
	 * @param \System\IntPtr $ptr
	 * @return \System\String|string
	 */
	#[MethodOverride]public static function PtrToStringAuto_2 ($ptr){}
}
class Marshal extends \System\Object
{
	use MarshalOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $SystemDefaultCharSize;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int32|int
	 */
	public static $SystemMaxDBCSCharSize;
	/**
	 * @param \System\Type $t
	 * @param \System\Boolean|bool $throwIfNotMarshalable
	 * @return \System\Int32|int
	 */
	protected static function SizeOfHelper($t, $throwIfNotMarshalable){}
	/**
	 * @uses MarshalOverride::OffsetOf_1 <br>public , args: ($t, $fieldName)<br>
	 * @uses MarshalOverride::OffsetOf_2 <br>public , args: ($fieldName)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function OffsetOf (\override ...$args){}
	private static function OffsetOfHelper($f){}
	/**
	 * @uses MarshalOverride::ReadByte_1 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadByte_2 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadByte_3 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|mixed|\override
	 */
	#[MethodOverridePublic]function ReadByte (\override ...$args){}
	/**
	 * @uses MarshalOverride::ReadInt16_1 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadInt16_2 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadInt16_3 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int16|mixed|\override
	 */
	#[MethodOverridePublic]function ReadInt16 (\override ...$args){}
	/**
	 * @uses MarshalOverride::ReadInt32_1 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadInt32_2 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadInt32_3 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function ReadInt32 (\override ...$args){}
	/**
	 * @uses MarshalOverride::ReadInt64_1 <br>public , args: (&$ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadInt64_2 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadInt64_3 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int64|int|mixed|\override
	 */
	#[MethodOverridePublic]function ReadInt64 (\override ...$args){}
	private static function ReadValueSlow($ptr, $ofs, $readValueHelper){}
	/**
	 * @uses MarshalOverride::WriteByte_1 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteByte_2 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteByte_3 <br>public , args: ($ptr, $val)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteByte (\override ...$args){}
	/**
	 * @uses MarshalOverride::WriteInt16_1 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt16_2 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt16_3 <br>public , args: ($ptr, $val)<br>
	 * @uses MarshalOverride::WriteInt16_4 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt16_5 <br>public , args: (&$ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt16_6 <br>public , args: ($ptr, $val)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteInt16 (\override ...$args){}
	/**
	 * @uses MarshalOverride::WriteInt32_1 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt32_2 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt32_3 <br>public , args: ($ptr, $val)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteInt32 (\override ...$args){}
	/**
	 * @uses MarshalOverride::WriteInt64_1 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt64_2 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteInt64_3 <br>public , args: ($ptr, $val)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteInt64 (\override ...$args){}
	private static function WriteValueSlow($ptr, $ofs, $val, $writeValueHelper){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetLastPInvokeError(){}
	/**
	 * @param \System\Int32|int $error
	 * @return \System\Void|void
	 */
	public static function SetLastPInvokeError($error){}
	private static function PrelinkCore($m){}
	private static function InternalPrelink($m){}
	/**
	 * @return \System\IntPtr
	 */
	public static function GetExceptionPointers(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetExceptionCode(){}
	/**
	 * @uses MarshalOverride::StructureToPtr_1 <br>public , args: ($structure, $ptr, $fDeleteOld)<br>
	 * @uses MarshalOverride::StructureToPtr_2 <br>public , args: ($structure, $ptr, $fDeleteOld)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function StructureToPtr (\override ...$args){}
	private static function PtrToStructureHelper($ptr, $structure, $allowValueClasses){}
	/**
	 * @uses MarshalOverride::DestroyStructure_1 <br>public , args: ($ptr, $structuretype)<br>
	 * @uses MarshalOverride::DestroyStructure_2 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function DestroyStructure (\override ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean|bool
	 */
	protected static function IsPinnable($obj){}
	/**
	 * @param \System\Int32|int $errorCode
	 * @param \System\IntPtr $errorInfo
	 * @return \System\Exception
	 */
	protected static function GetExceptionForHRInternal($errorCode, $errorInfo){}
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
	 * @uses MarshalOverride::AllocHGlobal_1 <br>public , args: ($cb)<br>
	 * @uses MarshalOverride::AllocHGlobal_2 <br>public , args: ($cb)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function AllocHGlobal (\override ...$args){}
	/**
	 * @uses MarshalOverride::PtrToStringAnsi_1 <br>public , args: ($ptr)<br>
	 * @uses MarshalOverride::PtrToStringAnsi_2 <br>public , args: ($ptr, $len)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function PtrToStringAnsi (\override ...$args){}
	/**
	 * @uses MarshalOverride::PtrToStringUni_1 <br>public , args: ($ptr)<br>
	 * @uses MarshalOverride::PtrToStringUni_2 <br>public , args: ($ptr, $len)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function PtrToStringUni (\override ...$args){}
	/**
	 * @uses MarshalOverride::PtrToStringUTF8_1 <br>public , args: ($ptr)<br>
	 * @uses MarshalOverride::PtrToStringUTF8_2 <br>public , args: ($ptr, $byteLen)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function PtrToStringUTF8 (\override ...$args){}
	/**
	 * @uses MarshalOverride::SizeOf_1 <br>public , args: ($structure)<br>
	 * @uses MarshalOverride::SizeOf_2 <br>public , args: ($structure)<br>
	 * @uses MarshalOverride::SizeOf_3 <br>public , args: ($t)<br>
	 * @uses MarshalOverride::SizeOf_4 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Int32|int|mixed|\override
	 */
	#[MethodOverridePublic]function SizeOf (\override ...$args){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @param \System\Guid& $iid
	 * @param \System\IntPtr& &$ppv
	 * @return \System\Int32|int
	 */
	public static function QueryInterface($pUnk, $iid, &$ppv){}
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
	 * @uses MarshalOverride::UnsafeAddrOfPinnedArrayElement_1 <br>public , args: ($arr, $index)<br>
	 * @uses MarshalOverride::UnsafeAddrOfPinnedArrayElement_2 <br>public , args: ($arr, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function UnsafeAddrOfPinnedArrayElement (\override ...$args){}
	/**
	 * @uses MarshalOverride::Copy_1 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_2 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_3 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_4 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_5 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_6 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_7 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_8 <br>public , args: ($source, $startIndex, $destination, $length)<br>
	 * @uses MarshalOverride::Copy_9 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @uses MarshalOverride::Copy_10 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @uses MarshalOverride::Copy_11 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @uses MarshalOverride::Copy_12 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @uses MarshalOverride::Copy_13 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @uses MarshalOverride::Copy_14 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @uses MarshalOverride::Copy_15 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @uses MarshalOverride::Copy_16 <br>public , args: ($source, $destination, $startIndex, $length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Copy (\override ...$args){}
	private static function CopyToNative($source, $startIndex, $destination, $length){}
	private static function CopyToManaged($source, $destination, $startIndex, $length){}
	/**
	 * @uses MarshalOverride::ReadIntPtr_1 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadIntPtr_2 <br>public , args: ($ptr, $ofs)<br>
	 * @uses MarshalOverride::ReadIntPtr_3 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function ReadIntPtr (\override ...$args){}
	/**
	 * @uses MarshalOverride::WriteIntPtr_1 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteIntPtr_2 <br>public , args: ($ptr, $ofs, $val)<br>
	 * @uses MarshalOverride::WriteIntPtr_3 <br>public , args: ($ptr, $val)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteIntPtr (\override ...$args){}
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
	 * @uses MarshalOverride::PtrToStructure_1 <br>public , args: ($ptr, $structureType)<br>
	 * @uses MarshalOverride::PtrToStructure_2 <br>public , args: ($ptr, $structure)<br>
	 * @uses MarshalOverride::PtrToStructure_3 <br>public , args: ($ptr, $structure)<br>
	 * @uses MarshalOverride::PtrToStructure_4 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\System\Void|void|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function PtrToStructure (\override ...$args){}
	/**
	 * @param \System\Reflection\Module $m
	 * @return \System\IntPtr
	 */
	public static function GetHINSTANCE($m){}
	/**
	 * @uses MarshalOverride::GetExceptionForHR_1 <br>public , args: ($errorCode)<br>
	 * @uses MarshalOverride::GetExceptionForHR_2 <br>public , args: ($errorCode, $errorInfo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Exception|mixed|\override
	 */
	#[MethodOverridePublic]function GetExceptionForHR (\override ...$args){}
	/**
	 * @uses MarshalOverride::ThrowExceptionForHR_1 <br>public , args: ($errorCode)<br>
	 * @uses MarshalOverride::ThrowExceptionForHR_2 <br>public , args: ($errorCode, $errorInfo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function ThrowExceptionForHR (\override ...$args){}
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
	private static function StringToHGlobalUTF8($s){}
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
	 * @uses MarshalOverride::GetDelegateForFunctionPointer_1 <br>public , args: ($ptr, $t)<br>
	 * @uses MarshalOverride::GetDelegateForFunctionPointer_2 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Delegate|\TDelegate|mixed|\override
	 */
	#[MethodOverridePublic]function GetDelegateForFunctionPointer (\override ...$args){}
	/**
	 * @uses MarshalOverride::GetFunctionPointerForDelegate_1 <br>public , args: ($d)<br>
	 * @uses MarshalOverride::GetFunctionPointerForDelegate_2 <br>public , args: ($d)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function GetFunctionPointerForDelegate (\override ...$args){}
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
	 * @uses MarshalOverride::GetTypeFromCLSID_1 <br>public , args: ($clsid)<br>
	 * @uses MarshalOverride::GetTypeFromCLSID_2 <br>protected , args: ($clsid, $server, $throwOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Type|mixed|\override
	 */
	#[MethodOverridePublic]function GetTypeFromCLSID (\override ...$args){}
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
	 * @param \System\Exception $e
	 * @return \System\Int32|int
	 */
	public static function GetHRForException($e){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function AreComObjectsAvailableForCleanup(){}
	/**
	 * @uses MarshalOverride::CreateAggregatedObject_1 <br>public , args: ($pOuter, $o)<br>
	 * @uses MarshalOverride::CreateAggregatedObject_2 <br>public , args: ($pOuter, $o)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function CreateAggregatedObject (\override ...$args){}
	/**
	 * @param \System\String|string $monikerName
	 * @return \System\Object|object
	 */
	public static function BindToMoniker($monikerName){}
	/**
	 * @return \System\Void|void
	 */
	public static function CleanupUnusedObjectsInCurrentContext(){}
	/**
	 * @uses MarshalOverride::CreateWrapperOfType_1 <br>public , args: ($o, $t)<br>
	 * @uses MarshalOverride::CreateWrapperOfType_2 <br>public , args: ($o)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\TWrapper|mixed|\override
	 */
	#[MethodOverridePublic]function CreateWrapperOfType (\override ...$args){}
	/**
	 * @param \System\Object|object $otp
	 * @param \System\Boolean|bool $fIsWeak
	 * @return \System\Void|void
	 */
	public static function ChangeWrapperHandleStrength($otp, $fIsWeak){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Int32|int
	 */
	public static function FinalReleaseComObject($o){}
	/**
	 * @uses MarshalOverride::GetComInterfaceForObject_1 <br>public , args: ($o, $T)<br>
	 * @uses MarshalOverride::GetComInterfaceForObject_2 <br>public , args: ($o, $T, $mode)<br>
	 * @uses MarshalOverride::GetComInterfaceForObject_3 <br>public , args: ($o)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function GetComInterfaceForObject (\override ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	public static function GetComObjectData($obj, $key){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\IntPtr
	 */
	public static function GetIDispatchForObject($o){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\IntPtr
	 */
	public static function GetIUnknownForObject($o){}
	/**
	 * @uses MarshalOverride::GetNativeVariantForObject_1 <br>public , args: ($obj, $pDstNativeVariant)<br>
	 * @uses MarshalOverride::GetNativeVariantForObject_2 <br>public , args: ($obj, $pDstNativeVariant)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function GetNativeVariantForObject (\override ...$args){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public static function GetTypedObjectForIUnknown($pUnk, $t){}
	/**
	 * @param \System\IntPtr $pUnk
	 * @return \System\Object|object
	 */
	public static function GetObjectForIUnknown($pUnk){}
	/**
	 * @uses MarshalOverride::GetObjectForNativeVariant_1 <br>public , args: ($pSrcNativeVariant)<br>
	 * @uses MarshalOverride::GetObjectForNativeVariant_2 <br>public , args: ($pSrcNativeVariant)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|object|\T|object|mixed|\override
	 */
	#[MethodOverridePublic]function GetObjectForNativeVariant (\override ...$args){}
	/**
	 * @uses MarshalOverride::GetObjectsForNativeVariants_1 <br>public , args: ($aSrcNativeVariant, $cVars)<br>
	 * @uses MarshalOverride::GetObjectsForNativeVariants_2 <br>public , args: ($aSrcNativeVariant, $cVars)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Object|\T|mixed|\override
	 */
	#[MethodOverridePublic]function GetObjectsForNativeVariants (\override ...$args){}
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
	 * @param \System\Runtime\InteropServices\ComTypes\ITypeInfo $typeInfo
	 * @return \System\String|string
	 */
	public static function GetTypeInfoName($typeInfo){}
	/**
	 * @param \System\IntPtr $unknown
	 * @return \System\Object|object
	 */
	public static function GetUniqueObjectForIUnknown($unknown){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Boolean|bool
	 */
	public static function IsComObject($o){}
	/**
	 * @param \System\Type $t
	 * @return \System\Boolean|bool
	 */
	public static function IsTypeVisibleFromCom($t){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Int32|int
	 */
	public static function ReleaseComObject($o){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Object|object $key
	 * @param \System\Object|object $data
	 * @return \System\Boolean|bool
	 */
	public static function SetComObjectData($obj, $key, $data){}
	/**
	 * @uses MarshalOverride::PtrToStringAuto_1 <br>public , args: ($ptr, $len)<br>
	 * @uses MarshalOverride::PtrToStringAuto_2 <br>public , args: ($ptr)<br>
	 * @var mixed|\override ...$args
	 * @return \System\String|string|mixed|\override
	 */
	#[MethodOverridePublic]function PtrToStringAuto (\override ...$args){}
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
	private static function IsNullOrWin32Atom($ptr){}
	/**
	 * @param \System\String|string $s
	 * @param \System\Byte* $buffer
	 * @param \System\Int32|int $bufferLength
	 * @param \System\Boolean|bool $bestFit
	 * @param \System\Boolean|bool $throwOnUnmappableChar
	 * @return \System\Int32|int
	 */
	protected static function StringToAnsiString($s, $buffer, $bufferLength, $bestFit, $throwOnUnmappableChar){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @return \System\Int32|int
	 */
	protected static function GetAnsiStringByteCount($chars){}
	/**
	 * @param \System\ReadOnlySpan_1 $chars [generic: System\Char]
	 * @param \System\Span_1 $bytes [generic: System\Byte]
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
	 * @param \System\Boolean|bool $throwOnError
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
}