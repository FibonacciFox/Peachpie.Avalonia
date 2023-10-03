<?php
namespace Avalonia\Markup\Xaml\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FocusAdornerTemplateMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function Build_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function Build_2(){}
}
/**
 */
class FocusAdornerTemplate extends \Avalonia\Markup\Xaml\Templates\Template implements 
	\Avalonia\Controls\ITemplate_1,
	\Avalonia\Styling\ITemplate
{
	/**
	 * @uses FocusAdornerTemplateMethodsOverride::Build_1 ()
	 * @uses FocusAdornerTemplateMethodsOverride::Build_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
}
