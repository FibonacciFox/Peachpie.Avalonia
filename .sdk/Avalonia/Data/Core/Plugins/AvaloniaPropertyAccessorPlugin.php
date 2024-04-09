<?php
namespace Avalonia\Data\Core\Plugins;
class AvaloniaPropertyAccessorPlugin extends \System\Object implements
	\Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin
{

	/**
	 * @param \System\Object|object $obj
	 * @param \System\String|string $propertyName
	 * @return \System\Boolean|bool
	 */
	public function Match($obj, $propertyName){}
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $propertyName
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public function Start($reference, $propertyName){}
	private static function LookupProperty($o, $propertyName){}
	/**
	 */
	public function __construct(){}
}