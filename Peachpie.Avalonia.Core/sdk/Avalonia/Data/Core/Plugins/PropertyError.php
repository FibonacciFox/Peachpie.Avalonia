<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
class PropertyError extends \System\Object implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable
{
	/**
	 * @return \System\Type
	 */
	public  function get_PropertyType(){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean
	 */
	public  function SetValue($value, $priority){}
	/**
	 * @param \System\Action_1 $listener
	 * @return \System\Void|void
	 */
	public  function Subscribe($listener){}
	/**
	 * @return \System\Void|void
	 */
	public  function Unsubscribe(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
