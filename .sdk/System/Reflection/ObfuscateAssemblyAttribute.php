<?php
namespace System\Reflection;
final class ObfuscateAssemblyAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $AssemblyIsPrivate;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $StripAfterObfuscation;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $assemblyIsPrivate
	 */
	public function __construct($assemblyIsPrivate){}
}