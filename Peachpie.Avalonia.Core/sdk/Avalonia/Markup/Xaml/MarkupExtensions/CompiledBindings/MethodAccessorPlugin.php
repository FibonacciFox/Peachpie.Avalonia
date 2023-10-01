<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class MethodAccessorPlugin extends \System\Object implements 
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
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
