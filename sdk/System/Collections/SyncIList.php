<?php
namespace System\Collections;
/**
 */
class SyncIList extends \System\Object implements 
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsReadOnly;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFixedSize;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFixedSize(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public  function Add($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Int32|int
	 */
	public  function IndexOf($value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function Insert($index, $value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function Remove($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
