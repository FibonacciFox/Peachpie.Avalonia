<?php
namespace System\Reflection;
final class AssemblyKeyNameAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $KeyName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $keyName
	 */
	public function __construct($keyName){}
}