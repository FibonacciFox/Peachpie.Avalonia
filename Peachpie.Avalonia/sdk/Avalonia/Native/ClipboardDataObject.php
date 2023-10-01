<?php
namespace Avalonia\Native;
/**
 */
class ClipboardDataObject extends \System\Object implements 
	\Avalonia\Input\IDataObject,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Formats(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetDataFormats(){}
	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Boolean
	 */
	public  function Contains($dataFormat){}
	/**
	 * @param \System\String|string $dataFormat
	 * @return \System\Object|object
	 */
	public  function Get($dataFormat){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
