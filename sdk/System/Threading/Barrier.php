<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BarrierMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SignalAndWait_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SignalAndWait_2($cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SignalAndWait_3($timeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SignalAndWait_4($timeout, $cancellationToken){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SignalAndWait_5($millisecondsTimeout){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function SignalAndWait_6($millisecondsTimeout, $cancellationToken){}
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
class Barrier extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ParticipantsRemaining;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $ParticipantCount;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public $CurrentPhaseNumber;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ParticipantsRemaining(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ParticipantCount(){}
	/**
	 * @return \System\Int64|int
	 */
	public  function get_CurrentPhaseNumber(){}
	/**
	 * @param \System\Int64|int $value
	 * @return \System\Void|void
	 */
	protected  function set_CurrentPhaseNumber($value){}
	/**
	 * @param \System\Int32|int $currentTotal
	 * @param \System\Int32& $current
	 * @param \System\Int32& $total
	 * @param \System\Boolean& $sense
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetCurrentTotal($currentTotal, $current, $total, $sense){}
	/**
	 * @param \System\Int32|int $currentTotal
	 * @param \System\Int32|int $current
	 * @param \System\Int32|int $total
	 * @param \System\Boolean $sense
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetCurrentTotal($currentTotal, $current, $total, $sense){}
	/**
	 * @return \System\Int64|int
	 */
	public  function AddParticipant(){}
	/**
	 * @param \System\Int32|int $participantCount
	 * @return \System\Int64|int
	 */
	public  function AddParticipants($participantCount){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveParticipant(){}
	/**
	 * @param \System\Int32|int $participantCount
	 * @return \System\Void|void
	 */
	public  function RemoveParticipants($participantCount){}
	/**
	 * @uses BarrierMethodsOverride::SignalAndWait_1 ()
	 * @uses BarrierMethodsOverride::SignalAndWait_2 ($cancellationToken)
	 * @uses BarrierMethodsOverride::SignalAndWait_3 ($timeout)
	 * @uses BarrierMethodsOverride::SignalAndWait_4 ($timeout, $cancellationToken)
	 * @uses BarrierMethodsOverride::SignalAndWait_5 ($millisecondsTimeout)
	 * @uses BarrierMethodsOverride::SignalAndWait_6 ($millisecondsTimeout, $cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SignalAndWait(mixed ...$args){}
	/**
	 * @param \System\Boolean $observedSense
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FinishPhase($observedSense){}
	/**
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InvokePostPhaseAction($obj){}
	/**
	 * @param \System\Boolean $observedSense
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetResetEvents($observedSense){}
	/**
	 * @param \System\Threading\ManualResetEventSlim $currentPhaseEvent
	 * @param \System\Int64|int $observedPhase
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WaitCurrentPhase($currentPhaseEvent, $observedPhase){}
	/**
	 * @param \System\Threading\ManualResetEventSlim $currentPhaseEvent
	 * @param \System\Int32|int $totalTimeout
	 * @param \System\Threading\CancellationToken $token
	 * @param \System\Int64|int $observedPhase
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DiscontinuousWait($currentPhaseEvent, $totalTimeout, $token, $observedPhase){}
	/**
	 * @uses BarrierMethodsOverride::Dispose_1 ()
	 * @uses BarrierMethodsOverride::Dispose_2 ($disposing)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
