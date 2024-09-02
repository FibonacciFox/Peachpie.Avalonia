<?php
namespace System\Runtime\InteropServices\ComTypes;
final class VARDESC extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $memid;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $lpstrSchema;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\VARDESC+DESCUNION
	 */
	public $desc;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\ELEMDESC
	 */
	public $elemdescVar;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wVarFlags;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\VARKIND
	 */
	public $varkind;

}