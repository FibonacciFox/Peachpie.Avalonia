<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IDataObject
{
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetcIn
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 */
	public function GetData($pformatetcIn, $pmedium);
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 */
	public function GetDataHere($pformatetc, $pmedium);
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 */
	public function QueryGetData($pformatetc);
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatectIn
	 */
	public function GetCanonicalFormatEtc($pformatectIn);
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @param \System\Int32|int $fRelease
	 */
	public function SetData($pformatetc, $pmedium, $fRelease);
	/**
	 * @param \System\Int32|int $dwDirection
	 */
	public function EnumFormatEtc($dwDirection);
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \System\Int32|int $advf
	 * @param \System\Void* $pAdvSink
	 */
	public function DAdvise($pformatetc, $advf, $pAdvSink);
	/**
	 * @param \System\Int32|int $dwConnection
	 */
	public function DUnadvise($dwConnection);
	/**
	 */
	public function EnumDAdvise();
}
