<?php
namespace System\Runtime\InteropServices;
/**
 */
class UnmanagedCallersOnlyAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type[]
	 * @field
	 */
	public $CallConvs;
	/**
	 * @var \System\String
	 * @field
	 */
	public $EntryPoint;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
}
