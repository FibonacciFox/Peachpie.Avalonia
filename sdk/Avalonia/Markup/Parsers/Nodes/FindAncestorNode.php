<?php
namespace Avalonia\Markup\Parsers\Nodes;
/**
 */
class FindAncestorNode extends \Avalonia\Data\Core\ExpressionNode
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
	 * @return \System\Void|void
	 */
	protected  function ValueChanged($value){}
}
