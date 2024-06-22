<?php
namespace System\Runtime\InteropServices;
final class ComVisibleAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $visibility
	 */
	public function __construct($visibility){}
}