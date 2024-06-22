<?php
namespace Avalonia\Metadata;
final class DependsOnAttribute extends \System\Attribute
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
	 * @param \System\String|string $propertyName
	 */
	public function __construct($propertyName){}
}