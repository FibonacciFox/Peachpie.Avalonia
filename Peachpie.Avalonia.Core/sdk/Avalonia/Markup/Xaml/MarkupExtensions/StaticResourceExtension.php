<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class StaticResourceExtension extends \System\Object
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
	 * @return \System\Object|object
	 */
	public  function ProvideValue($serviceProvider){}
	/**
	 * @param \Avalonia\StyledElement $control
	 * @param \System\Type $targetType
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetValue($control, $targetType){}
	/**
	 * @param \System\IServiceProvider $serviceProvider
	 * @return \Avalonia\Styling\ThemeVariant
	 */
	protected static function GetDictionaryVariant($serviceProvider){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
