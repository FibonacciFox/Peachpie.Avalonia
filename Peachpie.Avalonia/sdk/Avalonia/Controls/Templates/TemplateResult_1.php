<?php
namespace Avalonia\Controls\Templates;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TemplateResult_1MethodsOverride
{
	/**
	 * @return \Avalonia\Controls\Templates\T
	 */
	#[MethodOverride] public  function get_Result_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Result_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TemplateResult_1 extends \System\Object implements 
	\Avalonia\Controls\Templates\ITemplateResult
{
	/**
	 * @uses TemplateResult_1MethodsOverride::get_Result_1 ()
	 * @uses TemplateResult_1MethodsOverride::get_Result_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Result(mixed ...$args){}
	/**
	 * @return \Avalonia\Controls\INameScope
	 */
	public  function get_NameScope(){}
	/**
	 * @param \Avalonia\Controls\Templates\T& $result
	 * @param \Avalonia\Controls\INameScope& $scope
	 * @return \System\Void|void
	 */
	public  function Deconstruct($result, $scope){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
