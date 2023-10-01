<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FuncTemplate_1MethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Templates\TControl
	 */
	#[MethodOverride] public  function Build_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function Build_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class FuncTemplate_1 extends \System\Object implements 
	\Avalonia\Controls\ITemplate_1,
	\Avalonia\Styling\ITemplate
{
	/**
	 * @uses FuncTemplate_1MethodsOverride::Build_1 ()
	 * @uses FuncTemplate_1MethodsOverride::Build_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Build(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
