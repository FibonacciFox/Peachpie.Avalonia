<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MarkupBindingChainExceptionOverride {
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Boolean|bool $enableValidation
	 */
	#[MethodOverride]public function __construct_1 ($propertyName, $enableValidation){}
	/**
	 * @param \System\String|string $propertyName
	 * @param \System\Boolean|bool $enableValidation
	 * @param \Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin $customPlugin
	 */
	#[MethodOverride]public function __construct_2 ($propertyName, $enableValidation, $customPlugin){}
}
class PropertyAccessorNode extends \Avalonia\Data\Core\SettableNode
{
	use MarkupBindingChainExceptionOverride;
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
	private function GetPropertyAccessorPluginForObject($target){}
	/**
	 * @uses PropertyAccessorNodeOverride::__construct_1 <br>public , args: ($propertyName, $enableValidation)<br>
	 * @uses PropertyAccessorNodeOverride::__construct_2 <br>public , args: ($propertyName, $enableValidation, $customPlugin)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}