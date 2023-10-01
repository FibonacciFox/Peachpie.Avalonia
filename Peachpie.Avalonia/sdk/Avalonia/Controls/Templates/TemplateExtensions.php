<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TemplateExtensionsMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] public static function GetTemplateChildren_1($control){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	#[MethodOverride] private static function GetTemplateChildren_2($control, $templatedParent){}
}
/**
 */
class TemplateExtensions extends \System\Object
{
	/**
	 * @uses TemplateExtensionsMethodsOverride::GetTemplateChildren_1 ($control)
	 * @uses TemplateExtensionsMethodsOverride::GetTemplateChildren_2 ($control, $templatedParent)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function GetTemplateChildren(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
