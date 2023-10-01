<?php
namespace Avalonia\Data;
/**
 */
class IndexerBinding extends \System\Object implements 
	\Avalonia\Data\IBinding
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Source(){}
	/**
	 * @return \Avalonia\AvaloniaProperty
	 */
	public  function get_Property(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Mode(){}
	/**
	 * @param \Avalonia\AvaloniaObject $target
	 * @param \Avalonia\AvaloniaProperty $targetProperty
	 * @param \System\Object|object $anchor
	 * @param \System\Boolean $enableDataValidation
	 * @return \Avalonia\Data\InstancedBinding
	 */
	public  function Initiate($target, $targetProperty, $anchor, $enableDataValidation){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
