<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThreadMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Join_1($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Join_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Join_3($timeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_1($parameter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Start_2($parameter, $captureContext, $internalThread){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Start_3(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Start_4($captureContext, $internalThread){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function UnsafeStart_1($parameter){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function UnsafeStart_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sleep_1($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function Sleep_2($timeout){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Abort_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Abort_2($stateInfo){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetApartmentState_1($state){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function SetApartmentState_2($state, $throwOnError){}
	/**
	 * @return \System\Byte
	 */
	#[MethodOverride] public static function VolatileRead_1($address){}
	/**
	 * @return \System\Double|double
	 */
	#[MethodOverride] public static function VolatileRead_2($address){}
	/**
	 * @return \System\Int16
	 */
	#[MethodOverride] public static function VolatileRead_3($address){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public static function VolatileRead_4($address){}
	/**
	 * @return \System\Int64|int
	 */
	#[MethodOverride] public static function VolatileRead_5($address){}
	/**
	 * @return \System\IntPtr
	 */
	#[MethodOverride] public static function VolatileRead_6($address){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function VolatileRead_7($address){}
	/**
	 * @return \System\SByte
	 */
	#[MethodOverride] public static function VolatileRead_8($address){}
	/**
	 * @return \System\Single
	 */
	#[MethodOverride] public static function VolatileRead_9($address){}
	/**
	 * @return \System\UInt16
	 */
	#[MethodOverride] public static function VolatileRead_10($address){}
	/**
	 * @return \System\UInt32
	 */
	#[MethodOverride] public static function VolatileRead_11($address){}
	/**
	 * @return \System\UInt64
	 */
	#[MethodOverride] public static function VolatileRead_12($address){}
	/**
	 * @return \System\UIntPtr
	 */
	#[MethodOverride] public static function VolatileRead_13($address){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_1($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_2($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_3($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_4($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_5($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_6($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_7($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_8($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_9($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_10($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_11($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_12($address, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public static function VolatileWrite_13($address, $value){}
}
/**
 */
class Thread extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject
{
	/**
	 * @var \System\Threading\ExecutionContext
	 * @field
	 */
	protected $_executionContext;
	/**
	 * @var \System\Threading\SynchronizationContext
	 * @field
	 */
	protected $_synchronizationContext;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ManagedThreadId;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsAlive;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsBackground;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsThreadPoolThread;
	/**
	 * @var \System\Threading\ThreadPriority
	 * @property
	 */
	public $Priority;
	/**
	 * @var \System\Threading\ThreadState
	 * @property
	 */
	public readonly $ThreadState;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public $CurrentCulture;
	/**
	 * @var \System\Globalization\CultureInfo
	 * @property
	 */
	public $CurrentUICulture;
	/**
	 * @var \System\Security\Principal\IPrincipal
	 * @property
	 */
	public $CurrentPrincipal;
	/**
	 * @var \System\Threading\Thread
	 * @property
	 */
	public readonly $CurrentThread;
	/**
	 * @var \System\Threading\ExecutionContext
	 * @property
	 */
	public readonly $ExecutionContext;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Name;
	/**
	 * @var \System\Threading\ApartmentState
	 * @property
	 */
	public $ApartmentState;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ManagedThreadId(){}
	/**
	 * @return \System\Threading\ThreadHandle
	 */
	protected  function GetNativeHandle(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartCore(){}
	/**
	 * @param \System\Threading\ThreadHandle $t
	 * @param \System\Int32|int $stackSize
	 * @param \System\Int32|int $priority
	 * @param \System\Char* $pThreadName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function StartInternal($t, $stackSize, $priority, $pThreadName){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StartCallback(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalGetCurrentThread(){}
	/**
	 * @param \System\Int32|int $millisecondsTimeout
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SleepInternal($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	protected static function UninterruptibleSleep0(){}
	/**
	 * @param \System\Int32|int $iterations
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SpinWaitInternal($iterations){}
	/**
	 * @param \System\Int32|int $iterations
	 * @return \System\Void|void
	 */
	public static function SpinWait($iterations){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function YieldInternal(){}
	/**
	 * @return \System\Boolean
	 */
	public static function Yield(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InitializeCurrentThread(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentThreadNative(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initialize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalFinalize(){}
	/**
	 * @param \System\Threading\ThreadHandle $t
	 * @param \System\String|string $name
	 * @param \System\Int32|int $len
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InformThreadNameChange($t, $name, $len){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsAlive(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsBackground(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsBackground($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsBackgroundNative(){}
	/**
	 * @param \System\Boolean $isBackground
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetBackgroundNative($isBackground){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsThreadPoolThread(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	protected  function set_IsThreadPoolThread($value){}
	/**
	 * @return \System\Threading\ThreadPriority
	 */
	public  function get_Priority(){}
	/**
	 * @param \System\Threading\ThreadPriority $value
	 * @return \System\Void|void
	 */
	public  function set_Priority($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPriorityNative(){}
	/**
	 * @param \System\Int32|int $priority
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetPriorityNative($priority){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentOSThreadId(){}
	/**
	 * @return \System\Threading\ThreadState
	 */
	public  function get_ThreadState(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetThreadStateNative(){}
	/**
	 * @return \System\Threading\ApartmentState
	 */
	public  function GetApartmentState(){}
	/**
	 * @param \System\Threading\ApartmentState $state
	 * @param \System\Boolean $throwOnError
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetApartmentStateUnchecked($state, $throwOnError){}
	/**
	 * @return \System\Int32|int
	 */
	protected  function GetApartmentStateNative(){}
	/**
	 * @param \System\Int32|int $state
	 * @return \System\Int32|int
	 */
	protected  function SetApartmentStateNative($state){}
	/**
	 * @return \System\Void|void
	 */
	public  function DisableComObjectEagerCleanup(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Interrupt(){}
	/**
	 * @uses ThreadMethodsOverride::Join_1 ($millisecondsTimeout)
	 * @uses ThreadMethodsOverride::Join_2 ()
	 * @uses ThreadMethodsOverride::Join_3 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Join(mixed ...$args){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function get_OptimalMaxSpinWaitsPerSpinIteration(){}
	/**
	 * @return \System\Int32|int
	 */
	protected static function GetCurrentProcessorNumber(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetCurrentProcessorId(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function ResetThreadPoolThread(){}
	/**
	 * @param \System\Boolean $internalThread
	 * @return \System\Void|void
	 */
	protected static function ThrowIfNoThreadStart($internalThread){}
	/**
	 * @uses ThreadMethodsOverride::Start_1 ($parameter)
	 * @uses ThreadMethodsOverride::Start_2 ($parameter, $captureContext, $internalThread)
	 * @uses ThreadMethodsOverride::Start_3 ()
	 * @uses ThreadMethodsOverride::Start_4 ($captureContext, $internalThread)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Start(mixed ...$args){}
	/**
	 * @uses ThreadMethodsOverride::UnsafeStart_1 ($parameter)
	 * @uses ThreadMethodsOverride::UnsafeStart_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function UnsafeStart(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function InternalUnsafeStart(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RequireCurrentThread(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @param \System\Boolean $uiCulture
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCultureOnUnstartedThread($value, $uiCulture){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ThreadNameChanged($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function get_CurrentCulture(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public  function set_CurrentCulture($value){}
	/**
	 * @return \System\Globalization\CultureInfo
	 */
	public  function get_CurrentUICulture(){}
	/**
	 * @param \System\Globalization\CultureInfo $value
	 * @return \System\Void|void
	 */
	public  function set_CurrentUICulture($value){}
	/**
	 * @return \System\Security\Principal\IPrincipal
	 */
	public static function get_CurrentPrincipal(){}
	/**
	 * @param \System\Security\Principal\IPrincipal $value
	 * @return \System\Void|void
	 */
	public static function set_CurrentPrincipal($value){}
	/**
	 * @return \System\Threading\Thread
	 */
	public static function get_CurrentThread(){}
	/**
	 * @uses ThreadMethodsOverride::Sleep_1 ($millisecondsTimeout)
	 * @uses ThreadMethodsOverride::Sleep_2 ($timeout)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Sleep(mixed ...$args){}
	/**
	 * @return \System\UInt64
	 */
	protected static function get_CurrentOSThreadId(){}
	/**
	 * @return \System\Threading\ExecutionContext
	 */
	public  function get_ExecutionContext(){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Name(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Name($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function SetThreadPoolWorkerThreadName(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ResetThreadPoolThreadSlow(){}
	/**
	 * @uses ThreadMethodsOverride::Abort_1 ()
	 * @uses ThreadMethodsOverride::Abort_2 ($stateInfo)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Abort(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function ResetAbort(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Suspend(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Resume(){}
	/**
	 * @return \System\Void|void
	 */
	public static function BeginCriticalRegion(){}
	/**
	 * @return \System\Void|void
	 */
	public static function EndCriticalRegion(){}
	/**
	 * @return \System\Void|void
	 */
	public static function BeginThreadAffinity(){}
	/**
	 * @return \System\Void|void
	 */
	public static function EndThreadAffinity(){}
	/**
	 * @return \System\LocalDataStoreSlot
	 */
	public static function AllocateDataSlot(){}
	/**
	 * @param \System\String|string $name
	 * @return \System\LocalDataStoreSlot
	 */
	public static function AllocateNamedDataSlot($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\LocalDataStoreSlot
	 */
	public static function GetNamedDataSlot($name){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Void|void
	 */
	public static function FreeNamedDataSlot($name){}
	/**
	 * @param \System\LocalDataStoreSlot $slot
	 * @return \System\Object|object
	 */
	public static function GetData($slot){}
	/**
	 * @param \System\LocalDataStoreSlot $slot
	 * @param \System\Object|object $data
	 * @return \System\Void|void
	 */
	public static function SetData($slot, $data){}
	/**
	 * @return \System\Threading\ApartmentState
	 */
	public  function get_ApartmentState(){}
	/**
	 * @param \System\Threading\ApartmentState $value
	 * @return \System\Void|void
	 */
	public  function set_ApartmentState($value){}
	/**
	 * @uses ThreadMethodsOverride::SetApartmentState_1 ($state)
	 * @uses ThreadMethodsOverride::SetApartmentState_2 ($state, $throwOnError)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetApartmentState(mixed ...$args){}
	/**
	 * @param \System\Threading\ApartmentState $state
	 * @return \System\Boolean
	 */
	public  function TrySetApartmentState($state){}
	/**
	 * @return \System\Threading\CompressedStack
	 */
	public  function GetCompressedStack(){}
	/**
	 * @param \System\Threading\CompressedStack $stack
	 * @return \System\Void|void
	 */
	public  function SetCompressedStack($stack){}
	/**
	 * @return \System\AppDomain
	 */
	public static function GetDomain(){}
	/**
	 * @return \System\Int32|int
	 */
	public static function GetDomainID(){}
	/**
	 * @return \System\Void|void
	 */
	public static function MemoryBarrier(){}
	/**
	 * @uses ThreadMethodsOverride::VolatileRead_1 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_2 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_3 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_4 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_5 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_6 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_7 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_8 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_9 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_10 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_11 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_12 ($address)
	 * @uses ThreadMethodsOverride::VolatileRead_13 ($address)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function VolatileRead(mixed ...$args){}
	/**
	 * @uses ThreadMethodsOverride::VolatileWrite_1 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_2 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_3 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_4 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_5 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_6 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_7 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_8 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_9 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_10 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_11 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_12 ($address, $value)
	 * @uses ThreadMethodsOverride::VolatileWrite_13 ($address, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function VolatileWrite(mixed ...$args){}
}
