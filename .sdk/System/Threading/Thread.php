<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ThreadOverride {
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Join_1 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Join_2 (){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Join_3 ($timeout){}
	/**
	 * @deprecated
	 * @param \System\Object|object $parameter
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Start_1 ($parameter){}
	/**
	 * @deprecated
	 * @param \System\Object|object $parameter
	 * @param \System\Boolean|bool $captureContext
	 * @param \System\Boolean|bool $internalThread
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Start_2 ($parameter, $captureContext, $internalThread){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Start_3 (){}
	/**
	 * @deprecated
	 * @param \System\Boolean|bool $captureContext
	 * @param \System\Boolean|bool $internalThread
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function Start_4 ($captureContext, $internalThread){}
	/**
	 * @deprecated
	 * @param \System\Object|object $parameter
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function UnsafeStart_1 ($parameter){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function UnsafeStart_2 (){}
	/**
	 * @deprecated
	 * @param \System\Int32|int $millisecondsTimeout
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sleep_1 ($millisecondsTimeout){}
	/**
	 * @deprecated
	 * @param \System\TimeSpan $timeout
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function Sleep_2 ($timeout){}
	/**
	 * @deprecated
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Abort_1 (){}
	/**
	 * @deprecated
	 * @param \System\Object|object $stateInfo
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Abort_2 ($stateInfo){}
	/**
	 * @deprecated
	 * @param \System\Threading\ApartmentState $state
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function SetApartmentState_1 ($state){}
	/**
	 * @deprecated
	 * @param \System\Threading\ApartmentState $state
	 * @param \System\Boolean|bool $throwOnError
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function SetApartmentState_2 ($state, $throwOnError){}
	/**
	 * @deprecated
	 * @param \System\Byte& $address
	 * @return \System\Byte
	 */
	#[MethodOverride]public static function VolatileRead_1 ($address){}
	/**
	 * @deprecated
	 * @param \System\Double& $address
	 * @return \System\Double|double
	 */
	#[MethodOverride]public static function VolatileRead_2 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int16& $address
	 * @return \System\Int16
	 */
	#[MethodOverride]public static function VolatileRead_3 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int32& $address
	 * @return \System\Int32|int
	 */
	#[MethodOverride]public static function VolatileRead_4 ($address){}
	/**
	 * @deprecated
	 * @param \System\Int64& $address
	 * @return \System\Int64|int
	 */
	#[MethodOverride]public static function VolatileRead_5 ($address){}
	/**
	 * @deprecated
	 * @param \System\IntPtr& $address
	 * @return \System\IntPtr
	 */
	#[MethodOverride]public static function VolatileRead_6 ($address){}
	/**
	 * @deprecated
	 * @param \System\Object& $address
	 * @return \System\Object|object
	 */
	#[MethodOverride]public static function VolatileRead_7 ($address){}
	/**
	 * @deprecated
	 * @param \System\SByte& $address
	 * @return \System\SByte
	 */
	#[MethodOverride]public static function VolatileRead_8 ($address){}
	/**
	 * @deprecated
	 * @param \System\Single& $address
	 * @return \System\Single
	 */
	#[MethodOverride]public static function VolatileRead_9 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt16& $address
	 * @return \System\UInt16
	 */
	#[MethodOverride]public static function VolatileRead_10 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $address
	 * @return \System\UInt32
	 */
	#[MethodOverride]public static function VolatileRead_11 ($address){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $address
	 * @return \System\UInt64
	 */
	#[MethodOverride]public static function VolatileRead_12 ($address){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr& $address
	 * @return \System\UIntPtr
	 */
	#[MethodOverride]public static function VolatileRead_13 ($address){}
	/**
	 * @deprecated
	 * @param \System\Byte& $address
	 * @param \System\Byte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_1 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\Double& $address
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_2 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\Int16& $address
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_3 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\Int32& $address
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_4 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\Int64& $address
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_5 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\IntPtr& $address
	 * @param \System\IntPtr $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_6 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\Object& $address
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_7 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\SByte& $address
	 * @param \System\SByte $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_8 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\Single& $address
	 * @param \System\Single $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_9 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt16& $address
	 * @param \System\UInt16 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_10 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt32& $address
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_11 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\UInt64& $address
	 * @param \System\UInt64 $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_12 ($address, $value){}
	/**
	 * @deprecated
	 * @param \System\UIntPtr& $address
	 * @param \System\UIntPtr $value
	 * @return \System\Void|void
	 */
	#[MethodOverride]public static function VolatileWrite_13 ($address, $value){}
	/**
	 * @param \System\Threading\ThreadStart $start
	 */
	#[MethodOverride]public function __construct_1 ($start){}
	/**
	 * @param \System\Threading\ThreadStart $start
	 * @param \System\Int32|int $maxStackSize
	 */
	#[MethodOverride]public function __construct_2 ($start, $maxStackSize){}
	/**
	 * @param \System\Threading\ParameterizedThreadStart $start
	 */
	#[MethodOverride]public function __construct_3 ($start){}
	/**
	 * @param \System\Threading\ParameterizedThreadStart $start
	 * @param \System\Int32|int $maxStackSize
	 */
	#[MethodOverride]public function __construct_4 ($start, $maxStackSize){}
}
final class Thread extends \System\Runtime\ConstrainedExecution\CriticalFinalizerObject
{
	use ThreadOverride;
	/**
	 * @field
	 * @var \System\Threading\ExecutionContext
	 */
	protected $_executionContext;
	/**
	 * @field
	 * @var \System\Threading\SynchronizationContext
	 */
	protected $_synchronizationContext;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $ManagedThreadId;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsAlive;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsBackground;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsThreadPoolThread;
	/**
	 * @property
	 * @var \System\Threading\ThreadPriority
	 */
	public $Priority;
	/**
	 * @property
	 * @var \System\Threading\ThreadState
	 * @since readonly
	 */
	public $ThreadState;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 */
	public $CurrentCulture;
	/**
	 * @property
	 * @var \System\Globalization\CultureInfo
	 */
	public $CurrentUICulture;
	/**
	 * @property
	 * @var \System\Security\Principal\IPrincipal
	 */
	public $CurrentPrincipal;
	/**
	 * @property
	 * @var \System\Threading\Thread
	 * @since readonly
	 */
	public $CurrentThread;
	/**
	 * @property
	 * @var \System\Threading\ExecutionContext
	 * @since readonly
	 */
	public $ExecutionContext;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Threading\ApartmentState
	 */
	public $ApartmentState;
	/**
	 * @return \System\Threading\ThreadHandle
	 */
	protected function GetNativeHandle(){}
	private function StartCore(){}
	private static function StartInternal($t, $stackSize, $priority, $pThreadName){}
	private function StartCallback(){}
	private static function InternalGetCurrentThread(){}
	private static function SleepInternal($millisecondsTimeout){}
	/**
	 * @return \System\Void|void
	 */
	protected static function UninterruptibleSleep0(){}
	private static function SpinWaitInternal($iterations){}
	/**
	 * @param \System\Int32|int $iterations
	 * @return \System\Void|void
	 */
	public static function SpinWait($iterations){}
	private static function YieldInternal(){}
	/**
	 * @return \System\Boolean|bool
	 */
	public static function Yield(){}
	private static function InitializeCurrentThread(){}
	private static function GetCurrentThreadNative(){}
	private function Initialize(){}
	private function InternalFinalize(){}
	private static function InformThreadNameChange($t, $name, $len){}
	private function IsBackgroundNative(){}
	private function SetBackgroundNative($isBackground){}
	private function GetPriorityNative(){}
	private function SetPriorityNative($priority){}
	private static function GetCurrentOSThreadId(){}
	private function GetThreadStateNative(){}
	/**
	 * @return \System\Threading\ApartmentState
	 */
	public function GetApartmentState(){}
	private static function SetApartmentStateUnchecked($state, $throwOnError){}
	/**
	 * @return \System\Void|void
	 */
	public function DisableComObjectEagerCleanup(){}
	/**
	 * @return \System\Void|void
	 */
	public function Interrupt(){}
	/**
	 * @uses ThreadOverride::Join_1 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses ThreadOverride::Join_2 <br>public , args: ()<br>
	 * @uses ThreadOverride::Join_3 <br>public , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Join (\override ...$args){}
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
	protected function ResetThreadPoolThread(){}
	/**
	 * @param \System\Boolean|bool $internalThread
	 * @return \System\Void|void
	 */
	protected static function ThrowIfNoThreadStart($internalThread){}
	/**
	 * @uses ThreadOverride::Start_1 <br>public , args: ($parameter)<br>
	 * @uses ThreadOverride::Start_2 <br>private , args: ($parameter, $captureContext, $internalThread)<br>
	 * @uses ThreadOverride::Start_3 <br>public , args: ()<br>
	 * @uses ThreadOverride::Start_4 <br>private , args: ($captureContext, $internalThread)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Start (\override ...$args){}
	/**
	 * @uses ThreadOverride::UnsafeStart_1 <br>public , args: ($parameter)<br>
	 * @uses ThreadOverride::UnsafeStart_2 <br>public , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function UnsafeStart (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function InternalUnsafeStart(){}
	private function RequireCurrentThread(){}
	private function SetCultureOnUnstartedThread($value, $uiCulture){}
	private function ThreadNameChanged($value){}
	/**
	 * @uses ThreadOverride::Sleep_1 <br>public , args: ($millisecondsTimeout)<br>
	 * @uses ThreadOverride::Sleep_2 <br>public , args: ($timeout)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Sleep (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected function SetThreadPoolWorkerThreadName(){}
	private function ResetThreadPoolThreadSlow(){}
	/**
	 * @uses ThreadOverride::Abort_1 <br>public , args: ()<br>
	 * @uses ThreadOverride::Abort_2 <br>public , args: ($stateInfo)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Abort (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public static function ResetAbort(){}
	/**
	 * @return \System\Void|void
	 */
	public function Suspend(){}
	/**
	 * @return \System\Void|void
	 */
	public function Resume(){}
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
	 * @uses ThreadOverride::SetApartmentState_1 <br>public , args: ($state)<br>
	 * @uses ThreadOverride::SetApartmentState_2 <br>private , args: ($state, $throwOnError)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|\System\Boolean|bool|mixed|\override
	 */
	#[MethodOverridePublic]function SetApartmentState (\override ...$args){}
	/**
	 * @param \System\Threading\ApartmentState $state
	 * @return \System\Boolean|bool
	 */
	public function TrySetApartmentState($state){}
	/**
	 * @return \System\Threading\CompressedStack
	 */
	public function GetCompressedStack(){}
	/**
	 * @param \System\Threading\CompressedStack $stack
	 * @return \System\Void|void
	 */
	public function SetCompressedStack($stack){}
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
	 * @uses ThreadOverride::VolatileRead_1 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_2 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_3 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_4 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_5 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_6 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_7 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_8 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_9 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_10 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_11 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_12 <br>public , args: ($address)<br>
	 * @uses ThreadOverride::VolatileRead_13 <br>public , args: ($address)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Byte|\System\Double|double|\System\Int16|\System\Int32|int|\System\Int64|int|\System\IntPtr|\System\Object|object|\System\SByte|\System\Single|\System\UInt16|\System\UInt32|\System\UInt64|\System\UIntPtr|mixed|\override
	 */
	#[MethodOverridePublic]function VolatileRead (\override ...$args){}
	/**
	 * @uses ThreadOverride::VolatileWrite_1 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_2 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_3 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_4 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_5 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_6 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_7 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_8 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_9 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_10 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_11 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_12 <br>public , args: ($address, $value)<br>
	 * @uses ThreadOverride::VolatileWrite_13 <br>public , args: ($address, $value)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function VolatileWrite (\override ...$args){}
	/**
	 * @uses ThreadOverride::__construct_1 <br>public , args: ($start)<br>
	 * @uses ThreadOverride::__construct_2 <br>public , args: ($start, $maxStackSize)<br>
	 * @uses ThreadOverride::__construct_3 <br>public , args: ($start)<br>
	 * @uses ThreadOverride::__construct_4 <br>public , args: ($start, $maxStackSize)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}