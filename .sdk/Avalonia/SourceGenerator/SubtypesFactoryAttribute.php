<?php
namespace Avalonia\SourceGenerator;
final class SubtypesFactoryAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Namespace;
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $BaseType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $baseType
	 * @param \System\String|string $namespace
	 */
	public function __construct($baseType, $namespace){}
}