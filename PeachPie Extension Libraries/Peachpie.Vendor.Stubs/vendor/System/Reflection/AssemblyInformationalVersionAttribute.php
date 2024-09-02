<?php
namespace System\Reflection;
final class AssemblyInformationalVersionAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $InformationalVersion;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $informationalVersion
	 */
	public function __construct($informationalVersion){}
}