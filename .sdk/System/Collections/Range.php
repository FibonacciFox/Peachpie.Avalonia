<?php
namespace System\Collections;
final class Range extends \System\Collections\ArrayList implements
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable,
	\System\ICloneable
{

	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $Capacity;
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
	 * @since readonly
	 */
	public $SyncRoot;
	/**
	 * @property
	 * @var \System\Object|object
	 */
	public $Item;
	private function InternalUpdateRange(){}
	private function InternalUpdateVersion(){}
}