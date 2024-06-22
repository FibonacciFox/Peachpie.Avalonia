<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait UnsafeOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $o
	 * @return \T|object
	 */
	#[MethodOverride]public static function As_1 ($o){}
	/**
	 * @deprecated
	 * @param \TFrom& $source
	 * @return \TTo&
	 */
	#[MethodOverride]public static function As_2 ($source){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\Int32|int $elementOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function Add_1 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\IntPtr $elementOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function Add_2 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \System\Void* $source
	 * @param \System\Int32|int $elementOffset
	 * @return \System\Void*
	 */
	#[MethodOverride]public static function Add_3 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\UIntPtr $elementOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function Add_4 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\UIntPtr $byteOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function AddByteOffset_1 ($source, $byteOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\IntPtr $byteOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function AddByteOffset_2 ($source, $byteOffset){}
	/**
	 * @deprecated
	 * @param \System\Void* $destination
	 * @param \T& $source
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_1 ($destination, $source){}
	/**
	 * @deprecated
	 * @param \T& $destination
	 * @param \System\Void* $source
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Copy_2 ($destination, $source){}
	/**
	 * @deprecated
	 * @param \System\Void* $destination
	 * @param \System\Void* $source
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CopyBlock_1 ($destination, $source, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Byte& $destination
	 * @param \System\Byte& $source
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CopyBlock_2 ($destination, $source, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Void* $destination
	 * @param \System\Void* $source
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CopyBlockUnaligned_1 ($destination, $source, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Byte& $destination
	 * @param \System\Byte& $source
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function CopyBlockUnaligned_2 ($destination, $source, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Void* $startAddress
	 * @param \System\Byte $value
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function InitBlock_1 ($startAddress, $value, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Byte& $startAddress
	 * @param \System\Byte $value
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function InitBlock_2 ($startAddress, $value, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Void* $startAddress
	 * @param \System\Byte $value
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function InitBlockUnaligned_1 ($startAddress, $value, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Byte& $startAddress
	 * @param \System\Byte $value
	 * @param \System\UInt32 $byteCount
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function InitBlockUnaligned_2 ($startAddress, $value, $byteCount){}
	/**
	 * @deprecated
	 * @param \System\Void* $source
	 * @return \T|object
	 */
	#[MethodOverride]public static function ReadUnaligned_1 ($source){}
	/**
	 * @deprecated
	 * @param \System\Byte& $source
	 * @return \T|object
	 */
	#[MethodOverride]public static function ReadUnaligned_2 ($source){}
	/**
	 * @deprecated
	 * @param \System\Void* $destination
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteUnaligned_1 ($destination, $value){}
	/**
	 * @deprecated
	 * @param \System\Byte& $destination
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function WriteUnaligned_2 ($destination, $value){}
	/**
	 * @deprecated
	 * @param \System\Void* $source
	 * @return \T&
	 */
	#[MethodOverride]public static function AsRef_1 ($source){}
	/**
	 * @deprecated
	 * @param \T& &$source
	 * @return \T&
	 */
	#[MethodOverride]public static function AsRef_2 (&$source){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\Int32|int $elementOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function Subtract_1 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \System\Void* $source
	 * @param \System\Int32|int $elementOffset
	 * @return \System\Void*
	 */
	#[MethodOverride]public static function Subtract_2 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\IntPtr $elementOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function Subtract_3 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\UIntPtr $elementOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function Subtract_4 ($source, $elementOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\IntPtr $byteOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function SubtractByteOffset_1 ($source, $byteOffset){}
	/**
	 * @deprecated
	 * @param \T& $source
	 * @param \System\UIntPtr $byteOffset
	 * @return \T&
	 */
	#[MethodOverride]public static function SubtractByteOffset_2 ($source, $byteOffset){}
}
class Unsafe extends \System\Object
{
	use UnsafeOverride;


