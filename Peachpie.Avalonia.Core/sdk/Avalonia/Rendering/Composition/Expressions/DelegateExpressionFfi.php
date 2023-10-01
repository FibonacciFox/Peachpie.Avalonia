<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait DelegateExpressionFfiMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function Add_1($name, $cb, $types){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_2($name, $cb){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_3($name, $cb){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_4($name, $cb){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_5($name, $cb){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_6($name, $cb){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_7($name, $cb){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Add_8($name, $cb){}
}
/**
 */
class DelegateExpressionFfi extends \System\Object implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionForeignFunctionInterface,
	\System\Collections\IEnumerable
{
	/**
	 * @param \System\String|string $name
	 * @param \System\Collections\Generic\IReadOnlyList_1 $arguments
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant& $result
	 * @return \System\Boolean
	 */
	public  function Call($name, $arguments, $result){}
	/**
	 * @param \System\Collections\Generic\List_1 $countGroup
	 * @param \System\Collections\Generic\IReadOnlyList_1 $arguments
	 * @param \Avalonia\Rendering\Composition\Expressions\ExpressionVariant& $result
	 * @param \System\Boolean $anyCast
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CallWithCast($countGroup, $arguments, $result, $anyCast){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetEnumerator(){}
	/**
	 * @uses DelegateExpressionFfiMethodsOverride::Add_1 ($name, $cb, $types)
	 * @uses DelegateExpressionFfiMethodsOverride::Add_2 ($name, $cb)
	 * @uses DelegateExpressionFfiMethodsOverride::Add_3 ($name, $cb)
	 * @uses DelegateExpressionFfiMethodsOverride::Add_4 ($name, $cb)
	 * @uses DelegateExpressionFfiMethodsOverride::Add_5 ($name, $cb)
	 * @uses DelegateExpressionFfiMethodsOverride::Add_6 ($name, $cb)
	 * @uses DelegateExpressionFfiMethodsOverride::Add_7 ($name, $cb)
	 * @uses DelegateExpressionFfiMethodsOverride::Add_8 ($name, $cb)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Add(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
