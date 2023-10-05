<?php
namespace Avalonia;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait StreamBindingExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public static function StreamBinding_1($this){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] public static function StreamBinding_2($this){}
	/**
	 * @return \Avalonia\T
	 */
	#[MethodOverride] public static function StreamBinding_3($this){}
}
/**
 */
class StreamBindingExtensions extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $StreamBindingName;
	/**
	 * @uses StreamBindingExtensionsMethodsOverride::StreamBinding_1 ($this)
	 * @uses StreamBindingExtensionsMethodsOverride::StreamBinding_2 ($this)
	 * @uses StreamBindingExtensionsMethodsOverride::StreamBinding_3 ($this)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function StreamBinding(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
