<?php
namespace Avalonia\PropertyStore;
class LocalValueBindingObserver_1 extends \Avalonia\PropertyStore\LocalValueBindingObserverBase_1 implements
	\System\IObserver_1,
	\System\IDisposable
{
	/**
	 * @field
	 * @var \System\IDisposable
	 */
	protected $_subscription;
	/**
	 * @property
	 * @var \Avalonia\StyledProperty_1[T]
	 * @since readonly
	 */
	public $Property;
	/**
	 * @param \Avalonia\PropertyStore\ValueStore $owner
	 * @param \Avalonia\StyledProperty_1 $property [generic: T]
	 */
	public function __construct($owner, $property){}
}