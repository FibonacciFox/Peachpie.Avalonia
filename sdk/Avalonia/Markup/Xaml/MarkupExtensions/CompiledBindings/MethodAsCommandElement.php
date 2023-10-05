<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 */
class MethodAsCommandElement extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement
{
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $MethodName;
	/**
	 * @var \System\Action_2[System\Object,System\Object]
	 * @property
	 */
	public readonly $ExecuteMethod;
	/**
	 * @var \System\Func_3[System\Object,System\Object,System\Boolean]
	 * @property
	 */
	public readonly $CanExecuteMethod;
	/**
	 * @var \System\Collections\Generic\HashSet_1[System\String]
	 * @property
	 */
	public readonly $DependsOnProperties;
	/**
	 * @return \System\String|string
	 */
	public  function get_MethodName(){}
	/**
	 * @return \System\Action_2
	 */
	public  function get_ExecuteMethod(){}
	/**
	 * @return \System\Func_3
	 */
	public  function get_CanExecuteMethod(){}
	/**
	 * @return \System\Collections\Generic\HashSet_1
	 */
	public  function get_DependsOnProperties(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
