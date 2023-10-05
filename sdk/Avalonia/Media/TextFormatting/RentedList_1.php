<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait RentedList_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\T
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_1($index, $count, $item, $comparer){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_2($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function BinarySearch_3($item, $comparer){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_1($array){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function CopyTo_2($array, $arrayIndex){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_3($index, $array, $arrayIndex, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function CopyTo_4($array, $arrayIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function FindIndex_1($match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function FindIndex_2($startIndex, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function FindIndex_3($startIndex, $count, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function FindLastIndex_1($match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function FindLastIndex_2($startIndex, $match){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function FindLastIndex_3($startIndex, $count, $match){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_3(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_2($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_3($item, $index){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_4($item, $index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_1($index, $item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_2($index, $item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_2($item, $index){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function LastIndexOf_3($item, $index, $count){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_2($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reverse_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Reverse_2($index, $count){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_2($comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_3($index, $count, $comparer){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Sort_4($comparison){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class RentedList_1 extends \System\Collections\Generic\List_1 implements 
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
	 * @var \T[]
	 * @field
	 */
	protected $_items;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_size;
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
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @uses RentedList_1MethodsOverride::get_IsReadOnly_1 ()
	 * @uses RentedList_1MethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
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
	 * @uses RentedList_1MethodsOverride::get_Item_1 ($index)
	 * @uses RentedList_1MethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::set_Item_1 ($index, $value)
	 * @uses RentedList_1MethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::Add_1 ($item)
	 * @uses RentedList_1MethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::BinarySearch_1 ($index, $count, $item, $comparer)
	 * @uses RentedList_1MethodsOverride::BinarySearch_2 ($item)
	 * @uses RentedList_1MethodsOverride::BinarySearch_3 ($item, $comparer)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function BinarySearch(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::Contains_1 ($item)
	 * @uses RentedList_1MethodsOverride::Contains_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::CopyTo_1 ($array)
	 * @uses RentedList_1MethodsOverride::CopyTo_2 ($array, $arrayIndex)
	 * @uses RentedList_1MethodsOverride::CopyTo_3 ($index, $array, $arrayIndex, $count)
	 * @uses RentedList_1MethodsOverride::CopyTo_4 ($array, $arrayIndex)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::FindIndex_1 ($match)
	 * @uses RentedList_1MethodsOverride::FindIndex_2 ($startIndex, $match)
	 * @uses RentedList_1MethodsOverride::FindIndex_3 ($startIndex, $count, $match)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindIndex(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::FindLastIndex_1 ($match)
	 * @uses RentedList_1MethodsOverride::FindLastIndex_2 ($startIndex, $match)
	 * @uses RentedList_1MethodsOverride::FindLastIndex_3 ($startIndex, $count, $match)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function FindLastIndex(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::GetEnumerator_1 ()
	 * @uses RentedList_1MethodsOverride::GetEnumerator_2 ()
	 * @uses RentedList_1MethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::IndexOf_1 ($item)
	 * @uses RentedList_1MethodsOverride::IndexOf_2 ($item)
	 * @uses RentedList_1MethodsOverride::IndexOf_3 ($item, $index)
	 * @uses RentedList_1MethodsOverride::IndexOf_4 ($item, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::Insert_1 ($index, $item)
	 * @uses RentedList_1MethodsOverride::Insert_2 ($index, $item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::LastIndexOf_1 ($item)
	 * @uses RentedList_1MethodsOverride::LastIndexOf_2 ($item, $index)
	 * @uses RentedList_1MethodsOverride::LastIndexOf_3 ($item, $index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function LastIndexOf(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::Remove_1 ($item)
	 * @uses RentedList_1MethodsOverride::Remove_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::Reverse_1 ()
	 * @uses RentedList_1MethodsOverride::Reverse_2 ($index, $count)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Reverse(mixed ...$args){}
	/**
	 * @uses RentedList_1MethodsOverride::Sort_1 ()
	 * @uses RentedList_1MethodsOverride::Sort_2 ($comparer)
	 * @uses RentedList_1MethodsOverride::Sort_3 ($index, $count, $comparer)
	 * @uses RentedList_1MethodsOverride::Sort_4 ($comparison)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Sort(mixed ...$args){}
}
