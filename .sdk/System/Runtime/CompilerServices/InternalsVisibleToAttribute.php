<?php
namespace System\Runtime\CompilerServices;
final class InternalsVisibleToAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AssemblyName;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllInternalsVisible;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $assemblyName
	 */
	public function __construct($assemblyName){}
}