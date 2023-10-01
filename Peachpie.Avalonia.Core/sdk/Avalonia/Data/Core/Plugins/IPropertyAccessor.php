<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
interface IPropertyAccessor
{
	/**
	 */
	public function get_PropertyType();
	/**
	 */
	public function get_Value();
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 */
	public function SetValue($value, $priority);
	/**
	 * @param \System\Action_1 $listener
	 */
	public function Subscribe($listener);
	/**
	 */
	public function Unsubscribe();
}
