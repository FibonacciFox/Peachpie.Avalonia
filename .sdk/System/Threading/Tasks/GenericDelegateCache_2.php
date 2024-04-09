<?php
namespace System\Threading\Tasks;
class GenericDelegateCache_2 extends \System\Object
{
	/**
	 * @field
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task],System\Object,TResult]
	 */
	protected static $CWAnyFuncDelegate;
	/**
	 * @field
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task],System\Object,TResult]
	 */
	protected static $CWAnyActionDelegate;
	/**
	 * @field
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task_1[TAntecedentResult][]],System\Object,TResult]
	 */
	protected static $CWAllFuncDelegate;
	/**
	 * @field
	 * @var \System\Func_3[System\Threading\Tasks\Task_1[System\Threading\Tasks\Task_1[TAntecedentResult][]],System\Object,TResult]
	 */
	protected static $CWAllActionDelegate;

}