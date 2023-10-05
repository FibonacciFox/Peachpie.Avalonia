<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaPropertyDictionary_1MethodsOverride
{
	/**
	 * @return \Avalonia\Utilities\TValue
	 */
	#[MethodOverride] public  function get_Item_1($property){}
	/**
	 * @return \Avalonia\Utilities\TValue
	 */
	#[MethodOverride] public  function get_Item_2($index){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_1($property){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Remove_2($property, $value){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AvaloniaPropertyDictionary_1 extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \TValue
	 * @property
	 */
	public $Item;
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @uses AvaloniaPropertyDictionary_1MethodsOverride::get_Item_1 ($property)
	 * @uses AvaloniaPropertyDictionary_1MethodsOverride::get_Item_2 ($index)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Item(mixed ...$args){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Utilities\TValue $value
	 * @return \System\Void|void
	 */
	public  function set_Item($property, $value){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Utilities\TValue $value
	 * @return \System\Void|void
	 */
	public  function Add($property, $value){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @return \System\Boolean
	 */
	public  function ContainsKey($property){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\AvaloniaProperty& $key
	 * @param \Avalonia\Utilities\TValue& $value
	 * @return \System\Void|void
	 */
	public  function GetKeyValue($index, $key, $value){}
	/**
	 * @uses AvaloniaPropertyDictionary_1MethodsOverride::Remove_1 ($property)
	 * @uses AvaloniaPropertyDictionary_1MethodsOverride::Remove_2 ($property, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Remove(mixed ...$args){}
	/**
	 * @param \System\Int32|int $index
	 * @return \System\Void|void
	 */
	public  function RemoveAt($index){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Utilities\TValue $value
	 * @return \System\Boolean
	 */
	public  function TryAdd($property, $value){}
	/**
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \Avalonia\Utilities\TValue& $value
	 * @return \System\Boolean
	 */
	public  function TryGetValue($property, $value){}
	/**
	 * @param \System\Int32|int $propertyId
	 * @param \System\Int32& $index
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetEntry($propertyId, $index){}
	/**
	 * @param \Avalonia\Utilities\Entry $entry
	 * @param \System\Int32|int $entryIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function InsertEntry($entry, $entryIndex){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowOutOfRange(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowDuplicate(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowNotFound(){}
}
