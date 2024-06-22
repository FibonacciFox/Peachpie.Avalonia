<?php
namespace Avalonia\Input\Platform;
interface IClipboard
{


	/**
	 * @return \System\Threading\Tasks\Task_1[System\String]
	 */
	public function GetTextAsync();
	/**
	 * @param \System\String|string $text
	 * @return \System\Threading\Tasks\Task
	 */
	public function SetTextAsync($text);
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function ClearAsync();
	/**
	 * @param \Avalonia\Input\IDataObject $data
	 * @return \System\Threading\Tasks\Task
	 */
	public function SetDataObjectAsync($data);
	/**
	 * @return \System\Threading\Tasks\Task_1[System\String[]]
	 */
	public function GetFormatsAsync();
	/**
	 * @param \System\String|string $format
	 * @return \System\Threading\Tasks\Task_1[System\Object]
	 */
	public function GetDataAsync($format);
}