<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AvaloniaListExtensionsMethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function ForEachItem_1($collection, $added, $removed, $reset, $weakSubscription){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function ForEachItem_2($collection, $added, $removed, $reset, $weakSubscription){}
}
/**
 */
class AvaloniaListExtensions extends \System\Object
{
	/**
	 * @uses AvaloniaListExtensionsMethodsOverride::ForEachItem_1 ($collection, $added, $removed, $reset, $weakSubscription)
	 * @uses AvaloniaListExtensionsMethodsOverride::ForEachItem_2 ($collection, $added, $removed, $reset, $weakSubscription)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ForEachItem(mixed ...$args){}
	/**
	 * @param \Avalonia\Collections\IAvaloniaReadOnlyList_1 $collection
	 * @param \System\Action_1 $callback
	 * @return \System\IDisposable
	 */
	public static function TrackItemPropertyChanged($collection, $callback){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
