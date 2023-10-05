<?php
namespace Avalonia\Win32;
/**
 */
class DataObject extends \Avalonia\MicroCom\CallbackBase implements 
	\MicroCom\Runtime\IUnknown,
	\System\IDisposable,
	\MicroCom\Runtime\IMicroComShadowContainer,
	\Avalonia\Input\IDataObject,
	\Avalonia\Win32\Win32Com\IDataObject
{
	/**
	 * @var \System\Byte[]
	 * @field
	 */
	protected readonly $SerializedObjectGUID;
	/**
	 * @var \Avalonia\Input\IDataObject
	 * @property
	 */
	public readonly $Wrapped;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsDestroyed;
	/**
	 * @var \MicroCom\Runtime\MicroComShadow
	 * @property
	 */
	public $Shadow;
	/**
	 * @return \Avalonia\Input\IDataObject
	 */
	public  function get_Wrapped(){}
	/**
	 * @param \System\String|string $dataFormat
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Contains($dataFormat){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataFormats(){}
	/**
	 * @param \System\String|string $dataFormat
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Get($dataFormat){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pFormatetc
	 * @param \System\Int32|int $advf
	 * @param \System\Void* $adviseSink
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DAdvise($pFormatetc, $advf, $adviseSink){}
	/**
	 * @param \System\Int32|int $connection
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DUnadvise($connection){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnumDAdvise(){}
	/**
	 * @param \System\Int32|int $direction
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function EnumFormatEtc($direction){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $formatIn
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetCanonicalFormatEtc($formatIn){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $format
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $medium
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetData($format, $medium){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $format
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $medium
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataHere($format, $medium){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function QueryGetData($format){}
	/**
	 * @param \Avalonia\Win32\Interop\FORMATETC* $pformatetc
	 * @param \Avalonia\Win32\Interop\STGMEDIUM* $pmedium
	 * @param \System\Int32|int $fRelease
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SetData($pformatetc, $pmedium, $fRelease){}
	/**
	 * @param \System\String|string $dataFormat
	 * @param \System\IntPtr& $hGlobal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function WriteDataToHGlobal($dataFormat, $hGlobal){}
	/**
	 * @param \System\Object|object $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function SerializeObject($data){}
	/**
	 * @param \System\IntPtr& $hGlobal
	 * @param \System\ReadOnlySpan_1 $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteBytesToHGlobal($hGlobal, $data){}
	/**
	 * @param \System\IntPtr& $hGlobal
	 * @param \System\Collections\Generic\IEnumerable_1 $files
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteFileListToHGlobal($hGlobal, $files){}
	/**
	 * @param \System\IntPtr& $hGlobal
	 * @param \System\String|string $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function WriteStringToHGlobal($hGlobal, $data){}
	/**
	 * @return \System\Void|void
	 */
	public  function ReleaseWrapped(){}
}
