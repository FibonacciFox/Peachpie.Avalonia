<?php
namespace System\Runtime\InteropServices;
final class UnmanagedCallersOnlyAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @var \System\Type[]
	 */
	public $CallConvs;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $EntryPoint;
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