<?php
namespace Avalonia\Data\Core;
class SettableNode extends \Avalonia\Data\Core\ExpressionNode
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
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean|bool
	 */
	public function SetTargetValue($value, $priority){}
	private function ShouldNotSet($value){}
	/**
	 * @param \System\Object|object $value
	 * @param \Avalonia\Data\BindingPriority $priority
	 * @return \System\Boolean|bool
	 */
	abstract protected function SetTargetValueCore($value, $priority);
}