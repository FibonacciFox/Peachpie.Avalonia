<?php
namespace System\Reflection;
final class AssemblyConfigurationAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Configuration;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $configuration
	 */
	public function __construct($configuration){}
}