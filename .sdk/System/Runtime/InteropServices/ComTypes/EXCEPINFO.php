<?php
namespace System\Runtime\InteropServices\ComTypes;
final class EXCEPINFO extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wCode;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wReserved;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $bstrSource;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $bstrDescription;
	/**
	 * @field
	 * @var \System\String|string
	 */
	public $bstrHelpFile;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $dwHelpContext;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $pvReserved;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $pfnDeferredFillIn;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $scode;

}