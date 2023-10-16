<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnmanagedBufferMethodsOverride
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
class UnmanagedBuffer extends \System\Runtime\InteropServices\SafeBuffer implements 
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
	 * @param \System\Int32|int $byteLength
	 * @return \System\Security\UnmanagedBuffer
	 */
	public static function Allocate($byteLength){}
	/**
	 * @param \System\Security\UnmanagedBuffer $source
	 * @param \System\Security\UnmanagedBuffer $destination
	 * @param \System\UInt64 $bytesLength
	 * @return \System\Void|void
	 */
	protected static function Copy($source, $destination, $bytesLength){}
	/**
	 * @uses UnmanagedBufferMethodsOverride::Initialize_1 ($numBytes)
	 * @uses UnmanagedBufferMethodsOverride::Initialize_2 ($numElements, $sizeOfEachElement)
	 * @uses UnmanagedBufferMethodsOverride::Initialize_3 ($numElements)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Initialize(mixed ...$args){}
	/**
	 * @uses UnmanagedBufferMethodsOverride::Dispose_1 ()
	 * @uses UnmanagedBufferMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
}
