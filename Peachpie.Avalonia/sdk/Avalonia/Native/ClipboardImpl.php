<?php
namespace Avalonia\Native;
/**
 */
class ClipboardImpl extends \System\Object implements 
	\Avalonia\Input\Platform\IClipboard,
	\System\IDisposable
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function ClearAsync(){}
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
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetFormats(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetFileNames(){}
	/**
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function GetFiles(){}
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
