<?php
namespace System\Threading;
final class LinkedSlot extends \System\Object
{
	/**
	 * @field
	 * @var \System\Threading\ThreadLocal_1+LinkedSlot[T]
	 */
	protected $_next;
	/**
	 * @field
	 * @var \System\Threading\ThreadLocal_1+LinkedSlot[T]
	 */
	protected $_previous;
	/**
	 * @field
	 * @var \System\Threading\ThreadLocal_1+LinkedSlotVolatile[T][]
	 */
	protected $_slotArray;
	/**
	 * @field
	 * @var \T|object
	 */
	protected $_value;

}