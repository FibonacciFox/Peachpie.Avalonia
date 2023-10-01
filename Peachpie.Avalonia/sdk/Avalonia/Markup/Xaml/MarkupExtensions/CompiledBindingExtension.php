<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class CompiledBindingExtension extends \Avalonia\Data\BindingBase implements 
	\Avalonia\Data\IBinding
{
	/**
	 * @param \System\IServiceProvider $provider
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindingExtension
	 */
	public  function ProvideValue($provider){}
	/**
	 * @return \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPath
	 */
	public  function get_Path(){}
	/**
	 * @param \Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\CompiledBindingPath $value
	 * @return \System\Void|void
	 */
	public  function set_Path($value){}
	/**
	 * @return \System\Object|object
	 */
	public  function get_Source(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function set_Source($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_DataType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_DataType($value){}
}
