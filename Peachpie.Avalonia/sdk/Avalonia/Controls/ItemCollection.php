<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ItemCollectionMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_2($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_3($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function set_Item_2($index, $value){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function get_IsReadOnly_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function get_IsReadOnly_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Add_1($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_2($value){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] private  function Add_3($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Clear_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Clear_3(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Insert_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_2($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Insert_3($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function RemoveAt_1($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_2($index){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function RemoveAt_3($index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Remove_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function SetSource_1($source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetSource_2($source){}
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
class ItemCollection extends \Avalonia\Controls\ItemsSourceView implements 
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\Avalonia\Controls\Utils\ICollectionChangedListener
{
	/**
	 * @uses ItemCollectionMethodsOverride::get_Item_1 ($index)
	 * @uses ItemCollectionMethodsOverride::get_Item_2 ($index)
	 * @uses ItemCollectionMethodsOverride::get_Item_3 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ItemCollectionMethodsOverride::set_Item_1 ($index, $value)
	 * @uses ItemCollectionMethodsOverride::set_Item_2 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @uses ItemCollectionMethodsOverride::get_IsReadOnly_1 ()
	 * @uses ItemCollectionMethodsOverride::get_IsReadOnly_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_IsReadOnly(mixed ...$args){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected  function add_SourceChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected  function remove_SourceChanged($value){}
	/**
	 * @uses ItemCollectionMethodsOverride::Add_1 ($value)
	 * @uses ItemCollectionMethodsOverride::Add_2 ($value)
	 * @uses ItemCollectionMethodsOverride::Add_3 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses ItemCollectionMethodsOverride::Clear_1 ()
	 * @uses ItemCollectionMethodsOverride::Clear_2 ()
	 * @uses ItemCollectionMethodsOverride::Clear_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Clear(mixed ...$args){}
	/**
	 * @uses ItemCollectionMethodsOverride::Insert_1 ($index, $value)
	 * @uses ItemCollectionMethodsOverride::Insert_2 ($index, $value)
	 * @uses ItemCollectionMethodsOverride::Insert_3 ($index, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Insert(mixed ...$args){}
	/**
	 * @uses ItemCollectionMethodsOverride::RemoveAt_1 ($index)
	 * @uses ItemCollectionMethodsOverride::RemoveAt_2 ($index)
	 * @uses ItemCollectionMethodsOverride::RemoveAt_3 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RemoveAt(mixed ...$args){}
	/**
	 * @uses ItemCollectionMethodsOverride::Remove_1 ($value)
	 * @uses ItemCollectionMethodsOverride::Remove_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_WritableSource(){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @return \System\Void|void
	 */
	protected  function SetItemsSource($value){}
	/**
	 * @uses ItemCollectionMethodsOverride::SetSource_1 ($source)
	 * @uses ItemCollectionMethodsOverride::SetSource_2 ($source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetSource(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateDefaultCollection(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowIsItemsSource(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
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
	 * @uses ItemCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses ItemCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PreChanged($sender, $e){}
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Changed($sender, $e){}
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PostChanged($sender, $e){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyTo($array, $index){}
}
