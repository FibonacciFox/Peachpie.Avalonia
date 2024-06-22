<?php
namespace Avalonia\Data\Core;
class TypeCastNode extends \Avalonia\Data\Core\ExpressionNode
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $TargetType;
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
	 * @param \System\Object|object $value
	 * @return \System\Object|object
	 */
	protected function Cast($value){}
	/**
	 * @param \System\Type $type
	 */
	public function __construct($type){}
}