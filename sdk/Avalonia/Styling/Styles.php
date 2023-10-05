<?php
namespace Avalonia\Styling;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StylesMethodsOverride
{
	/**
	 * @return \Avalonia\Styling\IStyle
	 */
	#[MethodOverride] private  function get_Item_1($index){}
	/**
	 * @return \Avalonia\Styling\IStyle
	 */
	#[MethodOverride] public  function get_Item_2($index){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function get_Item_3($property){}
	/**
	 * @return \Avalonia\Data\IBinding
	 */
	#[MethodOverride] public  function get_Item_4($binding){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_1($index, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_2($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function set_Item_3($binding, $value){}
	/**
	 * @return \Avalonia\Collections\Enumerator
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
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function add_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function add_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function remove_PropertyChanged_1($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function remove_PropertyChanged_2($value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_1($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_2($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_3($property){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function ClearValue_4($property){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public  function GetValue_1($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_2($property){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public  function GetValue_3($property){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_1($property, $value, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function SetValue_2($property, $value, $priority){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetValue_3($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCurrentValue_2($property, $value){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_1($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_2($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_3($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_4($property, $source, $priority){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_5($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_6($property, $source){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public  function Bind_7($property, $source){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_1($property, $oldValue, $newValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function RaisePropertyChanged_2($property, $oldValue, $newValue, $priority, $isEffectiveValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_1($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetDirectValueUnchecked_2($property, $value){}
}
/**
 */
class Styles extends \Avalonia\AvaloniaObject implements 
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Collections\IAvaloniaList_1,
	\System\Collections\Generic\IList_1,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Collections\IAvaloniaReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Specialized\INotifyCollectionChanged,
	\Avalonia\Styling\IStyle,
	\Avalonia\Controls\IResourceNode,
	\Avalonia\Controls\IResourceProvider
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \Avalonia\Controls\IResourceHost
	 * @property
	 */
	public $Owner;
	/**
	 * @var \Avalonia\Controls\IResourceDictionary
	 * @property
	 */
	public $Resources;
	/**
	 * @var \Avalonia\Styling\IStyle
	 * @property
	 */
	public $Item;
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
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function add_OwnerChanged($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public  function remove_OwnerChanged($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @return \Avalonia\Controls\IResourceHost
	 */
	public  function get_Owner(){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Owner($value){}
	/**
	 * @return \Avalonia\Controls\IResourceDictionary
	 */
	public  function get_Resources(){}
	/**
	 * @param \Avalonia\Controls\IResourceDictionary $value
	 * @return \System\Void|void
	 */
	public  function set_Resources($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @uses StylesMethodsOverride::get_Item_1 ($index)
	 * @uses StylesMethodsOverride::get_Item_2 ($index)
	 * @uses StylesMethodsOverride::get_Item_3 ($property)
	 * @uses StylesMethodsOverride::get_Item_4 ($binding)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Children(){}
	/**
	 * @uses StylesMethodsOverride::set_Item_1 ($index, $value)
	 * @uses StylesMethodsOverride::set_Item_2 ($property, $value)
	 * @uses StylesMethodsOverride::set_Item_3 ($binding, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function set_Item(mixed ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public  function TryGetResource($key, $theme, $value){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function AddRange($items){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function InsertRange($index, $items){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public  function Move($oldIndex, $newIndex){}
	/**
	 * @param \System\Int32|int $oldIndex
	 * @param \System\Int32|int $count
	 * @param \System\Int32|int $newIndex
	 * @return \System\Void|void
	 */
	public  function MoveRange($oldIndex, $count, $newIndex){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $items
	 * @return \System\Void|void
	 */
	public  function RemoveAll($items){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Int32|int $count
	 * @return \System\Void|void
	 */
	public  function RemoveRange($index, $count){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Int32|int
	 */
	public  function IndexOf($item){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Void|void
	 */
	public  function Insert($index, $item){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Void|void
	 */
	public  function Add($item){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Boolean
	 */
	public  function Contains($item){}
	/**
	 * @param \Avalonia\Styling\IStyle[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @return \System\Void|void
	 */
	public  function CopyTo($array, $arrayIndex){}
	/**
	 * @param \Avalonia\Styling\IStyle $item
	 * @return \System\Boolean
	 */
	public  function Remove($item){}
	/**
	 * @uses StylesMethodsOverride::GetEnumerator_1 ()
	 * @uses StylesMethodsOverride::GetEnumerator_2 ()
	 * @uses StylesMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function AddOwner($owner){}
	/**
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function RemoveOwner($owner){}
	/**
	 * @param \Avalonia\StyledElement $target
	 * @param \System\Object|object $host
	 * @return \Avalonia\Styling\SelectorMatchResult
	 */
	protected  function TryAttach($target, $host){}
	/**
	 * @param \System\Collections\ICollection $list
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ToReadOnlyList($list){}
	/**
	 * @param \System\Collections\IList $items
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalAdd($items, $owner){}
	/**
	 * @param \System\Collections\IList $items
	 * @param \Avalonia\Controls\IResourceHost $owner
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function InternalRemove($items, $owner){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnCollectionChanged($sender, $e){}
	/**
	 * @uses StylesMethodsOverride::add_PropertyChanged_1 ($value)
	 * @uses StylesMethodsOverride::add_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function add_PropertyChanged(mixed ...$args){}
	/**
	 * @uses StylesMethodsOverride::remove_PropertyChanged_1 ($value)
	 * @uses StylesMethodsOverride::remove_PropertyChanged_2 ($value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function remove_PropertyChanged(mixed ...$args){}
	/**
	 * @uses StylesMethodsOverride::ClearValue_1 ($property)
	 * @uses StylesMethodsOverride::ClearValue_2 ($property)
	 * @uses StylesMethodsOverride::ClearValue_3 ($property)
	 * @uses StylesMethodsOverride::ClearValue_4 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ClearValue(mixed ...$args){}
	/**
	 * @uses StylesMethodsOverride::GetValue_1 ($property)
	 * @uses StylesMethodsOverride::GetValue_2 ($property)
	 * @uses StylesMethodsOverride::GetValue_3 ($property)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses StylesMethodsOverride::SetValue_1 ($property, $value, $priority)
	 * @uses StylesMethodsOverride::SetValue_2 ($property, $value, $priority)
	 * @uses StylesMethodsOverride::SetValue_3 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses StylesMethodsOverride::SetCurrentValue_1 ($property, $value)
	 * @uses StylesMethodsOverride::SetCurrentValue_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCurrentValue(mixed ...$args){}
	/**
	 * @uses StylesMethodsOverride::Bind_1 ($property, $source, $priority)
	 * @uses StylesMethodsOverride::Bind_2 ($property, $source, $priority)
	 * @uses StylesMethodsOverride::Bind_3 ($property, $source, $priority)
	 * @uses StylesMethodsOverride::Bind_4 ($property, $source, $priority)
	 * @uses StylesMethodsOverride::Bind_5 ($property, $source)
	 * @uses StylesMethodsOverride::Bind_6 ($property, $source)
	 * @uses StylesMethodsOverride::Bind_7 ($property, $source)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Bind(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyChangedSubscribers(){}
	/**
	 * @uses StylesMethodsOverride::RaisePropertyChanged_1 ($property, $oldValue, $newValue)
	 * @uses StylesMethodsOverride::RaisePropertyChanged_2 ($property, $oldValue, $newValue, $priority, $isEffectiveValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function RaisePropertyChanged(mixed ...$args){}
	/**
	 * @uses StylesMethodsOverride::SetDirectValueUnchecked_1 ($property, $value)
	 * @uses StylesMethodsOverride::SetDirectValueUnchecked_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetDirectValueUnchecked(mixed ...$args){}
}
