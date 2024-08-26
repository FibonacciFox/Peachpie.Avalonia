<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MissingFieldExceptionOverride {
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
	 * @param \System\String|string $className
	 * @param \System\String|string $fieldName
	 */
	#[MethodOverride]public function __construct_4 ($className, $fieldName){}
}
class MissingFieldException extends \System\MissingMemberException implements
	\System\Runtime\Serialization\ISerializable
{
	use MissingFieldExceptionOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $ClassName;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $MemberName;
	/**
	 * @field
	 * @var \System\Byte[]
	 */
	protected $Signature;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_message;
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
	 * @uses MissingFieldExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses MissingFieldExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses MissingFieldExceptionOverride::__construct_3 <br>public , args: ($message, $inner)<br>
	 * @uses MissingFieldExceptionOverride::__construct_4 <br>public , args: ($className, $fieldName)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}