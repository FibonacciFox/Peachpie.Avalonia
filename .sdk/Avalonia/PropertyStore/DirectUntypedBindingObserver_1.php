<?php
namespace Avalonia\PropertyStore;
class DirectUntypedBindingObserver_1 extends \System\Object implements
	\System\IObserver_1,
	\System\IDisposable
{

	/**
	 * @property
	 * @var \Avalonia\DirectPropertyBase_1[T]
	 * @since readonly
	 */
	public $Property;
	/**
	 * @param \System\IObservable_1 $source [generic: System\Object]
	 * @return \System\Void|void
	 */
	public function Start($source){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @return \System\Void|void
	 */
	public function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public function OnError($error){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function OnNext($value){}
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\DirectPropertyBase_1 $property [generic: T]
	 */
	public function __construct($owner, $property){}
}