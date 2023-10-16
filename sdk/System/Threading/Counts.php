<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CountsMethodsOverride
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
class Counts extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\UInt32
	 * @property
	 */
	public $SignalCount;
	/**
	 * @var \System\UInt16
	 * @property
	 */
	public readonly $WaiterCount;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $SpinnerCount;
	/**
	 * @var \System\Byte
	 * @property
	 */
	public readonly $CountOfWaitersSignaledToWake;
	/**
	 * @param \System\Byte $shift
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetUInt32Value($shift){}
	/**
	 * @param \System\UInt32 $value
	 * @param \System\Byte $shift
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetUInt32Value($value, $shift){}
	/**
	 * @param \System\Byte $shift
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetUInt16Value($shift){}
	/**
	 * @param \System\Byte $shift
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetByteValue($shift){}
	/**
	 * @return \System\UInt32
	 */
	public  function get_SignalCount(){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public  function set_SignalCount($value){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public  function AddSignalCount($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function DecrementSignalCount(){}
	/**
	 * @return \System\UInt16
	 */
	public  function get_WaiterCount(){}
	/**
	 * @return \System\Void|void
	 */
	public  function IncrementWaiterCount(){}
	/**
	 * @return \System\Void|void
	 */
	public  function DecrementWaiterCount(){}
	/**
	 * @return \System\Void|void
	 */
	public  function InterlockedDecrementWaiterCount(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_SpinnerCount(){}
	/**
	 * @return \System\Void|void
	 */
	public  function IncrementSpinnerCount(){}
	/**
	 * @return \System\Void|void
	 */
	public  function DecrementSpinnerCount(){}
	/**
	 * @return \System\Byte
	 */
	public  function get_CountOfWaitersSignaledToWake(){}
	/**
	 * @param \System\UInt32 $value
	 * @return \System\Void|void
	 */
	public  function AddUpToMaxCountOfWaitersSignaledToWake($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function DecrementCountOfWaitersSignaledToWake(){}
	/**
	 * @param \System\Threading\Counts $newCounts
	 * @param \System\Threading\Counts $oldCounts
	 * @return \System\Threading\Counts
	 */
	public  function InterlockedCompareExchange($newCounts, $oldCounts){}
	/**
	 * @param \System\Threading\Counts $lhs
	 * @param \System\Threading\Counts $rhs
	 * @return \System\Boolean
	 */
	public static function op_Equality($lhs, $rhs){}
	/**
	 * @uses CountsMethodsOverride::Equals_1 ($obj)
	 * @uses CountsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
