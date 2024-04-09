<?php
namespace Avalonia\Metadata;
final class InheritDataTypeFromItemsAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $AncestorItemsProperty;
	/**
	 * @property
	 * @var \System\Type
	 */
	public $AncestorType;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $ancestorItemsProperty
	 */
	public function __construct($ancestorItemsProperty){}
}