<?php
namespace Avalonia\Data\Core\Plugins;
/**
 */
class MethodAccessorPlugin extends \System\Object implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessorPlugin
{
	/**
	 * @param \System\Object|object $obj
	 * @param \System\String|string $methodName
	 * @return \System\Boolean
	 */
	public  function Match($obj, $methodName){}
	/**
	 * @param \System\WeakReference_1 $reference
	 * @param \System\String|string $methodName
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public  function Start($reference, $methodName){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $methodName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetFirstMethodWithName($type, $methodName){}
	/**
	 * @param \System\Type $type
	 * @param \System\String|string $methodName
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryFindAndCacheMethod($type, $methodName){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
