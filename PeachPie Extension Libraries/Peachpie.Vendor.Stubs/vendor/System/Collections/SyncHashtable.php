<?php
namespace System\Collections;
final class SyncHashtable extends \System\Collections\Hashtable implements
	\System\Collections\IDictionary,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\Runtime\Serialization\ISerializable,
	\System\Runtime\Serialization\IDeserializationCallback,
	\System\ICloneable
{
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFixedSize;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsSynchronized;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @property
	 * @var \System\Collections\ICollection
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Collections\ICollection
	 * @since readonly
	 */
	public $Values;
	/**
	 * @property
	 * @var \System\Collections\IHashCodeProvider
	 */
	protected $hcp;
	/**
	 * @property
	 * @var \System\Collections\IComparer
	 */
	protected $comparer;

}