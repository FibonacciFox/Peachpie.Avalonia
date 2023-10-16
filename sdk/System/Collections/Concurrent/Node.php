<?php
namespace System\Collections\Concurrent;
/**
 */
class Node extends \System\Object
{
	/**
	 * @var \T
	 * @field
	 */
	protected readonly $_value;
	/**
	 * @var \System\Collections\Concurrent\ConcurrentStack_1+Node[T]
	 * @field
	 */
	protected $_next;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
