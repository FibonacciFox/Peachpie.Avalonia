<?php
namespace System\Diagnostics\CodeAnalysis;
final class RequiresUnreferencedCodeAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Message;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Url;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $message
	 */
	public function __construct($message){}
}