<?php
namespace Avalonia\Data\Core;
/**
 */
class SettableNode extends \Avalonia\Data\Core\ExpressionNode
{
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean
	 */
	public  function SetTargetValue($value, $priority){}
	/**
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ShouldNotSet($value){}
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean
	 */
	protected  function SetTargetValueCore($value, $priority){}
	/**
	 * @return \System\Type
	 */
	public  function get_PropertyType(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function ValueChanged($value){}
}
