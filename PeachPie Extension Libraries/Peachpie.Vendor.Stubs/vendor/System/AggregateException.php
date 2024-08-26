<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait AggregateExceptionOverride {
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
	 * @param \System\Collections\Generic\IEnumerable_1 $innerExceptions [generic: System\Exception]
	 */
	#[MethodOverride]public function __construct_4 ($innerExceptions){}
	/**
	 * @param \System\Exception ...$innerExceptions
	 */
	#[MethodOverride]public function __construct_5 (...$innerExceptions){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Collections\Generic\IEnumerable_1 $innerExceptions [generic: System\Exception]
	 */
	#[MethodOverride]public function __construct_6 ($message, $innerExceptions){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception ...$innerExceptions
	 */
	#[MethodOverride]public function __construct_7 ($message, ...$innerExceptions){}
}
class AggregateException extends \System\Exception implements
	\System\Runtime\Serialization\ISerializable
{
	use AggregateExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Collections\ObjectModel\ReadOnlyCollection_1[System\Exception]
	 * @since readonly
	 */
	public $InnerExceptions;
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
	 * @param \System\Func_2 $predicate [generic: System\Exception,System\Boolean]
	 * @return \System\Void|void
	 */
	public function Handle($predicate){}
	/**
	 * @return \System\AggregateException
	 */
	public function Flatten(){}
	/**
	 * @uses AggregateExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses AggregateExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses AggregateExceptionOverride::__construct_3 <br>public , args: ($message, $innerException)<br>
	 * @uses AggregateExceptionOverride::__construct_4 <br>public , args: ($innerExceptions)<br>
	 * @uses AggregateExceptionOverride::__construct_5 <br>public , args: (...$innerExceptions)<br>
	 * @uses AggregateExceptionOverride::__construct_6 <br>public , args: ($message, $innerExceptions)<br>
	 * @uses AggregateExceptionOverride::__construct_7 <br>public , args: ($message, ...$innerExceptions)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}