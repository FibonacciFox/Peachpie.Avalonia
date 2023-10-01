<?php
namespace Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class TypeCastPathElement_1 extends \System\Object implements 
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ITypeCastElement,
	\Avalonia\Markup\Xaml\MarkupExtensions\CompiledBindings\ICompiledBindingPathElement
{
	/**
	 * @param \System\Object|object $obj
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function TryCast($obj){}
	/**
	 * @return \System\Type
	 */
	public  function get_Type(){}
	/**
	 * @return \System\Func_2
	 */
	public  function get_Cast(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
