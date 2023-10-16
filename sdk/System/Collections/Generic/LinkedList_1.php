<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LinkedList_1MethodsOverride
{
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride] public  function AddAfter_1($node, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddAfter_2($node, $newNode){}
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride] public  function AddBefore_1($node, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddBefore_2($node, $newNode){}
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride] public  function AddFirst_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddFirst_2($node){}
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride] public  function AddLast_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function AddLast_2($node){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Remove_2($node){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class LinkedList_1 extends \System\Object implements 
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @field
	 */
	protected $head;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $count;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $version;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @property
	 */
	public readonly $First;
	/**
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @property
	 */
	public readonly $Last;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	public  function get_First(){}
	/**
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	public  function get_Last(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @param \System\Collections\Generic\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Add($value){}
	/**
	 * @uses LinkedList_1MethodsOverride::AddAfter_1 ($node, $value)
	 * @uses LinkedList_1MethodsOverride::AddAfter_2 ($node, $newNode)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddAfter(mixed ...$args){}
	/**
	 * @uses LinkedList_1MethodsOverride::AddBefore_1 ($node, $value)
	 * @uses LinkedList_1MethodsOverride::AddBefore_2 ($node, $newNode)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddBefore(mixed ...$args){}
	/**
	 * @uses LinkedList_1MethodsOverride::AddFirst_1 ($value)
	 * @uses LinkedList_1MethodsOverride::AddFirst_2 ($node)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddFirst(mixed ...$args){}
	/**
	 * @uses LinkedList_1MethodsOverride::AddLast_1 ($value)
	 * @uses LinkedList_1MethodsOverride::AddLast_2 ($node)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function AddLast(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Collections\Generic\T $value
	 * @return \System\Boolean
	 */
	public  function Contains($value){}
	/**
	 * @uses LinkedList_1MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses LinkedList_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\T $value
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	public  function Find($value){}
	/**
	 * @param \System\Collections\Generic\T $value
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	public  function FindLast($value){}
	/**
	 * @uses LinkedList_1MethodsOverride::GetEnumerator_1 ()
	 * @uses LinkedList_1MethodsOverride::GetEnumerator_2 ()
	 * @uses LinkedList_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses LinkedList_1MethodsOverride::Remove_1 ($value)
	 * @uses LinkedList_1MethodsOverride::Remove_2 ($node)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveFirst(){}
	/**
	 * @return \System\Void|void
	 */
	public  function RemoveLast(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public  function OnDeserialization($sender){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $node
	 * @param \System\Collections\Generic\LinkedListNode_1 $newNode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalInsertNodeBefore($node, $newNode){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $newNode
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InternalInsertNodeToEmptyList($newNode){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $node
	 * @return \System\Void|void
	 */
	protected  function InternalRemoveNode($node){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $node
	 * @return \System\Void|void
	 */
	protected static function ValidateNewNode($node){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $node
	 * @return \System\Void|void
	 */
	protected  function ValidateNode($node){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
