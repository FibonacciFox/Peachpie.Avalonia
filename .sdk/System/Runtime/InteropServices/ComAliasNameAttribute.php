<?php
namespace System\Runtime\InteropServices;
final class ComAliasNameAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $alias
	 */
	public function __construct($alias){}
}