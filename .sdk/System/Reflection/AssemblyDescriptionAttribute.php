<?php
namespace System\Reflection;
final class AssemblyDescriptionAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Description;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $description
	 */
	public function __construct($description){}
}