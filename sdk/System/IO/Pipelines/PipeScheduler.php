<?php
namespace System\IO\Pipelines;
/**
 */
class PipeScheduler extends \System\Object
{
	/**
	 * @var \System\IO\Pipelines\PipeScheduler
	 * @property
	 */
	public readonly $ThreadPool;
	/**
	 * @var \System\IO\Pipelines\PipeScheduler
	 * @property
	 */
	public readonly $Inline;
	/**
	 * @return \System\IO\Pipelines\PipeScheduler
	 */
	public static function get_ThreadPool(){}
	/**
	 * @return \System\IO\Pipelines\PipeScheduler
	 */
	public static function get_Inline(){}
	/**
	 * @param \System\Action_1 $action
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	public  function Schedule($action, $state){}
	/**
	 * @param \System\Action_1 $action
	 * @param \System\Object|object $state
	 * @return \System\Void|void
	 */
	protected  function UnsafeSchedule($action, $state){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
