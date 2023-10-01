<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NotifyCollectionChangedExtensionsMethodsOverride
{
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function WeakSubscribe_1($collection, $handler){}
	/**
	 * @return \System\IDisposable
	 */
	#[MethodOverride] public static function WeakSubscribe_2($collection, $handler){}
}
/**
 */
class NotifyCollectionChangedExtensions extends \System\Object
{
	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @return \System\IObservable_1
	 */
	public static function GetWeakCollectionChangedObservable($collection){}
	/**
	 * @uses NotifyCollectionChangedExtensionsMethodsOverride::WeakSubscribe_1 ($collection, $handler)
	 * @uses NotifyCollectionChangedExtensionsMethodsOverride::WeakSubscribe_2 ($collection, $handler)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function WeakSubscribe(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
