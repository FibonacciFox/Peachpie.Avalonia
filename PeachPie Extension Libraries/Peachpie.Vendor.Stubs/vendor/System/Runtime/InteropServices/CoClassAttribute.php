<?php
namespace System\Runtime\InteropServices;
final class CoClassAttribute extends \System\Attribute
{
	/**
	 * @property
	 * @var \System\Type
	 * @since readonly
	 */
	public $CoClass;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Type $coClass
	 */
	public function __construct($coClass){}
}