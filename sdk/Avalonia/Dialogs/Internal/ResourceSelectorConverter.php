<?php
namespace Avalonia\Dialogs\Internal;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ResourceSelectorConverterMethodsOverride
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
class ResourceSelectorConverter extends \Avalonia\Controls\ResourceDictionary implements 
	\Avalonia\Controls\IResourceDictionary,
	\Avalonia\Controls\IResourceProvider,
	\Avalonia\Controls\IResourceNode,
	\System\Collections\Generic\IDictionary_2,
	\System\Collections\Generic\ICollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Controls\IThemeVariantProvider,
	\Avalonia\Data\Converters\IValueConverter
{
	/**
	 * @param \System\Object|object $key
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function Convert($key, $targetType, $parameter, $culture){}
	/**
	 * @param \System\Object|object $value
	 * @param \System\Type $targetType
	 * @param \System\Object|object $parameter
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \System\Object|object
	 */
	public  function ConvertBack($value, $targetType, $parameter, $culture){}
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
	 * @uses ResourceSelectorConverterMethodsOverride::Add_1 ($key, $value)
	 * @uses ResourceSelectorConverterMethodsOverride::Add_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @uses ResourceSelectorConverterMethodsOverride::Remove_1 ($key)
	 * @uses ResourceSelectorConverterMethodsOverride::Remove_2 ($item)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @uses ResourceSelectorConverterMethodsOverride::GetEnumerator_1 ()
	 * @uses ResourceSelectorConverterMethodsOverride::GetEnumerator_2 ()
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
}
