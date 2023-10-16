<?php
namespace System\Threading;
/**
 */
class WorkStealingQueue extends \System\Object
{
	/**
	 * @var \System\Object[]
	 * @field
	 */
	protected $m_array;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSteal;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public  function LocalPush($obj){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LocalPush_HandleTailOverflow(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function LocalFindAndPop($obj){}
	/**
	 * @return \System\Object|object
	 */
	public  function LocalPop(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function LocalPopCore(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_CanSteal(){}
	/**
	 * @param \System\Boolean& $missedSteal
	 * @return \System\Object|object
	 */
	public  function TrySteal($missedSteal){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
