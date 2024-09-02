<?php
namespace Avalonia\Data\Core\Plugins;
class MethodAccessorPlugin extends \System\Object implements
	\Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin
{

	/**
	 * @param \System\Object|object $obj
	 * @param \System\String|string $methodName
	 * @return \System\Boolean|bool
	 */
	public function Match($obj, $methodName){}
	/**
	 * @param \System\WeakReference_1 $reference [generic: System\Object]
	 * @param \System\String|string $methodName
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public function Start($reference, $methodName){}
	private function GetFirstMethodWithName($type, $methodName){}
	private function TryFindAndCacheMethod($type, $methodName){}
	/**
	 */
	public function __construct(){}
}