<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FuncControlTemplateMethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Templates\TemplateResult_1
	 */
	#[MethodOverride] public  function Build_1($param){}
	/**
	 * @return \Avalonia\Controls\Control
	 */
	#[MethodOverride] public  function Build_2($param){}
}
/**
 */
class FuncControlTemplate extends \Avalonia\Controls\Templates\FuncTemplate_2 implements 
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IControlTemplate,
	\Avalonia\Controls\Templates\ITemplate_2
{
	/**
	 * @uses FuncControlTemplateMethodsOverride::Build_1 ($param)
	 * @uses FuncControlTemplateMethodsOverride::Build_2 ($param)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
}
