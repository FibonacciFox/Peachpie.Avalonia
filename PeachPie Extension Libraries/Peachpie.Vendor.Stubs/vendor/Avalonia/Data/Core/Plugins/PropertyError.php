<?php
namespace Avalonia\Data\Core\Plugins;
class PropertyError extends \System\Object implements
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
	public function SetValue($value, $priority){}
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
	 * @param \Avalonia\Data\BindingNotification $error
	 */
	public function __construct($error){}
}