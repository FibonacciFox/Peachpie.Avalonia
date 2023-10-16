<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
class EXCEPINFO extends \System\ValueType
{
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wCode;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wReserved;
	/**
	 * @var \System\String
	 * @field
	 */
	public $bstrSource;
	/**
	 * @var \System\String
	 * @field
	 */
	public $bstrDescription;
	/**
	 * @var \System\String
	 * @field
	 */
	public $bstrHelpFile;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwHelpContext;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $pvReserved;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $pfnDeferredFillIn;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $scode;
}
