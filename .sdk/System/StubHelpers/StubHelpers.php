<?php
namespace System\StubHelpers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait StubHelpersOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function CheckStringLength_1 ($length){}
	/**
	 * @deprecated
	 * @param \System\UInt32 $length
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected static function CheckStringLength_2 ($length){}
}
class StubHelpers extends \System\Object
{
	use StubHelpersOverride;

	/**
	 * @param \System\IntPtr $pMD
	 * @return \System\IntPtr
	 */
	protected static function GetNDirectTarget($pMD){}
	/**
	 * @param \System\Delegate $pThis
	 * @return \System\IntPtr
	 */
	protected static function GetDelegateTarget($pThis){}
	/**
	 * @return \System\Void|void
	 */
	protected static function ClearLastError(){}
	/**
	 * @return \System\Void|void
	 */
	protected static function SetLastError(){}
	/**
	 * @param \System\Int32|int $resID
	 * @param \System\Int32|int $paramIdx
	 * @return \System\Void|void
	 */
	protected static function ThrowInteropParamException($resID, $paramIdx){}
	/**
	 * @param \System\StubHelpers\CleanupWorkListElement& $pCleanupWorkList
	 * @param \System\Runtime\InteropServices\SafeHandle $handle
	 * @return \System\IntPtr
	 */
	protected static function AddToCleanupList($pCleanupWorkList, $handle){}
	/**
	 * @param \System\StubHelpers\CleanupWorkListElement& $pCleanupWorkList
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	protected static function KeepAliveViaCleanupList($pCleanupWorkList, $obj){}
	/**
	 * @param \System\StubHelpers\CleanupWorkListElement& $pCleanupWorkList
	 * @return \System\Void|void
	 */
	protected static function DestroyCleanupList($pCleanupWorkList){}
	/**
	 * @param \System\Int32|int $hr
	 * @return \System\Exception
	 */
	protected static function GetHRExceptionObject($hr){}
	/**
	 * @param \System\Int32|int $hr
	 * @return \System\Exception
	 */
	protected static function InternalGetHRExceptionObject($hr){}
	/**
	 * @return \System\Exception
	 */
	protected static function GetPendingExceptionObject(){}
	/**
	 * @param \System\IntPtr $pMD
	 * @param \System\Int32|int $paramToken
	 * @param \System\IntPtr $hndManagedType
	 * @return \System\IntPtr
	 */
	protected static function CreateCustomMarshalerHelper($pMD, $paramToken, $hndManagedType){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $pHandle
	 * @param \System\Boolean& $success
	 * @return \System\IntPtr
	 */
	protected static function SafeHandleAddRef($pHandle, $success){}
	/**
	 * @param \System\Runtime\InteropServices\SafeHandle $pHandle
	 * @return \System\Void|void
	 */
	protected static function SafeHandleRelease($pHandle){}
	/**
	 * @param \System\IntPtr $pSecretParam
	 * @param \System\IntPtr $pThread
	 * @param \System\Object|object $pThis
	 * @return \System\IntPtr
	 */
	protected static function ProfilerBeginTransitionCallback($pSecretParam, $pThread, $pThis){}
	/**
	 * @param \System\IntPtr $pMD
	 * @param \System\IntPtr $pThread
	 * @return \System\Void|void
	 */
	protected static function ProfilerEndTransitionCallback($pMD, $pThread){}
	/**
	 * @uses StubHelpersOverride::CheckStringLength_1 <br>protected , args: ($length)<br>
	 * @uses StubHelpersOverride::CheckStringLength_2 <br>protected , args: ($length)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function CheckStringLength (\override ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Byte* $pNative
	 * @param \System\StubHelpers\CleanupWorkListElement& $pCleanupWorkList
	 * @return \System\Void|void
	 */
	protected static function FmtClassUpdateNativeInternal($obj, $pNative, $pCleanupWorkList){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Byte* $pNative
	 * @return \System\Void|void
	 */
	protected static function FmtClassUpdateCLRInternal($obj, $pNative){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\Byte* $pNative
	 * @return \System\Void|void
	 */
	protected static function LayoutDestroyNativeInternal($obj, $pNative){}
	/**
	 * @param \System\IntPtr $typeHandle
	 * @return \System\Object|object
	 */
	protected static function AllocateInternal($typeHandle){}
	/**
	 * @param \System\IntPtr $va_list
	 * @param \System\UInt32 $vaListSize
	 * @param \System\IntPtr $pArgIterator
	 * @return \System\Void|void
	 */
	protected static function MarshalToUnmanagedVaListInternal($va_list, $vaListSize, $pArgIterator){}
	/**
	 * @param \System\IntPtr $va_list
	 * @param \System\IntPtr $pArgIterator
	 * @return \System\Void|void
	 */
	protected static function MarshalToManagedVaListInternal($va_list, $pArgIterator){}
	/**
	 * @param \System\IntPtr $va_list
	 * @return \System\UInt32
	 */
	protected static function CalcVaListSize($va_list){}
	/**
	 * @param \System\Object|object $obj
	 * @param \System\IntPtr $pMD
	 * @param \System\Object|object $pThis
	 * @return \System\Void|void
	 */
	protected static function ValidateObject($obj, $pMD, $pThis){}
	/**
	 * @param \System\IntPtr $localDesc
	 * @param \System\IntPtr $nativeArg
	 * @return \System\Void|void
	 */
	protected static function LogPinnedArgument($localDesc, $nativeArg){}
	/**
	 * @param \System\IntPtr $byref
	 * @param \System\IntPtr $pMD
	 * @param \System\Object|object $pThis
	 * @return \System\Void|void
	 */
	protected static function ValidateByref($byref, $pMD, $pThis){}
	/**
	 * @return \System\IntPtr
	 */
	protected static function GetStubContext(){}
	/**
	 * @param \System\Object|object $o
	 * @param \System\Object $arr
	 * @return \System\Void|void
	 */
	protected static function ArrayTypeCheck($o, $arr){}
	/**
	 * @param \System\Object|object $o
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	protected static function MulticastDebuggerTraceHelper($o, $count){}
	/**
	 * @return \System\IntPtr
	 */
	protected static function NextCallReturnAddress(){}
}