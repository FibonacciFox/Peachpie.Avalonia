<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions;
/**
 */
class RelativeSourceExtension extends \System\Object
{
	/**
	 * @param \System\IServiceProvider $serviceProvider
	 * @return \Avalonia\Data\RelativeSource
	 */
	public  function ProvideValue($serviceProvider){}
	/**
	 * @return \Avalonia\Data\RelativeSourceMode
	 */
	public  function get_Mode(){}
	/**
	 * @param \Avalonia\Data\RelativeSourceMode $value
	 * @return \System\Void|void
	 */
	public  function set_Mode($value){}
	/**
	 * @return \System\Type
	 */
	public  function get_AncestorType(){}
	/**
	 * @param \System\Type $value
	 * @return \System\Void|void
	 */
	public  function set_AncestorType($value){}
	/**
	 * @return \Avalonia\Data\TreeType
	 */
	public  function get_Tree(){}
	/**
	 * @param \Avalonia\Data\TreeType $value
	 * @return \System\Void|void
	 */
	public  function set_Tree($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_AncestorLevel(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_AncestorLevel($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
