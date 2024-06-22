<?php
namespace Avalonia\Data\Core;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MarkupBindingChainExceptionOverride {
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_1 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $node
	 */
	#[MethodOverride]public function __construct_2 ($message, $node){}
	/**
	 * @param \System\String|string $message
	 * @param \System\String|string $expression
	 * @param \System\String|string $expressionNullPoint
	 */
	#[MethodOverride]public function __construct_3 ($message, $expression, $expressionNullPoint){}
}
class MarkupBindingChainException extends \Avalonia\Data\BindingChainException implements
	\System\Runtime\Serialization\ISerializable
{
	use MarkupBindingChainExceptionOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasNodes;
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
	 * @param \System\String|string $node
	 * @return \System\Void|void
	 */
	public function AddNode($node){}
	/**
	 * @param \System\String|string $expression
	 * @return \System\Void|void
	 */
	public function Commit($expression){}
	/**
	 * @uses MarkupBindingChainExceptionOverride::__construct_1 <br>public , args: ($message)<br>
	 * @uses MarkupBindingChainExceptionOverride::__construct_2 <br>public , args: ($message, $node)<br>
	 * @uses MarkupBindingChainExceptionOverride::__construct_3 <br>public , args: ($message, $expression, $expressionNullPoint)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}