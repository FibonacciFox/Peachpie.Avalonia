<?php
namespace System\Threading;
/**
 */
class LinkedSlot extends \System\Object
{
	/**
	 * @var \System\Threading\ThreadLocal_1+LinkedSlot[T]
	 * @field
	 */
	protected $_next;
	/**
	 * @var \System\Threading\ThreadLocal_1+LinkedSlot[T]
	 * @field
	 */
	protected $_previous;
	/**
	 * @var \System\Threading\ThreadLocal_1+LinkedSlotVolatile[T][]
	 * @field
	 */
	protected $_slotArray;
	/**
	 * @var \T
	 * @field
	 */
	protected $_value;
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
