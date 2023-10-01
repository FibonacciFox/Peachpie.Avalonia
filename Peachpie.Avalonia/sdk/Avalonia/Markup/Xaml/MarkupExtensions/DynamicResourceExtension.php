<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class DynamicResourceExtension extends \System\Object implements 
	\Avalonia\Data\IBinding
{
	/**
	 * @return \System\Object|object
	 */
	public  function get_ResourceKey(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_ResourceKey($value){}
	/**
	 * @param \System\IServiceProvider $serviceProvider
	 * @return \Avalonia\Data\IBinding
	 */
	public  function ProvideValue($serviceProvider){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetConverter($targetProperty){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
