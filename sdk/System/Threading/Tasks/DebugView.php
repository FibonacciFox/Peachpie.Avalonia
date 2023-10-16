<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DebugViewMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] protected  function MemberwiseClone_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Finalize_2(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
}
/**
 */
class DebugView extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $MaximumConcurrencyLevel;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 * @property
	 */
	public readonly $ScheduledTasks;
	/**
	 * @var \System\Threading\Tasks\ConcurrentExclusiveSchedulerPair
	 * @property
	 */
	public readonly $SchedulerPair;
	/**
	 * @var \System\Threading\Tasks\ConcurrentExclusiveSchedulerPair+ProcessingMode
	 * @property
	 */
	public readonly $Mode;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 * @property
	 */
	public readonly $ScheduledExclusive;
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[System\Threading\Tasks\Task]
	 * @property
	 */
	public readonly $ScheduledConcurrent;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CurrentlyExecutingTaskCount;
	/**
	 * @var \System\Threading\Tasks\TaskScheduler
	 * @property
	 */
	public readonly $TargetScheduler;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_MaximumConcurrencyLevel(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_ScheduledTasks(){}
	/**
	 * @return \System\Threading\Tasks\ConcurrentExclusiveSchedulerPair
	 */
	public  function get_SchedulerPair(){}
	/**
	 * @uses DebugViewMethodsOverride::GetType_1 ()
	 * @uses DebugViewMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
	/**
	 * @uses DebugViewMethodsOverride::MemberwiseClone_1 ()
	 * @uses DebugViewMethodsOverride::MemberwiseClone_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function MemberwiseClone(mixed ...$args){}
	/**
	 * @uses DebugViewMethodsOverride::Finalize_1 ()
	 * @uses DebugViewMethodsOverride::Finalize_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Finalize(mixed ...$args){}
	/**
	 * @uses DebugViewMethodsOverride::ToString_1 ()
	 * @uses DebugViewMethodsOverride::ToString_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @uses DebugViewMethodsOverride::Equals_1 ($obj)
	 * @uses DebugViewMethodsOverride::Equals_2 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses DebugViewMethodsOverride::GetHashCode_1 ()
	 * @uses DebugViewMethodsOverride::GetHashCode_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @return \System\Threading\Tasks\ProcessingMode
	 */
	public  function get_Mode(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_ScheduledExclusive(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function get_ScheduledConcurrent(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_CurrentlyExecutingTaskCount(){}
	/**
	 * @return \System\Threading\Tasks\TaskScheduler
	 */
	public  function get_TargetScheduler(){}
}
