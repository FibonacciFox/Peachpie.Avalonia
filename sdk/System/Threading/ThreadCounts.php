<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ThreadCountsMethodsOverride
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
class ThreadCounts extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Int16
	 * @property
	 */
	public $NumProcessingWork;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public $NumExistingThreads;
	/**
	 * @var \System\Int16
	 * @property
	 */
	public $NumThreadsGoal;
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
	public  function get_NumProcessingWork(){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public  function set_NumProcessingWork($value){}
	/**
	 * @return \System\Int16
	 */
	public  function get_NumExistingThreads(){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public  function set_NumExistingThreads($value){}
	/**
	 * @return \System\Int16
	 */
	public  function get_NumThreadsGoal(){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Void|void
	 */
	public  function set_NumThreadsGoal($value){}
	/**
	 * @param \System\Int16 $value
	 * @return \System\Threading\ThreadCounts
	 */
	public  function InterlockedSetNumThreadsGoal($value){}
	/**
	 * @return \System\Threading\ThreadCounts
	 */
	public  function VolatileRead(){}
	/**
	 * @param \System\Threading\ThreadCounts $newCounts
	 * @param \System\Threading\ThreadCounts $oldCounts
	 * @return \System\Threading\ThreadCounts
	 */
	public  function InterlockedCompareExchange($newCounts, $oldCounts){}
	/**
	 * @param \System\Threading\ThreadCounts $lhs
	 * @param \System\Threading\ThreadCounts $rhs
	 * @return \System\Boolean
	 */
	public static function op_Equality($lhs, $rhs){}
	/**
	 * @uses ThreadCountsMethodsOverride::Equals_1 ($obj)
	 * @uses ThreadCountsMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
