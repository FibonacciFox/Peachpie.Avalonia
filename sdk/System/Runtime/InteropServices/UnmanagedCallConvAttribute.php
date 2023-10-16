<?php
namespace System\Runtime\InteropServices;
/**
 */
class UnmanagedCallConvAttribute extends \System\Attribute
{
	/**
	 * @var \System\Type[]
	 * @field
	 */
	public $CallConvs;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $TypeId;
}
