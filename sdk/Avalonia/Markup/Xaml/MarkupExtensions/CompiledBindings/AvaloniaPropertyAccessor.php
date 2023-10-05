<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class AvaloniaPropertyAccessor extends \Avalonia\Data\Core\Plugins\PropertyAccessorBase implements 
	\Avalonia\Data\Core\Plugins\IPropertyAccessor,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\AvaloniaObject
	 * @property
	 */
	public readonly $Instance;
	/**
	 * @var \System\Type
	 * @property
	 */
	public readonly $PropertyType;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @return \Avalonia\AvaloniaObject
	 */
	public  function get_Instance(){}
}
