<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait KeyListMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $arrayIndex){}
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
class KeyList extends \System\Object implements 
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
	 * @var \TKey
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
	 * @param \System\Collections\Generic\TKey $key
	 * @return \System\Void|void
	 */
	public  function Add($key){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @return \System\Boolean
	 */
	public  function Contains($key){}
	/**
	 * @uses KeyListMethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses KeyListMethodsOverride::CopyTo_2 ($array, $arrayIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\TKey $value
	 * @return \System\Void|void
	 */
	public  function Insert($index, $value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Collections\Generic\TKey
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\TKey $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @uses KeyListMethodsOverride::GetEnumerator_1 ()
	 * @uses KeyListMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @return \System\Int32|int
	 */
	public  function IndexOf($key){}
	/**
	 * @param \System\Collections\Generic\TKey $key
	 * @return \System\Boolean
	 */
	public  function Remove($key){}
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
