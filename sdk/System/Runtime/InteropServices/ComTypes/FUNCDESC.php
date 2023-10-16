<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
class FUNCDESC extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $memid;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $lprgscode;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $lprgelemdescParam;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\FUNCKIND
	 * @field
	 */
	public $funckind;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\INVOKEKIND
	 * @field
	 */
	public $invkind;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\CALLCONV
	 * @field
	 */
	public $callconv;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cParams;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cParamsOpt;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $oVft;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cScodes;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\ELEMDESC
	 * @field
	 */
	public $elemdescFunc;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wFuncFlags;
}
