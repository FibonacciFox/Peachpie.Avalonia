<?php
namespace Avalonia\X11;
/**
 */
class X11Clipboard extends \System\Object implements 
	\Avalonia\Input\Platform\IClipboard
{
	/**
	 * @param \System\IntPtr $atom
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function IsStringAtom($atom){}
	/**
	 * @param \System\IntPtr $atom
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetStringEncoding($atom){}
	/**
	 * @param \Avalonia\X11\XEvent& $ev
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnEvent($ev){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendFormatRequest(){}
	/**
	 * @param \System\IntPtr $format
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SendDataRequest($format){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_HasOwner(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetTextAsync(){}
	/**
	 * @param \Avalonia\Input\IDataObject $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function ConvertDataObject($data){}
	/**
	 * @param \Avalonia\Input\IDataObject $data
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function StoreAtomsInClipboardManager($data){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Threading\Tasks\Task
	 */
	public  function SetTextAsync($text){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function ClearAsync(){}
	/**
	 * @param \Avalonia\Input\IDataObject $data
	 * @return \System\Threading\Tasks\Task
	 */
	public  function SetDataObjectAsync($data){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetFormatsAsync(){}
	/**
	 * @param \System\String|string $format
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetDataAsync($format){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
