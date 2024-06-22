<?php
namespace System\Runtime\CompilerServices;
final class TypeForwardedFromAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AssemblyFullName;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $assemblyFullName
	 */
	public function __construct($assemblyFullName){}
}