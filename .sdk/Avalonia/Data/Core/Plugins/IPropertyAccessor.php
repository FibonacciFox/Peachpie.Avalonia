<?php
namespace Avalonia\Data\Core\Plugins;
interface IPropertyAccessor
{


	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean|bool
	 */
	public function SetValue($value, $priority);
	/**
	 * @param \System\Action_1 $listener [generic: System\Object]
	 * @return \System\Void|void
	 */
	public function Subscribe($listener);
	/**
	 * @return \System\Void|void
	 */
	public function Unsubscribe();
}