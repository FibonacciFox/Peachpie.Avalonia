<?php
namespace Avalonia\Utilities;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SynchronousCompletionAsyncResult_1MethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class SynchronousCompletionAsyncResult_1 extends \System\ValueType implements 
	\System\Runtime\CompilerServices\INotifyCompletion,
	\System\IEquatable_1
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ThrowNotInitialized(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \Avalonia\Utilities\T
	 */
	public  function GetResult(){}
	/**
	 * @param \System\Action $continuation
	 * @return \System\Void|void
	 */
	public  function OnCompleted($continuation){}
	/**
	 * @return \Avalonia\Utilities\SynchronousCompletionAsyncResult_1
	 */
	public  function GetAwaiter(){}
	/**
	 * @param \System\Text\StringBuilder $builder
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function PrintMembers($builder){}
	/**
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $left
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $left
	 * @param \Avalonia\Utilities\SynchronousCompletionAsyncResult_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @uses SynchronousCompletionAsyncResult_1MethodsOverride::Equals_1 ($obj)
	 * @uses SynchronousCompletionAsyncResult_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
}
