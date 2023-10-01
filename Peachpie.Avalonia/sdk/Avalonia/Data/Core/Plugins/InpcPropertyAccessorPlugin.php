<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
class InpcPropertyAccessorPlugin extends \System\Object implements 
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
	 * @param \System\Object|object $instance
	 * @param \System\String|string $propertyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFirstPropertyWithName($instance, $propertyName){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $propertyName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryFindAndCacheProperty($type, $propertyName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
