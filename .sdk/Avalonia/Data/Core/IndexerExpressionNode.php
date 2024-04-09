<?php
namespace Avalonia\Data\Core;
class IndexerExpressionNode extends \Avalonia\Data\Core\IndexerNodeBase implements
	\Avalonia\Utilities\IWeakEventSubscriber_1
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
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
	/**
	 * @param \System\Linq\Expressions\IndexExpression $expression
	 */
	public function __construct($expression){}
}