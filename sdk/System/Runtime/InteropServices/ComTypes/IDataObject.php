<?php
namespace System\Runtime\InteropServices\ComTypes;
/**
 */
interface IDataObject
{
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $format
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& $medium
	 */
	public function GetData($format, $medium);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $format
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& $medium
	 */
	public function GetDataHere($format, $medium);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $format
	 */
	public function QueryGetData($format);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $formatIn
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $formatOut
	 */
	public function GetCanonicalFormatEtc($formatIn, $formatOut);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $formatIn
	 * @param \System\Runtime\InteropServices\ComTypes\STGMEDIUM& $medium
	 * @param \System\Boolean $release
	 */
	public function SetData($formatIn, $medium, $release);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\DATADIR $direction
	 */
	public function EnumFormatEtc($direction);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\FORMATETC& $pFormatetc
	 * @param \System\Runtime\InteropServices\ComTypes\ADVF $advf
	 * @param \System\Runtime\InteropServices\ComTypes\IAdviseSink $adviseSink
	 * @param \System\Int32& $connection
	 */
	public function DAdvise($pFormatetc, $advf, $adviseSink, $connection);
	/**
	 * @param \System\Int32|int $connection
	 */
	public function DUnadvise($connection);
	/**
	 * @param \System\Runtime\InteropServices\ComTypes\IEnumSTATDATA& $enumAdvise
	 */
	public function EnumDAdvise($enumAdvise);
}
