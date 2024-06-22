<?php
namespace Avalonia\Collections;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NotifyCollectionChangedExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @param \System\Collections\Specialized\NotifyCollectionChangedEventHandler $handler
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function WeakSubscribe_1 ($collection, $handler){}
	/**
	 * @deprecated
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @param \System\Action_1 $handler [generic: System\Collections\Specialized\NotifyCollectionChangedEventArgs]
	 * @return \System\IDisposable
	 */
	#[MethodOverride]public static function WeakSubscribe_2 ($collection, $handler){}
}
class NotifyCollectionChangedExtensions extends \System\Object
{
	use NotifyCollectionChangedExtensionsOverride;


	/**
	 * @param \System\Collections\Specialized\INotifyCollectionChanged $collection
	 * @return \System\IObservable_1[System\Collections\Specialized\NotifyCollectionChangedEventArgs]
	 */
	public static function GetWeakCollectionChangedObservable($collection){}
	/**
	 * @uses NotifyCollectionChangedExtensionsOverride::WeakSubscribe_1 <br>public , args: ($collection, $handler)<br>
	 * @uses NotifyCollectionChangedExtensionsOverride::WeakSubscribe_2 <br>public , args: ($collection, $handler)<br>
	 * @var mixed|\override ...$args
	 * @return \System\IDisposable|mixed|\override
	 */
	#[MethodOverridePublic]function WeakSubscribe (\override ...$args){}
}