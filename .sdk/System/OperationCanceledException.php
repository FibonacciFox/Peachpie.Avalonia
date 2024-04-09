<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait OperationCanceledExceptionOverride {
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
	 * @param \System\Threading\CancellationToken $token
	 */
	#[MethodOverride]public function __construct_4 ($token){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Threading\CancellationToken $token
	 */
	#[MethodOverride]public function __construct_5 ($message, $token){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 * @param \System\Threading\CancellationToken $token
	 */
	#[MethodOverride]public function __construct_6 ($message, $innerException, $token){}
}
class OperationCanceledException extends \System\SystemException implements
	\System\Runtime\Serialization\ISerializable
{
	use OperationCanceledExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Threading\CancellationToken
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
	 * @uses OperationCanceledExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses OperationCanceledExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses OperationCanceledExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses OperationCanceledExceptionOverride::__construct_4 <br>public , args: ($token)<br>
	 * @uses OperationCanceledExceptionOverride::__construct_5 <br>public , args: ($message, $token)<br>
	 * @uses OperationCanceledExceptionOverride::__construct_6 <br>public , args: ($message, $innerException, $token)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}