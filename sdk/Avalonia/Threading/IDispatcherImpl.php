<?php
namespace Avalonia\Threading;
/**
 */
interface IDispatcherImpl
{
	/**
	 */
	public function get_CurrentThreadIsLoopThread();
	/**
	 */
	public function Signal();
	/**
	 * @param \System\Action $value
	 */
	public function add_Signaled($value);
	/**
	 * @param \System\Action $value
	 */
	public function remove_Signaled($value);
	/**
	 * @param \System\Action $value
	 */
	public function add_Timer($value);
	/**
	 * @param \System\Action $value
	 */
	public function remove_Timer($value);
	/**
	 */
	public function get_Now();
	/**
	 * @param \System\Nullable_1 $dueTimeInMs
	 */
	public function UpdateTimer($dueTimeInMs);
}
