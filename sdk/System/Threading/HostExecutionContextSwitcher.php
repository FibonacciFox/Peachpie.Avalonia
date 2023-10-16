<?php
namespace System\Threading;
/**
 */
class HostExecutionContextSwitcher extends \System\Object
{
	/**
	 * @var \System\Threading\HostExecutionContext
	 * @field
	 */
	public readonly $_currentContext;
	/**
	 * @var \System\Threading\AsyncLocal_1[System\Boolean]
	 * @field
	 */
	public $_asyncLocal;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
