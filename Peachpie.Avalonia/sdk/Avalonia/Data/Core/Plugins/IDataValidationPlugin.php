<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
interface IDataValidationPlugin
{
	/**
	 * @param \System\WeakReference_1 $reference
	 * @param \System\String|string $memberName
	 */
	public function Match($reference, $memberName);
	/**
	 * @param \System\WeakReference_1 $reference
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Data\Core\Plugins\IPropertyAccessor $inner
	 */
	public function Start($reference, $propertyName, $inner);
}
