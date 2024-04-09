<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BindingChainExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $expression
	 * @param \System\String|string $errorPoint
	 */
	#[MethodOverride]public function __construct_3 ($message, $expression, $errorPoint){}
}
class BindingChainException extends \System\Exception implements
	\System\Runtime\Serialization\ISerializable
{
	use BindingChainExceptionOverride;
	/**
	 * @field dublicate
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Expression;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $ExpressionErrorPoint;
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
	 * @uses BindingChainExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses BindingChainExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses BindingChainExceptionOverride::__construct_3 <br>public , args: ($message, $expression, $errorPoint)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}