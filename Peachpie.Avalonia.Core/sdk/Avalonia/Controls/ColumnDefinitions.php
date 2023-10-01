<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ColumnDefinitionsMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function get_Count_1(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function get_Count_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \Avalonia\Controls\ColumnDefinition
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
	#[MethodOverride] private  function Add_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_2(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Contains_1($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Contains_2($value){}
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
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \Avalonia\Collections\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_3(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function IndexOf_1($item){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function IndexOf_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_1($index, $item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_2($index, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($item){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAt_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_2($index){}
}
/**
 */
class ColumnDefinitions extends \Avalonia\Controls\DefinitionList_1 implements 
	\Avalonia\Collections\IAvaloniaList_1,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\System\ComponentModel\INotifyPropertyChanged,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\Avalonia\Diagnostics\INotifyCollectionChangedDebug
{
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Controls\ColumnDefinitions
	 */
	public static function Parse($s){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::get_Count_1 ()
	 * @uses ColumnDefinitionsMethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::get_IsReadOnly_1 ()
	 * @uses ColumnDefinitionsMethodsOverride::get_IsReadOnly_2 ()
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
	 * @uses ColumnDefinitionsMethodsOverride::get_Item_1 ($index)
	 * @uses ColumnDefinitionsMethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::set_Item_1 ($index, $value)
	 * @uses ColumnDefinitionsMethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::Add_1 ($item)
	 * @uses ColumnDefinitionsMethodsOverride::Add_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::Clear_1 ()
	 * @uses ColumnDefinitionsMethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::Contains_1 ($item)
	 * @uses ColumnDefinitionsMethodsOverride::Contains_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses ColumnDefinitionsMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::GetEnumerator_1 ()
	 * @uses ColumnDefinitionsMethodsOverride::GetEnumerator_2 ()
	 * @uses ColumnDefinitionsMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::IndexOf_1 ($item)
	 * @uses ColumnDefinitionsMethodsOverride::IndexOf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::Insert_1 ($index, $item)
	 * @uses ColumnDefinitionsMethodsOverride::Insert_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::Remove_1 ($item)
	 * @uses ColumnDefinitionsMethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses ColumnDefinitionsMethodsOverride::RemoveAt_1 ($index)
	 * @uses ColumnDefinitionsMethodsOverride::RemoveAt_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCollectionChangedSubscribers(){}
}
