<?php
namespace System\Collections;
/**
 */
class ValueCollection extends \System\Object implements 
	\System\Collections\ICollection,
	\System\Collections\IEnumerable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSynchronized;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $SyncRoot;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	public  function GetEnumerator(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSynchronized(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_SyncRoot(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
