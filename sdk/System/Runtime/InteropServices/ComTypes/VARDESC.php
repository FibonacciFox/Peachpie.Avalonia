<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
class VARDESC extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $memid;
	/**
	 * @var \System\String
	 * @field
	 */
	public $lpstrSchema;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\VARDESC+DESCUNION
	 * @field
	 */
	public $desc;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\ELEMDESC
	 * @field
	 */
	public $elemdescVar;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wVarFlags;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\VARKIND
	 * @field
	 */
	public $varkind;
}
