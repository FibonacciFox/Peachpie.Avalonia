<?php
namespace System\Runtime\InteropServices;
final class UnmanagedCallConvAttribute extends \System\Attribute
{

	/**
	 * @field
	 * @var \System\Type[]
	 */
	public $CallConvs;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $TypeId;
	/**
	 */
	public function __construct(){}
}