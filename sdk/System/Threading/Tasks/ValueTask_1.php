<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValueTask_1MethodsOverride
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
class ValueTask_1 extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Object
	 * @field
	 */
	protected readonly $_obj;
	/**
	 * @var \TResult
	 * @field
	 */
	protected readonly $_result;
	/**
	 * @var \System\Int16
	 * @field
	 */
	protected readonly $_token;
	/**
	 * @var \System\Boolean
	 * @field
	 */
	protected readonly $_continueOnCapturedContext;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompleted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCompletedSuccessfully;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsFaulted;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsCanceled;
	/**
	 * @var \TResult
	 * @property
	 */
	public readonly $Result;
	/**
	 * @uses ValueTask_1MethodsOverride::Equals_1 ($obj)
	 * @uses ValueTask_1MethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\ValueTask_1 $left
	 * @param \System\Threading\Tasks\ValueTask_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\Tasks\ValueTask_1 $left
	 * @param \System\Threading\Tasks\ValueTask_1 $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function AsTask(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function Preserve(){}
	/**
	 * @param \System\Threading\Tasks\Sources\IValueTaskSource_1 $t
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTaskForValueTaskSource($t){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompleted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCompletedSuccessfully(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsFaulted(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsCanceled(){}
	/**
	 * @return \System\Threading\Tasks\TResult
	 */
	public  function get_Result(){}
	/**
	 * @return \System\Runtime\CompilerServices\ValueTaskAwaiter_1
	 */
	public  function GetAwaiter(){}
	/**
	 * @param \System\Boolean $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredValueTaskAwaitable_1
	 */
	public  function ConfigureAwait($continueOnCapturedContext){}
}
