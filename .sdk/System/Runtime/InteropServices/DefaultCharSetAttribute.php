<?php
namespace System\Runtime\InteropServices;
final class DefaultCharSetAttribute extends \System\Attribute
{

	/**
	 * @property
	 * @var \System\Runtime\InteropServices\CharSet
	 * @since readonly
	 */
	public $CharSet;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 * @param \System\Runtime\InteropServices\CharSet $charSet
	 */
	public function __construct($charSet){}
}