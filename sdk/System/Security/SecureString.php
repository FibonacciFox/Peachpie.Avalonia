<?php
namespace System\Security;
/**
 */
class SecureString extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @param \System\ReadOnlySpan_1 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $capacity
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureCapacity($capacity){}
	/**
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	public  function AppendChar($c){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @return \System\Security\SecureString
	 */
	public  function Copy(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	public  function InsertAt($index, $c){}
	/**
	 * @return \System\Boolean
	 */
	public  function IsReadOnly(){}
	/**
	 * @return \System\Void|void
	 */
	public  function MakeReadOnly(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Char $c
	 * @return \System\Void|void
	 */
	public  function SetAt($index, $c){}
	/**
	 * @param \System\Runtime\InteropServices\SafeBuffer& $bufferToRelease
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AcquireSpan($bufferToRelease){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureNotReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnsureNotDisposed(){}
	/**
	 * @return \System\IntPtr
	 */
	protected  function MarshalToBSTR(){}
	/**
	 * @param \System\Boolean $globalAlloc
	 * @param \System\Boolean $unicode
	 * @return \System\IntPtr
	 */
	protected  function MarshalToString($globalAlloc, $unicode){}
	/**
	 * @param \System\Int32|int $length
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetAlignedByteSize($length){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ProtectMemory(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UnprotectMemory(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
