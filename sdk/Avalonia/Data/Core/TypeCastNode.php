<?php
namespace Avalonia\Data\Core;
/**
 */
class TypeCastNode extends \Avalonia\Data\Core\ExpressionNode
{
	/**
	 * @return \System\Type
	 */
	public  function get_TargetType(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	protected  function Cast($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function ValueChanged($value){}
}
