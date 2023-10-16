<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CountsOfThreadsProcessingUserCallbacksMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class CountsOfThreadsProcessingUserCallbacks extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $Current;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public readonly $HighWatermark;
	/**
	 * @param \System\Byte $shift
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetInt16Value($shift){}
	/**
	 * @param \System\Int16 $value
	 * @param \System\Byte $shift
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetInt16Value($value, $shift){}
	/**
	 * @return \System\Int16
	 */
	public  function get_Current(){}
	/**
	 * @return \System\Void|void
	 */
	public  function IncrementCurrent(){}
	/**
	 * @return \System\Void|void
	 */
	public  function DecrementCurrent(){}
	/**
	 * @return \System\Int16
	 */
	public  function get_HighWatermark(){}
	/**
	 * @return \System\Void|void
	 */
	public  function ResetHighWatermark(){}
	/**
	 * @param \System\Threading\CountsOfThreadsProcessingUserCallbacks $newCounts
	 * @param \System\Threading\CountsOfThreadsProcessingUserCallbacks $oldCounts
	 * @return \System\Threading\CountsOfThreadsProcessingUserCallbacks
	 */
	public  function InterlockedCompareExchange($newCounts, $oldCounts){}
	/**
	 * @param \System\Threading\CountsOfThreadsProcessingUserCallbacks $lhs
	 * @param \System\Threading\CountsOfThreadsProcessingUserCallbacks $rhs
	 * @return \System\Boolean
	 */
	public static function op_Equality($lhs, $rhs){}
	/**
	 * @uses CountsOfThreadsProcessingUserCallbacksMethodsOverride::Equals_1 ($obj)
	 * @uses CountsOfThreadsProcessingUserCallbacksMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
