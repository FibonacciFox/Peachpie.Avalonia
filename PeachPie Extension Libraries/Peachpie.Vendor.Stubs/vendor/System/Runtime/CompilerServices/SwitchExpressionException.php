<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SwitchExpressionExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_2 ($innerException){}
	/**
	 * @param \System\Object|object $unmatchedValue
	 */
	#[MethodOverride]public function __construct_3 ($unmatchedValue){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_4 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_5 ($message, $innerException){}
}
final class SwitchExpressionException extends \System\InvalidOperationException implements
	\System\Runtime\Serialization\ISerializable
{
	use SwitchExpressionExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $UnmatchedValue;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Reflection\MethodBase
	 * @since readonly
	 */
	public $TargetSite;
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
	 * @uses SwitchExpressionExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses SwitchExpressionExceptionOverride::__construct_2 <br>public , args: ($innerException)<br>
	 * @uses SwitchExpressionExceptionOverride::__construct_3 <br>public , args: ($unmatchedValue)<br>
	 * @uses SwitchExpressionExceptionOverride::__construct_4 <br>public , args: ($message)<br>
	 * @uses SwitchExpressionExceptionOverride::__construct_5 <br>public , args: ($message, $innerException)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}