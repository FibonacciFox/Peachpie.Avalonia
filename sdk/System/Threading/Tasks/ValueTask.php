<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ValueTaskMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public static function FromCanceled_1($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public static function FromCanceled_2($cancellationToken){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride] public static function FromException_1($exception){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride] public static function FromException_2($exception){}
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
 */
class ValueTask extends \System\ValueType implements 
	\System\IEquatable_1
{
	/**
	 * @var \System\Object
	 * @field
	 */
	protected readonly $_obj;
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
	 * @var \System\Threading\Tasks\ValueTask
	 * @property
	 */
	public readonly $CompletedTask;
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
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public static function get_CompletedTask(){}
	/**
	 * @param \System\Threading\Tasks\TResult $result
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public static function FromResult($result){}
	/**
	 * @uses ValueTaskMethodsOverride::FromCanceled_1 ($cancellationToken)
	 * @uses ValueTaskMethodsOverride::FromCanceled_2 ($cancellationToken)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromCanceled(mixed ...$args){}
	/**
	 * @uses ValueTaskMethodsOverride::FromException_1 ($exception)
	 * @uses ValueTaskMethodsOverride::FromException_2 ($exception)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function FromException(mixed ...$args){}
	/**
	 * @uses ValueTaskMethodsOverride::Equals_1 ($obj)
	 * @uses ValueTaskMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Threading\Tasks\ValueTask $left
	 * @param \System\Threading\Tasks\ValueTask $right
	 * @return \System\Boolean
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\Tasks\ValueTask $left
	 * @param \System\Threading\Tasks\ValueTask $right
	 * @return \System\Boolean
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function AsTask(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public  function Preserve(){}
	/**
	 * @param \System\Threading\Tasks\Sources\IValueTaskSource $t
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
	 * @return \System\Void|void
	 */
	protected  function ThrowIfCompletedUnsuccessfully(){}
	/**
	 * @param \System\Threading\Tasks\ValueTask_1 $valueTask
	 * @return \System\Threading\Tasks\ValueTask
	 */
	protected static function DangerousCreateFromTypedValueTask($valueTask){}
	/**
	 * @return \System\Runtime\CompilerServices\ValueTaskAwaiter
	 */
	public  function GetAwaiter(){}
	/**
	 * @param \System\Boolean $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredValueTaskAwaitable
	 */
	public  function ConfigureAwait($continueOnCapturedContext){}
}
