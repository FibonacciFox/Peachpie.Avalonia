<?php
namespace Avalonia\Data\Core\Plugins;
interface IDataValidationPlugin
{


	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $memberName
	 * @return \System\Boolean|bool
	 */
	public function Match($reference, $memberName);
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $propertyName
	 * @param \Avalonia\Data\Core\Plugins\IPropertyAccessor $inner
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public function Start($reference, $propertyName, $inner);
}