<?php
namespace Avalonia\Data\Core;
/**
 */
class PropertyAccessorNode extends \Avalonia\Data\Core\SettableNode
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Description;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $PropertyName;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
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
	 * @return \System\String|string
	 */
	public  function get_PropertyName(){}
	/**
	 * @param \System\Object|object $target
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetPropertyAccessorPluginForObject($target){}
}
