<?php
namespace Avalonia\Rendering\Composition\Expressions;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ExpressionTrackedObjectsMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] private  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
	/**
	 * @return \System\Collections\Generic\Enumerator
	 */
	#[MethodOverride] public  function GetEnumerator_3(){}
}
/**
 */
class ExpressionTrackedObjects extends \System\Object implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable
{
	/**
	 * @param \Avalonia\Rendering\Composition\Expressions\IExpressionObject $obj
	 * @param \System\String|string $member
	 * @return \System\Void|void
	 */
	public  function Add($obj, $member){}
	/**
	 * @return \System\Void|void
	 */
	public  function Clear(){}
	/**
	 * @uses ExpressionTrackedObjectsMethodsOverride::GetEnumerator_1 ()
	 * @uses ExpressionTrackedObjectsMethodsOverride::GetEnumerator_2 ()
	 * @uses ExpressionTrackedObjectsMethodsOverride::GetEnumerator_3 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
