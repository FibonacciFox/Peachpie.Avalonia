<?php
namespace Avalonia\Win32;
/**
 */
class ClipboardImpl extends \System\Object implements 
	\Avalonia\Input\Platform\IClipboard
{
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function OpenClipboard(){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	public  function GetTextAsync(){}
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
