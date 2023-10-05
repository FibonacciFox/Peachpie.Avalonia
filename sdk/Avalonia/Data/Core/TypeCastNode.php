<?php
namespace Avalonia\Data\Core;
/**
 */
class TypeCastNode extends \Avalonia\Data\Core\ExpressionNode
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $TargetType;
	/**
	 * @var \Avalonia\Data\Core\ExpressionNode
	 * @property
	 */
	public $Next;
	/**
	 * @var \System\WeakReference_1[System\Object]
	 * @property
	 */
	public $Target;
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
