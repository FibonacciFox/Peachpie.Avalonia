<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class FrugalListBase_1 extends \System\Object
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_count;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Capacity;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $newCount
	 * @return \System\Void|void
	 */
	protected  function TrustedSetCount($newCount){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Capacity(){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \Avalonia\Utilities\FrugalListStoreState
	 */
	public  function Add($value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Boolean
	 */
	public  function Contains($value){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Int32|int
	 */
	public  function IndexOf($value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Void|void
	 */
	public  function Insert($index, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Void|void
	 */
	public  function SetAt($index, $value){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Boolean
	 */
	public  function Remove($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Utilities\T
	 */
	public  function EntryAt($index){}
	/**
	 * @param \Avalonia\Utilities\FrugalListBase_1 $newList
	 * @return \System\Void|void
	 */
	public  function Promote($newList){}
	/**
	 * @return \Avalonia\Utilities\T[]
	 */
	public  function ToArray(){}
	/**
	 * @param \Avalonia\Utilities\T[] $array
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $index){}
	/**
	 * @return \System\Object|object
	 */
	public  function Clone(){}
	/**
	 * @param \System\Int32|int $newCount
	 * @return \Avalonia\Utilities\Compacter
	 */
	public  function NewCompacter($newCount){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
