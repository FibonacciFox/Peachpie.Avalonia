<?php
namespace System\Runtime\InteropServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SafeBufferMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Initialize_1($numBytes){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Initialize_2($numElements, $sizeOfEachElement){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Initialize_3($numElements){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2($disposing){}
}
/**
 */
class SafeBuffer extends \Microsoft\Win32\SafeHandles\SafeHandleZeroOrMinusOneIsInvalid implements 
	\System\IDisposable
{
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $handle;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public readonly $ByteLength;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsInvalid;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsClosed;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_Uninitialized(){}
	/**
	 * @uses SafeBufferMethodsOverride::Initialize_1 ($numBytes)
	 * @uses SafeBufferMethodsOverride::Initialize_2 ($numElements, $sizeOfEachElement)
	 * @uses SafeBufferMethodsOverride::Initialize_3 ($numElements)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
	/**
	 * @param \System\Byte*& $pointer
	 * @return \System\Void|void
	 */
	public  function AcquirePointer($pointer){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleasePointer(){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @return \System\Runtime\InteropServices\T
	 */
	public  function Read($byteOffset){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \System\Runtime\InteropServices\T[] $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function ReadArray($byteOffset, $array, $index, $count){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \System\Span_1 $buffer
	 * @return \System\Void|void
	 */
	public  function ReadSpan($byteOffset, $buffer){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \System\Runtime\InteropServices\T $value
	 * @return \System\Void|void
	 */
	public  function Write($byteOffset, $value){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \System\Runtime\InteropServices\T[] $array
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function WriteArray($byteOffset, $array, $index, $count){}
	/**
	 * @param \System\UInt64 $byteOffset
	 * @param \System\ReadOnlySpan_1 $data
	 * @return \System\Void|void
	 */
	public  function WriteSpan($byteOffset, $data){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_ByteLength(){}
	/**
	 * @param \System\Byte* $ptr
	 * @param \System\UIntPtr $sizeInBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SpaceCheck($ptr, $sizeInBytes){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NotEnoughRoom(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function NotInitialized(){}
	/**
	 * @return \System\UInt32
	 */
	protected static function AlignedSizeOf(){}
	/**
	 * @return \System\UInt32
	 */
	protected static function SizeOf(){}
	/**
	 * @uses SafeBufferMethodsOverride::Dispose_1 ()
	 * @uses SafeBufferMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
