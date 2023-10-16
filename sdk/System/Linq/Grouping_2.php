<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait Grouping_2MethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Add_1($element){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class Grouping_2 extends \System\Object implements 
	\System\Linq\IGrouping_2,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1
{
	/**
	 * @var \TKey
	 * @field
	 */
	protected readonly $_key;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected readonly $_hashCode;
	/**
	 * @var \TElement[]
	 * @field
	 */
	protected $_elements;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_count;
	/**
	 * @var \System\Linq\Grouping_2[TKey,TElement]
	 * @field
	 */
	protected $_hashNext;
	/**
	 * @var \System\Linq\Grouping_2[TKey,TElement]
	 * @field
	 */
	protected $_next;
	/**
	 * @var \TKey
	 * @property
	 */
	public readonly $Key;
	/**
	 * @uses Grouping_2MethodsOverride::Add_1 ($element)
	 * @uses Grouping_2MethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Trim(){}
	/**
	 * @uses Grouping_2MethodsOverride::GetEnumerator_1 ()
	 * @uses Grouping_2MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @return \System\Linq\TKey
	 */
	public  function get_Key(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Count(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Clear(){}
	/**
	 * @param \System\Linq\TElement $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Contains($item){}
	/**
	 * @param \System\Linq\TElement[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyTo($array, $arrayIndex){}
	/**
	 * @param \System\Linq\TElement $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Remove($item){}
	/**
	 * @param \System\Linq\TElement $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Linq\TElement $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveAt($index){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Linq\TElement $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Item($index, $value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
