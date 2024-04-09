<?php
namespace Avalonia\Utilities;
class RefTrackingDictionary_1 extends \System\Collections\Generic\Dictionary_2 implements
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IEqualityComparer_1[TKey]
	 * @since readonly
	 */
	public $Comparer;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Collections\Generic\Dictionary_2+KeyCollection[TKey,System\Int32]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\Generic\Dictionary_2+ValueCollection[TKey,System\Int32]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Item;
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function AddRef($key){}
	/**
	 * @param \TKey $key
	 * @return \System\Boolean|bool
	 */
	public function ReleaseRef($key){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	/**
	 */
	public function __construct(){}
}