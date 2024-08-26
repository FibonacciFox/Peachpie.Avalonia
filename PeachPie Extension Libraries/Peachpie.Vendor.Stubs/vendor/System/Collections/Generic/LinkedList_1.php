<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait LinkedList_1Override {
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @param \T|object $value
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride]public function AddAfter_1 ($node, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @param \System\Collections\Generic\LinkedListNode_1 $newNode [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddAfter_2 ($node, $newNode){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @param \T|object $value
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride]public function AddBefore_1 ($node, $value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @param \System\Collections\Generic\LinkedListNode_1 $newNode [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddBefore_2 ($node, $newNode){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride]public function AddFirst_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddFirst_2 ($node){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Collections\Generic\LinkedListNode_1
	 */
	#[MethodOverride]public function AddLast_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function AddLast_2 ($node){}
	/**
	 * @deprecated
	 * @param \T $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function CopyTo_1 ($array, $index){}
	/**
	 * @deprecated
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function CopyTo_2 ($array, $index){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\LinkedList_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_3 (){}
	/**
	 * @deprecated
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]public function Remove_1 ($value){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @return \System\Void|void
	 */
	#[MethodOverride]public function Remove_2 ($node){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $collection [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($collection){}
}
class LinkedList_1 extends \System\Object implements
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use LinkedList_1Override;
	/**
	 * @field
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 */
	protected $head;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $count;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	protected $version;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @since readonly
	 */
	public $First;
	/**
	 * @property
	 * @var \System\Collections\Generic\LinkedListNode_1[T]
	 * @since readonly
	 */
	public $Last;
	private function get_IsReadOnly(){}
	private function Add($value){}
	/**
	 * @uses LinkedList_1Override::AddAfter_1 <br>public , args: ($node, $value)<br>
	 * @uses LinkedList_1Override::AddAfter_2 <br>public , args: ($node, $newNode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\LinkedListNode_1|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddAfter (\override ...$args){}
	/**
	 * @uses LinkedList_1Override::AddBefore_1 <br>public , args: ($node, $value)<br>
	 * @uses LinkedList_1Override::AddBefore_2 <br>public , args: ($node, $newNode)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\LinkedListNode_1|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddBefore (\override ...$args){}
	/**
	 * @uses LinkedList_1Override::AddFirst_1 <br>public , args: ($value)<br>
	 * @uses LinkedList_1Override::AddFirst_2 <br>public , args: ($node)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\LinkedListNode_1|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddFirst (\override ...$args){}
	/**
	 * @uses LinkedList_1Override::AddLast_1 <br>public , args: ($value)<br>
	 * @uses LinkedList_1Override::AddLast_2 <br>public , args: ($node)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\LinkedListNode_1|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function AddLast (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \T|object $value
	 * @return \System\Boolean|bool
	 */
	public function Contains($value){}
	/**
	 * @uses LinkedList_1Override::CopyTo_1 <br>public , args: ($array, $index)<br>
	 * @uses LinkedList_1Override::CopyTo_2 <br>private , args: ($array, $index)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function CopyTo (\override ...$args){}
	/**
	 * @param \T|object $value
	 * @return \System\Collections\Generic\LinkedListNode_1[T]
	 */
	public function Find($value){}
	/**
	 * @param \T|object $value
	 * @return \System\Collections\Generic\LinkedListNode_1[T]
	 */
	public function FindLast($value){}
	/**
	 * @uses LinkedList_1Override::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses LinkedList_1Override::GetEnumerator_2 <br>private , args: ()<br>
	 * @uses LinkedList_1Override::GetEnumerator_3 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\LinkedList_1|\System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @uses LinkedList_1Override::Remove_1 <br>public , args: ($value)<br>
	 * @uses LinkedList_1Override::Remove_2 <br>public , args: ($node)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Boolean|bool|\System\Void|void|mixed|\override
	 */
	#[MethodOverridePublic]function Remove (\override ...$args){}
	/**
	 * @return \System\Void|void
	 */
	public function RemoveFirst(){}
	/**
	 * @return \System\Void|void
	 */
	public function RemoveLast(){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public function GetObjectData($info, $context){}
	/**
	 * @param \System\Object|object $sender
	 * @return \System\Void|void
	 */
	public function OnDeserialization($sender){}
	private function InternalInsertNodeBefore($node, $newNode){}
	private function InternalInsertNodeToEmptyList($newNode){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @return \System\Void|void
	 */
	protected function InternalRemoveNode($node){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @return \System\Void|void
	 */
	protected static function ValidateNewNode($node){}
	/**
	 * @param \System\Collections\Generic\LinkedListNode_1 $node [generic: T]
	 * @return \System\Void|void
	 */
	protected function ValidateNode($node){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @uses LinkedList_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses LinkedList_1Override::__construct_2 <br>public , args: ($collection)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}