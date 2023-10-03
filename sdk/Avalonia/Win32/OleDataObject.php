<?php
namespace Avalonia\Win32;
/**
 */
class OleDataObject extends \System\Object implements 
	\Avalonia\Input\IDataObject,
	\System\IDisposable
{
	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Boolean
	 */
	public  function Contains($dataFormat){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetDataFormats(){}
	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Object|object
	 */
	public  function Get($dataFormat){}
	/**
	 * @param \System\String|string $format
	 * @param \System\Runtime\InteropServices\ComTypes\DVASPECT $aspect
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataFromOleHGLOBAL($format, $aspect){}
	/**
	 * @param \System\ReadOnlySpan_1 $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function IsSerializedObject($data){}
	/**
	 * @param \System\IntPtr $hGlobal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadFileNamesFromHGlobal($hGlobal){}
	/**
	 * @param \System\IntPtr $hGlobal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadStringFromHGlobal($hGlobal){}
	/**
	 * @param \System\IntPtr $hGlobal
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ReadBytesFromHGlobal($hGlobal){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetDataFormatsCore(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
