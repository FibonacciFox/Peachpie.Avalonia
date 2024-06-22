<?php
namespace Avalonia\Data\Core\Plugins;
class DataValidationBase extends \Avalonia\Data\Core\Plugins\PropertyAccessorBase implements
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable,
	\System\IObserver_1
{

	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	private function OnCompleted(){}
	private function OnError($error){}
	private function OnNext($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected function InnerValueChanged($value){}
}