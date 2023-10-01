<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FuncControlTemplate_1MethodsOverride
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
 * @deprecated this element should not be used by you because it will break your program
 */
class FuncControlTemplate_1 extends \Avalonia\Controls\Templates\FuncControlTemplate implements 
	\Avalonia\Controls\Templates\ITemplate_2,
	\Avalonia\Controls\Templates\IControlTemplate,
	\Avalonia\Controls\Templates\ITemplate_2
{
	/**
	 * @uses FuncControlTemplate_1MethodsOverride::Build_1 ($param)
	 * @uses FuncControlTemplate_1MethodsOverride::Build_2 ($param)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
}
