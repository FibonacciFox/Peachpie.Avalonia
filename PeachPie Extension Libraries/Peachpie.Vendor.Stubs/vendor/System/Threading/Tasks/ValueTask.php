<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueTaskOverride {
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]public static function FromCanceled_1 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public static function FromCanceled_2 ($cancellationToken){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Threading\Tasks\ValueTask
	 */
	#[MethodOverride]public static function FromException_1 ($exception){}
	/**
	 * @deprecated
	 * @param \System\Exception $exception
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	#[MethodOverride]public static function FromException_2 ($exception){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 */
	#[MethodOverride]public function __construct_1 ($task){}
	/**
	 * @param \System\Threading\Tasks\Sources\IValueTaskSource $source
	 * @param \System\Int16 $token
	 */
	#[MethodOverride]public function __construct_2 ($source, $token){}
}
final class ValueTask extends \System\ValueType implements
	\System\IEquatable_1
{
	use ValueTaskOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	protected $_obj;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Int16
	 */
	protected $_token;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Boolean|bool
	 */
	protected $_continueOnCapturedContext;
	/**
	 * @property
	 * @var \System\Threading\Tasks\ValueTask
	 * @since readonly
	 */
	public $CompletedTask;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompleted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompletedSuccessfully;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsFaulted;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCanceled;
	/**
	 * @param \TResult $result
	 * @return \System\Threading\Tasks\ValueTask_1[TResult]
	 */
	public static function FromResult($result){}
	/**
	 * @uses ValueTaskOverride::FromCanceled_1 <br>public , args: ($cancellationToken)<br>
	 * @uses ValueTaskOverride::FromCanceled_2 <br>public , args: ($cancellationToken)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\ValueTask|\System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromCanceled (\override ...$args){}
	/**
	 * @uses ValueTaskOverride::FromException_1 <br>public , args: ($exception)<br>
	 * @uses ValueTaskOverride::FromException_2 <br>public , args: ($exception)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\ValueTask|\System\Threading\Tasks\ValueTask_1|mixed|\override
	 */
	#[MethodOverridePublic]function FromException (\override ...$args){}
	/**
	 * @param \System\Threading\Tasks\ValueTask $left
	 * @param \System\Threading\Tasks\ValueTask $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\Tasks\ValueTask $left
	 * @param \System\Threading\Tasks\ValueTask $right
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function AsTask(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function Preserve(){}
	private function GetTaskForValueTaskSource($t){}
	/**
	 * @return \System\Void|void
	 */
	protected function ThrowIfCompletedUnsuccessfully(){}
	/**
	 * @param \System\Threading\Tasks\ValueTask_1 $valueTask [generic: TResult]
	 * @return \System\Threading\Tasks\ValueTask
	 */
	protected static function DangerousCreateFromTypedValueTask($valueTask){}
	/**
	 * @return \System\Runtime\CompilerServices\ValueTaskAwaiter
	 */
	public function GetAwaiter(){}
	/**
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredValueTaskAwaitable
	 */
	public function ConfigureAwait($continueOnCapturedContext){}
	/**
	 * @uses ValueTaskOverride::__construct_1 <br>public , args: ($task)<br>
	 * @uses ValueTaskOverride::__construct_2 <br>public , args: ($source, $token)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}