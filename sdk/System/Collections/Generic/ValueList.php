<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValueListMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $index){}
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
 */
class ValueList extends \System\Object implements 
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\ICollection
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
	 * @var \TValue
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsSynchronized(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_SyncRoot(){}
	/**
	 * @param \System\Collections\Generic\TValue $key
	 * @return \System\Void|void
	 */
	public  function Add($key){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Boolean
	 */
	public  function Contains($value){}
	/**
	 * @uses ValueListMethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses ValueListMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Void|void
	 */
	public  function Insert($index, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\TValue
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @uses ValueListMethodsOverride::GetEnumerator_1 ()
	 * @uses ValueListMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Int32|int
	 */
	public  function IndexOf($value){}
	/**
	 * @param \System\Collections\Generic\TValue $value
	 * @return \System\Boolean
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
