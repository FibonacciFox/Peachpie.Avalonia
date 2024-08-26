<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AvaloniaListExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\IAvaloniaReadOnlyList_1 $collection [generic: T]
	 * @param \System\Action_1 $added [generic: T]
	 * @param \System\Action_1 $removed [generic: T]
	 * @param \System\Action $reset
	 * @param \System\Boolean|bool $weakSubscription
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function ForEachItem_1 ($collection, $added, $removed, $reset, $weakSubscription){}
	/**
	 * @deprecated
	 * @param \Avalonia\Collections\IAvaloniaReadOnlyList_1 $collection [generic: T]
	 * @param \System\Action_2 $added [generic: System\Int32,T]
	 * @param \System\Action_2 $removed [generic: System\Int32,T]
	 * @param \System\Action $reset
	 * @param \System\Boolean|bool $weakSubscription
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function ForEachItem_2 ($collection, $added, $removed, $reset, $weakSubscription){}
}
class AvaloniaListExtensions extends \System\Object
{
	use AvaloniaListExtensionsOverride;

	/**
	 * @uses AvaloniaListExtensionsOverride::ForEachItem_1 <br>public , args: ($collection, $added, $removed, $reset, $weakSubscription)<br>
	 * @uses AvaloniaListExtensionsOverride::ForEachItem_2 <br>public , args: ($collection, $added, $removed, $reset, $weakSubscription)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverridePublic]function ForEachItem (\override ...$args){}
	/**
	 * @param \Avalonia\Collections\IAvaloniaReadOnlyList_1 $collection [generic: T]
	 * @param \System\Action_1 $callback [generic: System\Tuple_2[System\Object,System\ComponentModel\PropertyChangedEventArgs]
	 * @return \System\IDisposable
	 */
	public static function TrackItemPropertyChanged($collection, $callback){}
}