<?php
namespace System\Reflection;
final class ObfuscationAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $StripAfterObfuscation;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Exclude;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $ApplyToMembers;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Feature;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}