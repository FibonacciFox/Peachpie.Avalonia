<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TreeSet_1Override {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IComparer_1 $comparer [generic: T]
	 */
	#[MethodOverride]public function __construct_2 ($comparer){}
}
final class TreeSet_1 extends \System\Collections\Generic\SortedSet_1 implements
	\System\Collections\Generic\ISet_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IReadOnlySet_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	use TreeSet_1Override;

	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\IComparer_1[T]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Min;
	/**
	 * @property
	 * @var \T|object
	 * @since readonly
	 */
	public $Max;
	private function get_IsReadOnly(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @uses TreeSet_1Override::__construct_1 <br>public , args: ()<br>
	 * @uses TreeSet_1Override::__construct_2 <br>public , args: ($comparer)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}