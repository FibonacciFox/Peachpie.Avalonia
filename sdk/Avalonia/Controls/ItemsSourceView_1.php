<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ItemsSourceView_1MethodsOverride
{
	/**
	 * @return \Avalonia\Controls\T
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
	 * @return \Avalonia\Controls\T
	 */
	#[MethodOverride] public  function GetAt_1($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetAt_2($index){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_3(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_4(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ItemsSourceView_1 extends \Avalonia\Controls\ItemsSourceView implements 
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\IList,
	\System\Collections\ICollection,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\Avalonia\Controls\Utils\ICollectionChangedListener,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1
{
	/**
	 * @var \Avalonia\Controls\ItemsSourceView_1[T]
	 * @property
	 */
	public readonly $Empty;
	/**
	 * @var \T
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Collections\IList
	 * @property
	 */
	public readonly $Source;
	/**
	 * @return \Avalonia\Controls\ItemsSourceView_1
	 */
	public static function get_Empty(){}
	/**
	 * @uses ItemsSourceView_1MethodsOverride::get_Item_1 ($index)
	 * @uses ItemsSourceView_1MethodsOverride::get_Item_2 ($index)
	 * @uses ItemsSourceView_1MethodsOverride::get_Item_3 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @uses ItemsSourceView_1MethodsOverride::GetAt_1 ($index)
	 * @uses ItemsSourceView_1MethodsOverride::GetAt_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetAt(mixed ...$args){}
	/**
	 * @uses ItemsSourceView_1MethodsOverride::GetEnumerator_1 ()
	 * @uses ItemsSourceView_1MethodsOverride::GetEnumerator_2 ()
	 * @uses ItemsSourceView_1MethodsOverride::GetEnumerator_3 ()
	 * @uses ItemsSourceView_1MethodsOverride::GetEnumerator_4 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsFixedSize(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
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
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Item($index, $value){}
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
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Add($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Clear(){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Insert($index, $value){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Remove($value){}
	/**
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveAt($index){}
	/**
	 * @param \System\Array|array $array
	 * @param \System\Int32|int $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyTo($array, $index){}
}
