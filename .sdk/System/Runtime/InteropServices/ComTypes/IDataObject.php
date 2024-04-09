<?php
namespace System\Runtime\InteropServices\ComTypes;
interface IDataObject
{

	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$format
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& &$medium
	 * @return \System\Void|void
	 */
	public function GetData(&$format, &$medium);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$format
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& $medium
	 * @return \System\Void|void
	 */
	public function GetDataHere(&$format, $medium);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$format
	 * @return \System\Int32|int
	 */
	public function QueryGetData(&$format);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$formatIn
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$formatOut
	 * @return \System\Int32|int
	 */
	public function GetCanonicalFormatEtc(&$formatIn, &$formatOut);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$formatIn
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& &$medium
	 * @param \System\Boolean|bool $release
	 * @return \System\Void|void
	 */
	public function SetData(&$formatIn, &$medium, $release);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\DATADIR $direction
	 * @return \System\Runtime\InteropServices\ComTypes\IEnumFORMATETC
	 */
	public function EnumFormatEtc($direction);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& &$pFormatetc
	 * @param \System\Runtime\InteropServices\ComTypes\ADVF $advf
	 * @param \System\Runtime\InteropServices\ComTypes\IAdviseSink $adviseSink
	 * @param \System\Int32& &$connection
	 * @return \System\Int32|int
	 */
	public function DAdvise(&$pFormatetc, $advf, $adviseSink, &$connection);
	/**
	 * @param \System\Int32|int $connection
	 * @return \System\Void|void
	 */
	public function DUnadvise($connection);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumSTATDATA& &$enumAdvise
	 * @return \System\Int32|int
	 */
	public function EnumDAdvise(&$enumAdvise);
}