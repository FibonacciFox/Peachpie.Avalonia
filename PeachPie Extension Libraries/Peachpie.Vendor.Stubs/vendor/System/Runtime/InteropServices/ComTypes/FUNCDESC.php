<?php
namespace System\Runtime\InteropServices\ComTypes;
final class FUNCDESC extends \System\ValueType
{
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $memid;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $lprgscode;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $lprgelemdescParam;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\FUNCKIND
	 */
	public $funckind;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\INVOKEKIND
	 */
	public $invkind;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\CALLCONV
	 */
	public $callconv;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cParams;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cParamsOpt;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $oVft;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cScodes;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\ELEMDESC
	 */
	public $elemdescFunc;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wFuncFlags;

}