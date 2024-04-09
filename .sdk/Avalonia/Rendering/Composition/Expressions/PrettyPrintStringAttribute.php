<?php
namespace Avalonia\Rendering\Composition\Expressions;
final class PrettyPrintStringAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $name
	 */
	public function __construct($name){}
}