<?php
namespace System\Runtime\InteropServices\ComTypes;
final class STGMEDIUM extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\TYMED
	 */
	public $tymed;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $unionmember;
	/**
	 * @field
	 * @var \System\Object|object
	 */
	public $pUnkForRelease;

}