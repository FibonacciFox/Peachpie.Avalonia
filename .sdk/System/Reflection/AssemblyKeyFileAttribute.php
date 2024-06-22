<?php
namespace System\Reflection;
final class AssemblyKeyFileAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $KeyFile;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $keyFile
	 */
	public function __construct($keyFile){}
}