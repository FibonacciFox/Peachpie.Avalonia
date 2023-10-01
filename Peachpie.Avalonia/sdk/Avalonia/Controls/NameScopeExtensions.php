<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait NameScopeExtensionsMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\T
	 */
	#[MethodOverride] public static function Find_1($nameScope, $name){}
	/**
	 * @return \Avalonia\Controls\T
	 */
	#[MethodOverride] public static function Find_2($anchor, $name){}
	/**
	 * @return \Avalonia\Controls\T
	 */
	#[MethodOverride] public static function Get_1($nameScope, $name){}
	/**
	 * @return \Avalonia\Controls\T
	 */
	#[MethodOverride] public static function Get_2($anchor, $name){}
}
/**
 */
class NameScopeExtensions extends \System\Object
{
	/**
	 * @uses NameScopeExtensionsMethodsOverride::Find_1 ($nameScope, $name)
	 * @uses NameScopeExtensionsMethodsOverride::Find_2 ($anchor, $name)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Find(mixed ...$args){}
	/**
	 * @uses NameScopeExtensionsMethodsOverride::Get_1 ($nameScope, $name)
	 * @uses NameScopeExtensionsMethodsOverride::Get_2 ($anchor, $name)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Get(mixed ...$args){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $control
	 * @return \Avalonia\Controls\INameScope
	 */
	public static function FindNameScope($control){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
