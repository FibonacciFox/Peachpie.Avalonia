<?php
namespace System\Reflection;
final class AssemblyTitleAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Title;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $title
	 */
	public function __construct($title){}
}