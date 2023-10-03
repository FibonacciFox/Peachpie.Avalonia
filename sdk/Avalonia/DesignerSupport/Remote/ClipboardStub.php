<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class ClipboardStub extends \System\Object implements 
	\Avalonia\Input\Platform\IClipboard
{
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
