<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnsafeMethodsOverride
{
	/**
	 * @return \System\Runtime\CompilerServices\T
	 */
	#[MethodOverride] public static function As_1($o){}
	/**
	 * @return \System\Runtime\CompilerServices\TTo&
	 */
	#[MethodOverride] public static function As_2($source){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function Add_1($source, $elementOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function Add_2($source, $elementOffset){}
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function Add_3($source, $elementOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function Add_4($source, $elementOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function AddByteOffset_1($source, $byteOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function AddByteOffset_2($source, $byteOffset){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_1($destination, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Copy_2($destination, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function CopyBlock_1($destination, $source, $byteCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function CopyBlock_2($destination, $source, $byteCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function CopyBlockUnaligned_1($destination, $source, $byteCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function CopyBlockUnaligned_2($destination, $source, $byteCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function InitBlock_1($startAddress, $value, $byteCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function InitBlock_2($startAddress, $value, $byteCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function InitBlockUnaligned_1($startAddress, $value, $byteCount){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function InitBlockUnaligned_2($startAddress, $value, $byteCount){}
	/**
	 * @return \System\Runtime\CompilerServices\T
	 */
	#[MethodOverride] public static function ReadUnaligned_1($source){}
	/**
	 * @return \System\Runtime\CompilerServices\T
	 */
	#[MethodOverride] public static function ReadUnaligned_2($source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteUnaligned_1($destination, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function WriteUnaligned_2($destination, $value){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function AsRef_1($source){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function AsRef_2($source){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function Subtract_1($source, $elementOffset){}
	/**
	 * @return \System\Void*
	 */
	#[MethodOverride] public static function Subtract_2($source, $elementOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function Subtract_3($source, $elementOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function Subtract_4($source, $elementOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function SubtractByteOffset_1($source, $byteOffset){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	#[MethodOverride] public static function SubtractByteOffset_2($source, $byteOffset){}
}
/**
 */
class Unsafe extends \System\Object
{
	/**
	 * @param \System\Runtime\CompilerServices\T& $value
	 * @return \System\Void*
	 */
	public static function AsPointer($value){}
	/**
	 * @return \System\Int32|int
	 */
	public static function SizeOf(){}
	/**
	 * @uses UnsafeMethodsOverride::As_1 ($o)
	 * @uses UnsafeMethodsOverride::As_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function As(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::Add_1 ($source, $elementOffset)
	 * @uses UnsafeMethodsOverride::Add_2 ($source, $elementOffset)
	 * @uses UnsafeMethodsOverride::Add_3 ($source, $elementOffset)
	 * @uses UnsafeMethodsOverride::Add_4 ($source, $elementOffset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Add(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::AddByteOffset_1 ($source, $byteOffset)
	 * @uses UnsafeMethodsOverride::AddByteOffset_2 ($source, $byteOffset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AddByteOffset(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\T& $left
	 * @param \System\Runtime\CompilerServices\T& $right
	 * @return \System\Boolean
	 */
	public static function AreSame($left, $right){}
	/**
	 * @uses UnsafeMethodsOverride::Copy_1 ($destination, $source)
	 * @uses UnsafeMethodsOverride::Copy_2 ($destination, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Copy(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::CopyBlock_1 ($destination, $source, $byteCount)
	 * @uses UnsafeMethodsOverride::CopyBlock_2 ($destination, $source, $byteCount)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CopyBlock(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::CopyBlockUnaligned_1 ($destination, $source, $byteCount)
	 * @uses UnsafeMethodsOverride::CopyBlockUnaligned_2 ($destination, $source, $byteCount)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function CopyBlockUnaligned(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\T& $left
	 * @param \System\Runtime\CompilerServices\T& $right
	 * @return \System\Boolean
	 */
	public static function IsAddressGreaterThan($left, $right){}
	/**
	 * @param \System\Runtime\CompilerServices\T& $left
	 * @param \System\Runtime\CompilerServices\T& $right
	 * @return \System\Boolean
	 */
	public static function IsAddressLessThan($left, $right){}
	/**
	 * @uses UnsafeMethodsOverride::InitBlock_1 ($startAddress, $value, $byteCount)
	 * @uses UnsafeMethodsOverride::InitBlock_2 ($startAddress, $value, $byteCount)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InitBlock(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::InitBlockUnaligned_1 ($startAddress, $value, $byteCount)
	 * @uses UnsafeMethodsOverride::InitBlockUnaligned_2 ($startAddress, $value, $byteCount)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function InitBlockUnaligned(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::ReadUnaligned_1 ($source)
	 * @uses UnsafeMethodsOverride::ReadUnaligned_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ReadUnaligned(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::WriteUnaligned_1 ($destination, $value)
	 * @uses UnsafeMethodsOverride::WriteUnaligned_2 ($destination, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WriteUnaligned(mixed ...$args){}
	/**
	 * @param \System\Void* $source
	 * @return \System\Runtime\CompilerServices\T
	 */
	public static function Read($source){}
	/**
	 * @param \System\Void* $destination
	 * @param \System\Runtime\CompilerServices\T $value
	 * @return \System\Void|void
	 */
	public static function Write($destination, $value){}
	/**
	 * @uses UnsafeMethodsOverride::AsRef_1 ($source)
	 * @uses UnsafeMethodsOverride::AsRef_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function AsRef(mixed ...$args){}
	/**
	 * @param \System\Runtime\CompilerServices\T& $origin
	 * @param \System\Runtime\CompilerServices\T& $target
	 * @return \System\IntPtr
	 */
	public static function ByteOffset($origin, $target){}
	/**
	 * @return \System\Runtime\CompilerServices\T&
	 */
	public static function NullRef(){}
	/**
	 * @param \System\Runtime\CompilerServices\T& $source
	 * @return \System\Boolean
	 */
	public static function IsNullRef($source){}
	/**
	 * @param \System\Runtime\CompilerServices\T& $value
	 * @return \System\Void|void
	 */
	public static function SkipInit($value){}
	/**
	 * @uses UnsafeMethodsOverride::Subtract_1 ($source, $elementOffset)
	 * @uses UnsafeMethodsOverride::Subtract_2 ($source, $elementOffset)
	 * @uses UnsafeMethodsOverride::Subtract_3 ($source, $elementOffset)
	 * @uses UnsafeMethodsOverride::Subtract_4 ($source, $elementOffset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Subtract(mixed ...$args){}
	/**
	 * @uses UnsafeMethodsOverride::SubtractByteOffset_1 ($source, $byteOffset)
	 * @uses UnsafeMethodsOverride::SubtractByteOffset_2 ($source, $byteOffset)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SubtractByteOffset(mixed ...$args){}
	/**
	 * @param \System\Object|object $box
	 * @return \System\Runtime\CompilerServices\T&
	 */
	public static function Unbox($box){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
