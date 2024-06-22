<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskCanceledExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_3 ($message, $innerException){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 * @param \System\Threading\CancellationToken $token
	 */
	#[MethodOverride]public function __construct_4 ($message, $innerException, $token){}
	/**
	 * @param \System\Threading\Tasks\Task $task
	 */
	#[MethodOverride]public function __construct_5 ($task){}
}
class TaskCanceledException extends \System\OperationCanceledException implements
	\System\Runtime\Serialization\ISerializable
{
	use TaskCanceledExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Threading\Tasks\Task
	 * @since readonly
	 */
	public $Task;
	/**
	 * @property
	 * @var \System\Threading\CancellationToken
	 * @since readonly
	 */
	public $CancellationToken;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $TargetSite;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Collections\IDictionary
	 * @since readonly
	 */
	public $Data;
	/**
	 * @property
	 * @var \System\Exception
	 * @since readonly
	 */
	public $InnerException;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $HelpLink;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $HResult;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $StackTrace;
	/**
	 * @uses TaskCanceledExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses TaskCanceledExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses TaskCanceledExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses TaskCanceledExceptionOverride::__construct_4 <br>public , args: ($message, $innerException, $token)<br>
	 * @uses TaskCanceledExceptionOverride::__construct_5 <br>public , args: ($task)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}