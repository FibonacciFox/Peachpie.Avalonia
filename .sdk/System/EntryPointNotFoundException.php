<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait EntryPointNotFoundExceptionOverride {
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
}
class EntryPointNotFoundException extends \System\TypeLoadException implements
	\System\Runtime\Serialization\ISerializable
{
	use EntryPointNotFoundExceptionOverride;
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
	 * @var \System\String|string
	 * @since readonly
	 */
	public $TypeName;
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
	 * @uses EntryPointNotFoundExceptionOverride::__construct_1 <br>public , args: ()<br>
	 * @uses EntryPointNotFoundExceptionOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses EntryPointNotFoundExceptionOverride::__construct_3 <br>public , args: ($message, $inner)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}