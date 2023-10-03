<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
class AvaloniaPropertyAccessorPlugin extends \System\Object implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin
{
	/**
	 * @param \System\Object|object $obj
	 * @param \System\String|string $propertyName
	 * @return \System\Boolean
	 */
	public  function Match($obj, $propertyName){}
	/**
	 * @param \System\WeakReference_1 $reference
	 * @param \System\String|string $propertyName
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public  function Start($reference, $propertyName){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \System\String|string $propertyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function LookupProperty($o, $propertyName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
