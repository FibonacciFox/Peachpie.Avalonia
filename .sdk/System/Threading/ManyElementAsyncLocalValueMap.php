<?php
namespace System\Threading;
final class ManyElementAsyncLocalValueMap extends \System\Collections\Generic\Dictionary_2 implements
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyDictionary_2,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\Threading\IAsyncLocalValueMap
{
	/**
	 * @property
	 * @var \System\Collections\Generic\IEqualityComparer_1[System\Threading\IAsyncLocal]
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
	 * @var \System\Collections\Generic\Dictionary_2+KeyCollection[System\Threading\IAsyncLocal,System\Object]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\Generic\Dictionary_2+ValueCollection[System\Threading\IAsyncLocal,System\Object]
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @param \System\Threading\IAsyncLocal $key
	 * @param \System\Object|object $value
	 * @param \System\Boolean|bool $treatNullValueAsNonexistent
	 * @return \System\Threading\IAsyncLocalValueMap
	 */
	public function Set($key, $value, $treatNullValueAsNonexistent){}
	private function get_IsSynchronized(){}
	private function get_SyncRoot(){}
	private function get_IsFixedSize(){}
	/**
	 * @param \System\Int32|int $capacity
	 */
	public function __construct($capacity){}
}