<?php
namespace System;
final class CLSCompliantAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsCompliant;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Boolean|bool $isCompliant
	 */
	public function __construct($isCompliant){}
}