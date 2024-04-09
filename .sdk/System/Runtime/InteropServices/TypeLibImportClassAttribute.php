<?php
namespace System\Runtime\InteropServices;
final class TypeLibImportClassAttribute extends \System\Attribute
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
	 * @param \System\Type $importClass
	 */
	public function __construct($importClass){}
}