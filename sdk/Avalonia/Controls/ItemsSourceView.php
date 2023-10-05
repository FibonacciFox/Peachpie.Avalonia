<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ItemsSourceViewMethodsOverride
{
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_1($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Item_2($index){}
	/**
	 * @return \Avalonia\Controls\ItemsSourceView
	 */
	#[MethodOverride] public static function GetOrCreate_1($items){}
	/**
	 * @return \Avalonia\Controls\ItemsSourceView_1
	 */
	#[MethodOverride] public static function GetOrCreate_2($items){}
	/**
	 * @return \Avalonia\Controls\ItemsSourceView_1
	 */
	#[MethodOverride] public static function GetOrCreate_3($items){}
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
class ItemsSourceView extends \System\Object implements 
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
	 * @var \Avalonia\Controls\ItemsSourceView
	 * @property
	 */
	public readonly $Empty;
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
	 * @var \System\Object
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \Avalonia\Controls\ItemsSourceView
	 */
	public static function get_Empty(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \System\Collections\IList
	 */
	public  function get_Source(){}
	/**
	 * @uses ItemsSourceViewMethodsOverride::get_Item_1 ($index)
	 * @uses ItemsSourceViewMethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
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
	 * @return \System\Boolean
	 */
	protected  function get_HasKeyIndexMapping(){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_CollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected  function add_PreCollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected  function remove_PreCollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected  function add_PostCollectionChanged($value){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $value
	 * @return \System\Void|void
	 */
	protected  function remove_PostCollectionChanged($value){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Object|object
	 */
	public  function GetAt($index){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \System\Object|object $item
	 * @return \System\Int32|int
	 */
	public  function IndexOf($item){}
	/**
	 * @uses ItemsSourceViewMethodsOverride::GetOrCreate_1 ($items)
	 * @uses ItemsSourceViewMethodsOverride::GetOrCreate_2 ($items)
	 * @uses ItemsSourceViewMethodsOverride::GetOrCreate_3 ($items)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetOrCreate(mixed ...$args){}
	/**
	 * @uses ItemsSourceViewMethodsOverride::GetEnumerator_1 ()
	 * @uses ItemsSourceViewMethodsOverride::GetEnumerator_2 ()
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
	/**
	 * @param \System\Int32|int $index
	 * @return \System\String|string
	 */
	protected  function KeyFromIndex($index){}
	/**
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @return \System\Void|void
	 */
	protected  function RaiseCollectionChanged($e){}
	/**
	 * @param \System\Collections\IEnumerable $source
	 * @return \System\Void|void
	 */
	protected  function SetSource($source){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddListenerIfNecessary(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveListenerIfNecessary(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowReadOnly(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
