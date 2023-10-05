<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class PropertyElement extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement
{
	/**
	 * @var \Avalonia\Data\Core\IPropertyInfo
	 * @property
	 */
	public readonly $Property;
	/**
	 * @var \System\Func_3[System\WeakReference_1[System\Object],Avalonia\Data\Core\IPropertyInfo,Avalonia\Data\Core\Plugins\IPropertyAccessor]
	 * @property
	 */
	public readonly $AccessorFactory;
	/**
	 * @return \Avalonia\Data\Core\IPropertyInfo
	 */
	public  function get_Property(){}
	/**
	 * @return \System\Func_3
	 */
	public  function get_AccessorFactory(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
