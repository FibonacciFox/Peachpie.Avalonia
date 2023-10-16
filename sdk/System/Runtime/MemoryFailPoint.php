<?php
namespace System\Runtime;
/**
 */
class MemoryFailPoint extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject implements 
	\System\IDisposable
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_LastKnownFreeAddressSpace(){}
	/**
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function set_LastKnownFreeAddressSpace($value){}
	/**
	 * @param \System\Int64|int $addend
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function AddToLastKnownFreeAddressSpace($addend){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function get_LastTimeCheckingAddressSpace(){}
	/**
	 * @param \System\Int64|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function set_LastTimeCheckingAddressSpace($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Disposing(){}
	/**
	 * @param \System\Int64|int $size
	 * @return \System\Int64|int
	 */
	protected static function AddMemoryFailPointReservation($size){}
	/**
	 * @return \System\UInt64
	 */
	protected static function get_MemoryFailPointReservedMemory(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetTopOfMemory(){}
	/**
	 * @param \System\UInt64& $availPageFile
	 * @param \System\UInt64& $totalAddressSpaceFree
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckForAvailableMemory($availPageFile, $totalAddressSpaceFree){}
	/**
	 * @param \System\UInt64 $size
	 * @param \System\Boolean $shouldThrow
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CheckForFreeAddressSpace($size, $shouldThrow){}
	/**
	 * @param \System\Void* $address
	 * @param \System\UInt64 $size
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function MemFreeAfterAddress($address, $size){}
	/**
	 * @param \System\UIntPtr $numBytes
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GrowPageFileIfNecessaryAndPossible($numBytes){}
}
