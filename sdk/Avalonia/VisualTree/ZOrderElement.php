<?php
namespace Avalonia\VisualTree;
/**
 */
class ZOrderElement extends \System\Object implements 
	\System\IComparable_1
{
	/**
	 * @return \Avalonia\Visual
	 */
	public  function get_Element(){}
	/**
	 * @param \Avalonia\Visual $value
	 * @return \System\Void|void
	 */
	public  function set_Element($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Index(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_Index($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_ZIndex(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_ZIndex($value){}
	/**
	 * @return \System\Collections\Generic\IComparer_1
	 */
	public static function get_Comparer(){}
	/**
	 * @param \Avalonia\VisualTree\ZOrderElement $other
	 * @return \System\Int32|int
	 */
	public  function CompareTo($other){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
