<?php
namespace System\Collections\Generic;
final class TreeSubSet extends \System\Collections\Generic\SortedSet_1 implements
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
	private function VersionCheckImpl($updateCount){}
	private function get_IsReadOnly(){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	/**
	 * @param \System\Collections\Generic\SortedSet_1 $Underlying [generic: T]
	 * @param \T|object $Min
	 * @param \T|object $Max
	 * @param \System\Boolean|bool $lowerBoundActive
	 * @param \System\Boolean|bool $upperBoundActive
	 */
	public function __construct($Underlying, $Min, $Max, $lowerBoundActive, $upperBoundActive){}
}