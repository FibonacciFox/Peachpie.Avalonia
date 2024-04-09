<?php
namespace System\Runtime\InteropServices\ComTypes;
final class DISPPARAMS extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $rgvarg;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $rgdispidNamedArgs;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $cArgs;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $cNamedArgs;

}