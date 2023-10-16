<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
class TYPEATTR extends \System\ValueType
{
	/**
	 * @var \System\Guid
	 * @field
	 */
	public $guid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $lcid;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $dwReserved;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $memidConstructor;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $memidDestructor;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	public $lpstrSchema;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $cbSizeInstance;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEKIND
	 * @field
	 */
	public $typekind;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cFuncs;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cVars;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cImplTypes;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cbSizeVft;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $cbAlignment;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEFLAGS
	 * @field
	 */
	public $wTypeFlags;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wMajorVerNum;
	/**
	 * @var \System\Int16
	 * @field
	 */
	public $wMinorVerNum;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEDESC
	 * @field
	 */
	public $tdescAlias;
	/**
	 * @var \System\Runtime\InteropServices\ComTypes\IDLDESC
	 * @field
	 */
	public $idldescType;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $MEMBER_ID_NIL;
}
