<?php
namespace System\Collections;
final class FixedSizeList extends \System\Object implements
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
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
	 * @param \System\Object|object $obj
	 * @return \System\Int32|int
	 */
	public function Add($obj){}
	/**
	 * @return \System\Void|void
	 */
	public function Clear(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean|bool
	 */
	public function Contains($obj){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function CopyTo($array, $index){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public function GetEnumerator(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public function IndexOf($value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $obj
	 * @return \System\Void|void
	 */
	public function Insert($index, $obj){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function Remove($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public function RemoveAt($index){}
}