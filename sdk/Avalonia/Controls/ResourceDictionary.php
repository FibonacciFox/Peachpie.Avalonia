<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ResourceDictionaryMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_1($key, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_2($item){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($key){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] private  function Remove_2($item){}
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
class ResourceDictionary extends \System\Object implements 
	\Avalonia\Controls\IResourceDictionary,
	\Avalonia\Controls\IResourceProvider,
	\Avalonia\Controls\IResourceNode,
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Controls\IThemeVariantProvider
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \System\Object
	 * @property
	 */
	public $Item;
	/**
	 * @var \System\Collections\Generic\ICollection_1[System\Object]
	 * @property
	 */
	public readonly $Keys;
	/**
	 * @var \System\Collections\Generic\ICollection_1[System\Object]
	 * @property
	 */
	public readonly $Values;
	/**
	 * @var \Avalonia\Controls\IResourceHost
	 * @property
	 */
	public $Owner;
	/**
	 * @var \System\Collections\Generic\IList_1[Avalonia\Controls\IResourceProvider]
	 * @property
	 */
	public readonly $MergedDictionaries;
	/**
	 * @var \System\Collections\Generic\IDictionary_2[Avalonia\Styling\ThemeVariant,Avalonia\Controls\IThemeVariantProvider]
	 * @property
	 */
	public readonly $ThemeDictionaries;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Object|object
	 */
	public  function get_Item($key){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Item($key, $value){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	public  function get_Keys(){}
	/**
	 * @return \System\Collections\Generic\ICollection_1
	 */
	public  function get_Values(){}
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
	 * @return \System\Collections\Generic\IList_1
	 */
	public  function get_MergedDictionaries(){}
	/**
	 * @return \System\Collections\Generic\IDictionary_2
	 */
	public  function get_ThemeDictionaries(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Key(){}
	/**
	 * @param \Avalonia\Styling\ThemeVariant $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Key($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasResources(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_IsReadOnly(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Inner(){}
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
	 * @uses ResourceDictionaryMethodsOverride::Add_1 ($key, $value)
	 * @uses ResourceDictionaryMethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Func_2 $factory
	 * @return \System\Void|void
	 */
	public  function AddDeferred($key, $factory){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	public  function ContainsKey($key){}
	/**
	 * @uses ResourceDictionaryMethodsOverride::Remove_1 ($key)
	 * @uses ResourceDictionaryMethodsOverride::Remove_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @param \System\Object|object $key
	 * @param \Avalonia\Styling\ThemeVariant $theme
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public  function TryGetResource($key, $theme, $value){}
	/**
	 * @param \System\Object|object $key
	 * @param \System\Object& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($key, $value){}
	/**
	 * @uses ResourceDictionaryMethodsOverride::GetEnumerator_1 ()
	 * @uses ResourceDictionaryMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2 $item
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Contains($item){}
	/**
	 * @param \System\Collections\Generic\KeyValuePair_2[] $array
	 * @param \System\Int32|int $arrayIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CopyTo($array, $arrayIndex){}
	/**
	 * @param \System\Object|object $key
	 * @return \System\Boolean
	 */
	protected  function ContainsDeferredKey($key){}
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
