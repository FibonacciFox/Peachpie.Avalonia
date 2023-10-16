<?php
namespace System\Reflection\Emit;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EventBuilderMethodsOverride
{
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_1($con, $binaryAttribute){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function SetCustomAttribute_2($customBuilder){}
}
/**
 */
class EventBuilder extends \System\Object
{
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @param \System\Reflection\MethodSemanticsAttributes $semantics
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetMethodSemantics($mdBuilder, $semantics){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public  function SetAddOnMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public  function SetRemoveOnMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public  function SetRaiseMethod($mdBuilder){}
	/**
	 * @param \System\Reflection\Emit\MethodBuilder $mdBuilder
	 * @return \System\Void|void
	 */
	public  function AddOtherMethod($mdBuilder){}
	/**
	 * @uses EventBuilderMethodsOverride::SetCustomAttribute_1 ($con, $binaryAttribute)
	 * @uses EventBuilderMethodsOverride::SetCustomAttribute_2 ($customBuilder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetCustomAttribute(mixed ...$args){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
