<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
interface IPropertyAccessorPlugin
{
	/**
	 * @param \System\Object|object $obj
	 * @param \System\String|string $propertyName
	 */
	public function Match($obj, $propertyName);
	/**
	 * @param \System\WeakReference_1 $reference
	 * @param \System\String|string $propertyName
	 */
	public function Start($reference, $propertyName);
}
