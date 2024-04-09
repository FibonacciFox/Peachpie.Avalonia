<?php
namespace Avalonia\Data\Core;
class LogicalNotNode extends \Avalonia\Data\Core\ExpressionNode implements
	\Avalonia\Data\Core\ITransformNode
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \Avalonia\Data\Core\ExpressionNode
	 */
	public $Next;
	/**
	 * @property
	 * @var \System\WeakReference_1[System\Object]
	 */
	public $Target;
	private static function Negate($value){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	public function Transform($value){}
	/**
	 */
	public function __construct(){}
}