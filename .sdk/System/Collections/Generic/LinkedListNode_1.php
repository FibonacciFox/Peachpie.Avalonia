<?php
namespace System\Collections\Generic;
final class LinkedListNode_1 extends \System\Object
{

	/**
	 * @field
	 * @var \System\Collections\Generic\LinkedList_1[T]
	 */
	protected $list;
	/**
	 * @field
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 */
	protected $next;
	/**
	 * @field
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 */
	protected $prev;
	/**
	 * @field
	 * @var \T|object
	 */
	protected $item;
	/**
	 * @property
	 * @var \System\Collections\Generic\LinkedList_1[T]
	 * @since readonly
	 */
	public $List;
	/**
	 * @property
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @since readonly
	 */
	public $Next;
	/**
	 * @property
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @since readonly
	 */
	public $Previous;
	/**
	 * @property
	 * @var \T|object
	 */
	public $Value;
	/**
	 * @property
	 * @var \T&
	 * @since readonly
	 */
	public $ValueRef;
	/**
	 * @return \System\Void|void
	 */
	protected function Invalidate(){}
	/**
	 * @param \T|object $value
	 */
	public function __construct($value){}
}