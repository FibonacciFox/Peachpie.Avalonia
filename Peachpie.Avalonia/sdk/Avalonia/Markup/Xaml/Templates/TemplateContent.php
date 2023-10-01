<?php
namespace Avalonia\Markup\Xaml\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TemplateContentMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Templates\TemplateResult_1
	 */
	#[MethodOverride] public static function Load_1($templateContent){}
	/**
	 * @return \Avalonia\Controls\Templates\TemplateResult_1
	 */
	#[MethodOverride] public static function Load_2($templateContent){}
}
/**
 */
class TemplateContent extends \System\Object
{
	/**
	 * @uses TemplateContentMethodsOverride::Load_1 ($templateContent)
	 * @uses TemplateContentMethodsOverride::Load_2 ($templateContent)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function Load(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
