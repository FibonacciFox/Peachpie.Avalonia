<?php
namespace Avalonia\Data\Core\Plugins;
class PropertyAccessorBase extends \System\Object implements
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable
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
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean|bool
	 */
	abstract public function SetValue($value, $priority);
	/**
	 * @param \System\Action_1 $listener [generic: System\Object]
	 * @return \System\Void|void
	 */
	public function Subscribe($listener){}
	/**
	 * @return \System\Void|void
	 */
	public function Unsubscribe(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected function PublishValue($value){}
	/**
	 * @return \System\Void|void
	 */
	abstract protected function SubscribeCore();
	/**
	 * @return \System\Void|void
	 */
	abstract protected function UnsubscribeCore();
}