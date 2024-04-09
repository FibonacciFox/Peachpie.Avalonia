<?php
namespace System\Runtime\CompilerServices;
final class TypeDependencyAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $typeName
	 */
	public function __construct($typeName){}
}