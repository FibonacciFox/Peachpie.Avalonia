<?php
namespace System\Runtime\InteropServices\ComTypes;
final class ELEMDESC extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEDESC
	 */
	public $tdesc;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\ELEMDESC+DESCUNION
	 */
	public $desc;

}