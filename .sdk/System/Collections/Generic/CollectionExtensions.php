<?php
namespace System\Collections\Generic;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CollectionExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyDictionary_2 $dictionary [generic: TKey,TValue]
	 * @param \TKey $key
	 * @return \TValue
	 */
	#[MethodOverride]public static function GetValueOrDefault_1 ($dictionary, $key){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IReadOnlyDictionary_2 $dictionary [generic: TKey,TValue]
	 * @param \TKey $key
	 * @param \TValue $defaultValue
	 * @return \TValue
	 */
	#[MethodOverride]public static function GetValueOrDefault_2 ($dictionary, $key, $defaultValue){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IList_1 $list [generic: T]
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1
	 */
	#[MethodOverride]public static function AsReadOnly_1 ($list){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary [generic: TKey,TValue]
	 * @return \System\Collections\ObjectModel\ReadOnlyDictionary_2
	 */
	#[MethodOverride]public static function AsReadOnly_2 ($dictionary){}
}
class CollectionExtensions extends \System\Object
{
	use CollectionExtensionsOverride;


	/**
	 * @uses CollectionExtensionsOverride::GetValueOrDefault_1 <br>public , args: ($dictionary, $key)<br>
	 * @uses CollectionExtensionsOverride::GetValueOrDefault_2 <br>public , args: ($dictionary, $key, $defaultValue)<br>
	 * @var mixed|\override ...$args
	 * @return \TValue|mixed|\override
	 */
	#[MethodOverridePublic]function GetValueOrDefault (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary [generic: TKey,TValue]
	 * @param \TKey $key
	 * @param \TValue $value
	 * @return \System\Boolean|bool
	 */
	public static function TryAdd($dictionary, $key, $value){}
	/**
	 * @param \System\Collections\Generic\IDictionary_2 $dictionary [generic: TKey,TValue]
	 * @param \TKey $key
	 * @param \TValue& &$value
	 * @return \System\Boolean|bool
	 */
	public static function Remove($dictionary, $key, &$value){}
	/**
	 * @uses CollectionExtensionsOverride::AsReadOnly_1 <br>public , args: ($list)<br>
	 * @uses CollectionExtensionsOverride::AsReadOnly_2 <br>public , args: ($dictionary)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\ObjectModel\ReadOnlyCollection_1|\System\Collections\ObjectModel\ReadOnlyDictionary_2|mixed|\override
	 */
	#[MethodOverridePublic]function AsReadOnly (\override ...$args){}
}