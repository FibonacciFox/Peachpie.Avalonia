<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LinkedListNode_1 extends \System\Object
{
	/**
	 * @var \System\Collections\Generic\LinkedList_1[T]
	 * @field
	 */
	protected $list;
	/**
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @field
	 */
	protected $next;
	/**
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @field
	 */
	protected $prev;
	/**
	 * @var \T
	 * @field
	 */
	protected $item;
	/**
	 * @var \System\Collections\Generic\LinkedList_1[T]
	 * @property
	 */
	public readonly $List;
	/**
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @property
	 */
	public readonly $Next;
	/**
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @property
	 */
	public readonly $Previous;
	/**
	 * @var \T
	 * @property
	 */
	public $Value;
	/**
	 * @var \T&
	 * @property
	 */
	public readonly $ValueRef;
	/**
	 * @return \System\Collections\Generic\LinkedList_1
	 */
	public  function get_List(){}
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	public  function get_Next(){}
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	public  function get_Previous(){}
	/**
	 * @return \System\Collections\Generic\T
	 */
	public  function get_Value(){}
	/**
	 * @param \System\Collections\Generic\T $value
	 * @return \System\Void|void
	 */
	public  function set_Value($value){}
	/**
	 * @return \System\Collections\Generic\T&
	 */
	public  function get_ValueRef(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Invalidate(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
