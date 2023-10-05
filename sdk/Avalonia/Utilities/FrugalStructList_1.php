<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class FrugalStructList_1 extends \System\ValueType
{
	/**
	 * @var \Avalonia\Utilities\FrugalListBase_1[T]
	 * @field
	 */
	protected $_listStore;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $Capacity;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \T
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Capacity(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Capacity($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Utilities\T
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @param \Avalonia\Utilities\T $value
	 * @return \System\Int32|int
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
	 * @return \System\Void|void
	 */
	public  function EnsureIndex($index){}
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
	 * @return \Avalonia\Utilities\FrugalStructList_1
	 */
	public  function Clone(){}
}
