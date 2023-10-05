<?php
namespace Avalonia\Data\Core;
/**
 */
class LogicalNotNode extends \Avalonia\Data\Core\ExpressionNode implements 
	\Avalonia\Data\Core\ITransformNode
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
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
	 * @param \System\Object|object $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Negate($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	public  function Transform($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	protected  function ValueChanged($value){}
}
