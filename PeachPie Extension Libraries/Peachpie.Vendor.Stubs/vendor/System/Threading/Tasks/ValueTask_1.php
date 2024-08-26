<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ValueTask_1Override {
	/**
	 * @param \TResult $result
	 */
	#[MethodOverride]public function __construct_1 ($result){}
	/**
	 * @param \System\Threading\Tasks\Task_1 $task [generic: TResult]
	 */
	#[MethodOverride]public function __construct_2 ($task){}
	/**
	 * @param \System\Threading\Tasks\Sources\IValueTaskSource_1 $source [generic: TResult]
	 * @param \System\Int16 $token
	 */
	#[MethodOverride]public function __construct_3 ($source, $token){}
}
final class ValueTask_1 extends \System\ValueType implements
	\System\IEquatable_1
{
	use ValueTask_1Override;
	/**
	 * @field
	 * @since readonly
	 * @var \System\Object|object
	 */
	protected $_obj;
	/**
	 * @field
	 * @since readonly
	 * @var \TResult
	 */
	protected $_result;
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
	 * @property
	 * @var \TResult
	 * @since readonly
	 */
	public $Result;
	/**
	 * @param \System\Threading\Tasks\ValueTask_1 $left [generic: TResult]
	 * @param \System\Threading\Tasks\ValueTask_1 $right [generic: TResult]
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($left, $right){}
	/**
	 * @param \System\Threading\Tasks\ValueTask_1 $left [generic: TResult]
	 * @param \System\Threading\Tasks\ValueTask_1 $right [generic: TResult]
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($left, $right){}
	/**
	 * @return \System\Threading\Tasks\Task_1[TResult]
	 */
	public function AsTask(){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1[TResult]
	 */
	public function Preserve(){}
	private function GetTaskForValueTaskSource($t){}
	/**
	 * @return \System\Runtime\CompilerServices\ValueTaskAwaiter_1[TResult]
	 */
	public function GetAwaiter(){}
	/**
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredValueTaskAwaitable_1[TResult]
	 */
	public function ConfigureAwait($continueOnCapturedContext){}
	/**
	 * @uses ValueTask_1Override::__construct_1 <br>public , args: ($result)<br>
	 * @uses ValueTask_1Override::__construct_2 <br>public , args: ($task)<br>
	 * @uses ValueTask_1Override::__construct_3 <br>public , args: ($source, $token)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}