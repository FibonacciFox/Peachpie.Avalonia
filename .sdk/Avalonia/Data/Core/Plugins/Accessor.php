<?php
namespace Avalonia\Data\Core\Plugins;
final class Accessor extends \Avalonia\Data\Core\Plugins\PropertyAccessorBase implements
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $PropertyType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\Reflection\MethodInfo $method
	 */
	public function __construct($reference, $method){}
}