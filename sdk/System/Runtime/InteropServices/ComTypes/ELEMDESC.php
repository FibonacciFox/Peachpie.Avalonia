<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
class ELEMDESC extends \System\ValueType
{
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEDESC
	 * @field
	 */
	public $tdesc;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\ELEMDESC+DESCUNION
	 * @field
	 */
	public $desc;
}
