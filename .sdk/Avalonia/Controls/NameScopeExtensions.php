<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NameScopeExtensionsOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\INameScope $nameScope
	 * @param \System\String|string $name
	 * @return \T|object
	 */
	#[MethodOverride]public static function Find_1 ($nameScope, $name){}
	/**
	 * @deprecated
	 * @param \Avalonia\LogicalTree\ILogical $anchor
	 * @param \System\String|string $name
	 * @return \T|object
	 */
	#[MethodOverride]public static function Find_2 ($anchor, $name){}
	/**
	 * @deprecated
	 * @param \Avalonia\Controls\INameScope $nameScope
	 * @param \System\String|string $name
	 * @return \T|object
	 */
	#[MethodOverride]public static function Get_1 ($nameScope, $name){}
	/**
	 * @deprecated
	 * @param \Avalonia\LogicalTree\ILogical $anchor
	 * @param \System\String|string $name
	 * @return \T|object
	 */
	#[MethodOverride]public static function Get_2 ($anchor, $name){}
}
class NameScopeExtensions extends \System\Object
{
	use NameScopeExtensionsOverride;


	/**
	 * @uses NameScopeExtensionsOverride::Find_1 <br>public , args: ($nameScope, $name)<br>
	 * @uses NameScopeExtensionsOverride::Find_2 <br>public , args: ($anchor, $name)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePublic]function Find (\override ...$args){}
	/**
	 * @uses NameScopeExtensionsOverride::Get_1 <br>public , args: ($nameScope, $name)<br>
	 * @uses NameScopeExtensionsOverride::Get_2 <br>public , args: ($anchor, $name)<br>
	 * @var mixed|\override ...$args
	 * @return \T|object|mixed|\override
	 */
	#[MethodOverridePublic]function Get (\override ...$args){}
	/**
	 * @param \Avalonia\LogicalTree\ILogical $control
	 * @return \Avalonia\Controls\INameScope
	 */
	public static function FindNameScope($control){}
}