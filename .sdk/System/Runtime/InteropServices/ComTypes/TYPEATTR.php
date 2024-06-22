<?php
namespace System\Runtime\InteropServices\ComTypes;
final class TYPEATTR extends \System\ValueType
{

	/**
	 * @field
	 * @var \System\Guid
	 */
	public $guid;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $lcid;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $dwReserved;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $memidConstructor;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $memidDestructor;
	/**
	 * @field
	 * @var \System\IntPtr
	 */
	public $lpstrSchema;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	public $cbSizeInstance;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEKIND
	 */
	public $typekind;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cFuncs;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cVars;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cImplTypes;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cbSizeVft;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $cbAlignment;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEFLAGS
	 */
	public $wTypeFlags;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wMajorVerNum;
	/**
	 * @field
	 * @var \System\Int16
	 */
	public $wMinorVerNum;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\TYPEDESC
	 */
	public $tdescAlias;
	/**
	 * @field
	 * @var \System\Runtime\InteropServices\ComTypes\IDLDESC
	 */
	public $idldescType;
	/**
	 * @field
	 * @var \System\Int32|int
	 */
	const MEMBER_ID_NIL = '-1';

}