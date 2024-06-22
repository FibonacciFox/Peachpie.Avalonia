<?php
namespace System\Runtime\InteropServices;
final class UnknownWrapper extends \System\Object
{

	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $WrappedObject;
	/**
	 * @param \System\Object|object $obj
	 */
	public function __construct($obj){}
}