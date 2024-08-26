<?php
namespace System\ComponentModel;
interface ISynchronizeInvoke
{

	/**
	 * @param \System\Delegate $method
	 * @param \System\Object $args
	 * @return \System\IAsyncResult
	 */
	public function BeginInvoke($method, $args);
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Object|object
	 */
	public function EndInvoke($result);
	/**
	 * @param \System\Delegate $method
	 * @param \System\Object $args
	 * @return \System\Object|object
	 */
	public function Invoke($method, $args);
}