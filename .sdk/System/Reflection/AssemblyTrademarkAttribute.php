<?php
namespace System\Reflection;
final class AssemblyTrademarkAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Trademark;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\String|string $trademark
	 */
	public function __construct($trademark){}
}