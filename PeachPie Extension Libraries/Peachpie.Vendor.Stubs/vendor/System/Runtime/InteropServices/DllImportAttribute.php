<?php
namespace System\Runtime\InteropServices;
final class DllImportAttribute extends \System\Attribute
{
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $EntryPoint;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\CharSet
	 */
	public $CharSet;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $SetLastError;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $ExactSpelling;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\CallingConvention
	 */
	public $CallingConvention;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $BestFitMapping;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $PreserveSig;
	/**
	 * @field
	 * @var \System\Boolean|bool
	 */
	public $ThrowOnUnmappableChar;
	/**
	 * @property
	 * @var \System\String|string
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
	 * @param \System\String|string $dllName
	 */
	public function __construct($dllName){}
}