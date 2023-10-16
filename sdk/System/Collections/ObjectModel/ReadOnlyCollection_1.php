<?php
namespace System\Collections\ObjectModel;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ReadOnlyCollection_1MethodsOverride
{
	/**
	 * @return \System\Collections\ObjectModel\T
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\Collections\ObjectModel\T
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_3($index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array, $index){}
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
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_2($value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_2($index, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_2($index){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ReadOnlyCollection_1 extends \System\Object implements 
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::get_Item_1 ($index)
	 * @uses ReadOnlyCollection_1MethodsOverride::get_Item_2 ($index)
	 * @uses ReadOnlyCollection_1MethodsOverride::get_Item_3 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::Contains_1 ($value)
	 * @uses ReadOnlyCollection_1MethodsOverride::Contains_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::CopyTo_1 ($array, $index)
	 * @uses ReadOnlyCollection_1MethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ReadOnlyCollection_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::IndexOf_1 ($value)
	 * @uses ReadOnlyCollection_1MethodsOverride::IndexOf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @return \System\Collections\Generic\IList_1
	 */
	protected  function get_Items(){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::get_IsReadOnly_1 ()
	 * @uses ReadOnlyCollection_1MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::set_Item_1 ($index, $value)
	 * @uses ReadOnlyCollection_1MethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::Add_1 ($value)
	 * @uses ReadOnlyCollection_1MethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::Clear_1 ()
	 * @uses ReadOnlyCollection_1MethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::Insert_1 ($index, $value)
	 * @uses ReadOnlyCollection_1MethodsOverride::Insert_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::Remove_1 ($value)
	 * @uses ReadOnlyCollection_1MethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses ReadOnlyCollection_1MethodsOverride::RemoveAt_1 ($index)
	 * @uses ReadOnlyCollection_1MethodsOverride::RemoveAt_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsCompatibleObject($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
