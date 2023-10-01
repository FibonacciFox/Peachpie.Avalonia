<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class PropertyInfoAccessorFactory extends \System\Object
{
	/**
	 * @param \System\WeakReference_1 $target
	 * @param \Avalonia\Data\Core\IPropertyInfo $property
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public static function CreateInpcPropertyAccessor($target, $property){}
	/**
	 * @param \System\WeakReference_1 $target
	 * @param \Avalonia\Data\Core\IPropertyInfo $property
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public static function CreateAvaloniaPropertyAccessor($target, $property){}
	/**
	 * @param \System\WeakReference_1 $target
	 * @param \Avalonia\Data\Core\IPropertyInfo $property
	 * @param \System\Int32|int $argument
	 * @return \Avalonia\Data\Core\Plugins\IPropertyAccessor
	 */
	public static function CreateIndexerPropertyAccessor($target, $property, $argument){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
