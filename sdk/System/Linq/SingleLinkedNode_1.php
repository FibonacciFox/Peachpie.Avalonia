<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SingleLinkedNode_1 extends \System\Object
{
	/**
	 * @var \TSource
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Linq\SingleLinkedNode_1[TSource]
	 * @property
	 */
	public readonly $Linked;
	/**
	 * @return \System\Linq\TSource
	 */
	public  function get_Item(){}
	/**
	 * @return \System\Linq\SingleLinkedNode_1
	 */
	public  function get_Linked(){}
	/**
	 * @param \System\Linq\TSource $item
	 * @return \System\Linq\SingleLinkedNode_1
	 */
	public  function Add($item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Linq\SingleLinkedNode_1
	 */
	public  function GetNode($index){}
	/**
	 * @param \System\Int32|int $count
	 * @return \System\Linq\TSource[]
	 */
	public  function ToArray($count){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
