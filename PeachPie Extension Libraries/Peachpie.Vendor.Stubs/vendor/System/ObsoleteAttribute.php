<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ObjectDisposedExceptionOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\String|string $message
	 */
	#[MethodOverride]public function __construct_2 ($message){}
	/**
	 * @param \System\String|string $message
	 * @param \System\Boolean|bool $error
	 */
	#[MethodOverride]public function __construct_3 ($message, $error){}
}
final class ObsoleteAttribute extends \System\Attribute
{
	use ObjectDisposedExceptionOverride;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsError;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DiagnosticId;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $UrlFormat;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @uses ObsoleteAttributeOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ObsoleteAttributeOverride::__construct_2 <br>public , args: ($message)<br>
	 * @uses ObsoleteAttributeOverride::__construct_3 <br>public , args: ($message, $error)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}