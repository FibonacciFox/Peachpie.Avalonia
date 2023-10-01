<?php
namespace Avalonia\Controls\Documents;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait InlineCollectionMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($inline){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($text){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_3($control){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_4($value){}
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
	 * @return \Avalonia\Controls\Documents\Inline
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
class InlineCollection extends \Avalonia\Collections\AvaloniaList_1 implements 
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
	 * @return \Avalonia\Collections\IAvaloniaList_1
	 */
	protected  function get_LogicalChildren(){}
	/**
	 * @param \Avalonia\Collections\IAvaloniaList_1 $value
	 * @return \System\Void|void
	 */
	protected  function set_LogicalChildren($value){}
	/**
	 * @return \Avalonia\Controls\Documents\IInlineHost
	 */
	protected  function get_InlineHost(){}
	/**
	 * @param \Avalonia\Controls\Documents\IInlineHost $value
	 * @return \System\Void|void
	 */
	protected  function set_InlineHost($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Text(){}
	/**
	 * @uses InlineCollectionMethodsOverride::Add_1 ($inline)
	 * @uses InlineCollectionMethodsOverride::Add_2 ($text)
	 * @uses InlineCollectionMethodsOverride::Add_3 ($control)
	 * @uses InlineCollectionMethodsOverride::Add_4 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_Invalidated($value){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Invalidate(){}
	/**
	 * @param \Avalonia\Collections\IAvaloniaList_1 $oldParent
	 * @param \Avalonia\Collections\IAvaloniaList_1 $newParent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnParentChanged($oldParent, $newParent){}
	/**
	 * @param \Avalonia\Controls\Documents\IInlineHost $inlineHost
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnInlineHostChanged($inlineHost){}
	/**
	 * @uses InlineCollectionMethodsOverride::get_Count_1 ()
	 * @uses InlineCollectionMethodsOverride::get_Count_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Count(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @uses InlineCollectionMethodsOverride::get_IsReadOnly_1 ()
	 * @uses InlineCollectionMethodsOverride::get_IsReadOnly_2 ()
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
	 * @uses InlineCollectionMethodsOverride::get_Item_1 ($index)
	 * @uses InlineCollectionMethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::set_Item_1 ($index, $value)
	 * @uses InlineCollectionMethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::Clear_1 ()
	 * @uses InlineCollectionMethodsOverride::Clear_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::Contains_1 ($item)
	 * @uses InlineCollectionMethodsOverride::Contains_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Contains(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::CopyTo_1 ($array, $arrayIndex)
	 * @uses InlineCollectionMethodsOverride::CopyTo_2 ($array, $index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CopyTo(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses InlineCollectionMethodsOverride::GetEnumerator_2 ()
	 * @uses InlineCollectionMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::IndexOf_1 ($item)
	 * @uses InlineCollectionMethodsOverride::IndexOf_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IndexOf(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::Insert_1 ($index, $item)
	 * @uses InlineCollectionMethodsOverride::Insert_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::Remove_1 ($item)
	 * @uses InlineCollectionMethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses InlineCollectionMethodsOverride::RemoveAt_1 ($index)
	 * @uses InlineCollectionMethodsOverride::RemoveAt_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCollectionChangedSubscribers(){}
}
