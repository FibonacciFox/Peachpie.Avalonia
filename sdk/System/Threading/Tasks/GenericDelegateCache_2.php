<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class GenericDelegateCache_2 extends \System\Object
{
	/**
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task],System\Object,TResult]
	 * @field
	 */
	protected $CWAnyFuncDelegate;
	/**
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task],System\Object,TResult]
	 * @field
	 */
	protected $CWAnyActionDelegate;
	/**
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task_1[TAntecedentResult][]],System\Object,TResult]
	 * @field
	 */
	protected $CWAllFuncDelegate;
	/**
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task_1[TAntecedentResult][]],System\Object,TResult]
	 * @field
	 */
	protected $CWAllActionDelegate;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
