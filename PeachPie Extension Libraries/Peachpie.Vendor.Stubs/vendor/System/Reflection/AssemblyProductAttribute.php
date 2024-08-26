<?php
namespace System\Reflection;
final class AssemblyProductAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Product;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $product
	 */
	public function __construct($product){}
}