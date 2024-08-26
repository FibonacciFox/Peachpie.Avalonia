<?php
namespace System\Runtime\InteropServices;
final class BestFitMappingAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $ThrowOnUnmappableChar;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $BestFitMapping;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $BestFitMapping
	 */
	public function __construct($BestFitMapping){}
}