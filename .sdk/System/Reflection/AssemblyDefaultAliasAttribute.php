<?php
namespace System\Reflection;
final class AssemblyDefaultAliasAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $DefaultAlias;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $defaultAlias
	 */
	public function __construct($defaultAlias){}
}