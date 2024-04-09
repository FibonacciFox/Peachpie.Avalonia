<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NotFiniteNumberExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Double|double $offendingNumber
	 */
	#[MethodOverride]public function __construct_2 ($offendingNumber){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_3 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Double|double $offendingNumber
	 */
	#[MethodOverride]public function __construct_4 ($message, $offendingNumber){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_5 ($message, $innerException){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Double|double $offendingNumber
	 * @param \System\Exception $innerException
	 */
	#[MethodOverride]public function __construct_6 ($message, $offendingNumber, $innerException){}
}
class NotFiniteNumberException extends \System\ArithmeticException implements
	\System\Runtime\Serialization\ISerializable
{
	use NotFiniteNumberExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $OffendingNumber;
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
	 * @uses NotFiniteNumberExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses NotFiniteNumberExceptionOverride::__construct_2 <br>public , args: ($offendingNumber)<br>
	 * @uses NotFiniteNumberExceptionOverride::__construct_3 <br>public , args: ($message)<br>
	 * @uses NotFiniteNumberExceptionOverride::__construct_4 <br>public , args: ($message, $offendingNumber)<br>
	 * @uses NotFiniteNumberExceptionOverride::__construct_5 <br>public , args: ($message, $innerException)<br>
	 * @uses NotFiniteNumberExceptionOverride::__construct_6 <br>public , args: ($message, $offendingNumber, $innerException)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}