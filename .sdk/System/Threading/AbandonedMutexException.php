<?php
namespace System\Threading;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AbandonedMutexExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $inner
	 */
	#[MethodOverride]public function __construct_3 ($message, $inner){}
	/**
	 * @param \System\Int32|int $location
	 * @param \System\Threading\WaitHandle $handle
	 */
	#[MethodOverride]public function __construct_4 ($location, $handle){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Int32|int $location
	 * @param \System\Threading\WaitHandle $handle
	 */
	#[MethodOverride]public function __construct_5 ($message, $location, $handle){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $inner
	 * @param \System\Int32|int $location
	 * @param \System\Threading\WaitHandle $handle
	 */
	#[MethodOverride]public function __construct_6 ($message, $inner, $location, $handle){}
}
class AbandonedMutexException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use AbandonedMutexExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Threading\Mutex
	 * @since readonly
	 */
	public $Mutex;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $MutexIndex;
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
	private function SetupException($location, $handle){}
	/**
	 * @uses AbandonedMutexExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses AbandonedMutexExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses AbandonedMutexExceptionOverride::__construct_3 <br>public , args: ($message, $inner)<br>
	 * @uses AbandonedMutexExceptionOverride::__construct_4 <br>public , args: ($location, $handle)<br>
	 * @uses AbandonedMutexExceptionOverride::__construct_5 <br>public , args: ($message, $location, $handle)<br>
	 * @uses AbandonedMutexExceptionOverride::__construct_6 <br>public , args: ($message, $inner, $location, $handle)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}