	/**
	 * @param \T& $value
	 * @return \System\Void*
	 */
	public static function AsPointer($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function SizeOf(){}
	/**
	 * @uses UnsafeOverride::As_1 <br>public , args: ($o)<br>
	 * @uses UnsafeOverride::As_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|\TTo&|mixed|\override
	 */
	#[MethodOverridePublic]function As (\override ...$args){}
	/**
	 * @uses UnsafeOverride::Add_1 <br>public , args: ($source, $elementOffset)<br>
	 * @uses UnsafeOverride::Add_2 <br>public , args: ($source, $elementOffset)<br>
	 * @uses UnsafeOverride::Add_3 <br>public , args: ($source, $elementOffset)<br>
	 * @uses UnsafeOverride::Add_4 <br>public , args: ($source, $elementOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|\System\Void*|mixed|\override
	 */
	#[MethodOverridePublic]function Add (\override ...$args){}
	/**
	 * @uses UnsafeOverride::AddByteOffset_1 <br>public , args: ($source, $byteOffset)<br>
	 * @uses UnsafeOverride::AddByteOffset_2 <br>public , args: ($source, $byteOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|mixed|\override
	 */
	#[MethodOverridePublic]function AddByteOffset (\override ...$args){}
	/**
	 * @param \T& $left
	 * @param \T& $right
	 * @return \System\Boolean|bool
	 */
	public static function AreSame($left, $right){}
	/**
	 * @uses UnsafeOverride::Copy_1 <br>public , args: ($destination, $source)<br>
	 * @uses UnsafeOverride::Copy_2 <br>public , args: ($destination, $source)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Copy (\override ...$args){}
	/**
	 * @uses UnsafeOverride::CopyBlock_1 <br>public , args: ($destination, $source, $byteCount)<br>
	 * @uses UnsafeOverride::CopyBlock_2 <br>public , args: ($destination, $source, $byteCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyBlock (\override ...$args){}
	/**
	 * @uses UnsafeOverride::CopyBlockUnaligned_1 <br>public , args: ($destination, $source, $byteCount)<br>
	 * @uses UnsafeOverride::CopyBlockUnaligned_2 <br>public , args: ($destination, $source, $byteCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyBlockUnaligned (\override ...$args){}
	/**
	 * @param \T& $left
	 * @param \T& $right
	 * @return \System\Boolean|bool
	 */
	public static function IsAddressGreaterThan($left, $right){}
	/**
	 * @param \T& $left
	 * @param \T& $right
	 * @return \System\Boolean|bool
	 */
	public static function IsAddressLessThan($left, $right){}
	/**
	 * @uses UnsafeOverride::InitBlock_1 <br>public , args: ($startAddress, $value, $byteCount)<br>
	 * @uses UnsafeOverride::InitBlock_2 <br>public , args: ($startAddress, $value, $byteCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function InitBlock (\override ...$args){}
	/**
	 * @uses UnsafeOverride::InitBlockUnaligned_1 <br>public , args: ($startAddress, $value, $byteCount)<br>
	 * @uses UnsafeOverride::InitBlockUnaligned_2 <br>public , args: ($startAddress, $value, $byteCount)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function InitBlockUnaligned (\override ...$args){}
	/**
	 * @uses UnsafeOverride::ReadUnaligned_1 <br>public , args: ($source)<br>
	 * @uses UnsafeOverride::ReadUnaligned_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePublic]function ReadUnaligned (\override ...$args){}
	/**
	 * @uses UnsafeOverride::WriteUnaligned_1 <br>public , args: ($destination, $value)<br>
	 * @uses UnsafeOverride::WriteUnaligned_2 <br>public , args: ($destination, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function WriteUnaligned (\override ...$args){}
	/**
	 * @param \System\Void* $source
	 * @return \T|object
	 */
	public static function Read($source){}
	/**
	 * @param \System\Void* $destination
	 * @param \T|object $value
	 * @return \System\Void|void
	 */
	public static function Write($destination, $value){}
	/**
	 * @uses UnsafeOverride::AsRef_1 <br>public , args: ($source)<br>
	 * @uses UnsafeOverride::AsRef_2 <br>public , args: (&$source)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|mixed|\override
	 */
	#[MethodOverridePublic]function AsRef (\override ...$args){}
	/**
	 * @param \T& $origin
	 * @param \T& $target
	 * @return \System\IntPtr
	 */
	public static function ByteOffset($origin, $target){}
	/**
	 * @return \T&
	 */
	public static function NullRef(){}
	/**
	 * @param \T& $source
	 * @return \System\Boolean|bool
	 */
	public static function IsNullRef($source){}
	/**
	 * @param \T& &$value
	 * @return \System\Void|void
	 */
	public static function SkipInit(&$value){}
	/**
	 * @uses UnsafeOverride::Subtract_1 <br>public , args: ($source, $elementOffset)<br>
	 * @uses UnsafeOverride::Subtract_2 <br>public , args: ($source, $elementOffset)<br>
	 * @uses UnsafeOverride::Subtract_3 <br>public , args: ($source, $elementOffset)<br>
	 * @uses UnsafeOverride::Subtract_4 <br>public , args: ($source, $elementOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|\System\Void*|mixed|\override
	 */
	#[MethodOverridePublic]function Subtract (\override ...$args){}
	/**
	 * @uses UnsafeOverride::SubtractByteOffset_1 <br>public , args: ($source, $byteOffset)<br>
	 * @uses UnsafeOverride::SubtractByteOffset_2 <br>public , args: ($source, $byteOffset)<br>
	 * @var mixed|\override ...$args
	 * @return \T&|mixed|\override
	 */
	#[MethodOverridePublic]function SubtractByteOffset (\override ...$args){}
	/**
	 * @param \System\Object|object $box
	 * @return \T&
	 */
	public static function Unbox($box){}
}