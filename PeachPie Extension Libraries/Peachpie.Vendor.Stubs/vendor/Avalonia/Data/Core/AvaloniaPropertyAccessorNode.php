<?php
namespace Avalonia\Data\Core;
class AvaloniaPropertyAccessorNode extends \Avalonia\Data\Core\SettableNode
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $PropertyName;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
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
	 * @param \Avalonia\AvaloniaProperty $property
	 * @param \System\Boolean|bool $enableValidation
	 */
	public function __construct($property, $enableValidation){}
}