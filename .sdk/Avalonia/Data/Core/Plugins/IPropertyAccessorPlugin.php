<?php
namespace Avalonia\Data\Core\Plugins;
interface IPropertyAccessorPlugin
{

	/**
	 * @param \System\Object|object $obj
	 * @param \System\String|string $propertyName
	 * @return \System\Boolean|bool
	 */
	public function Match($obj, $propertyName);
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $propertyName
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public function Start($reference, $propertyName);
}