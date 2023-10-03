<?php
namespace Avalonia\Input\Platform;
/**
 */
interface IClipboard
{
	/**
	 */
	public function GetTextAsync();
	/**
	 * @param \System\String|string $text
	 */
	public function SetTextAsync($text);
	/**
	 */
	public function ClearAsync();
	/**
	 * @param \Avalonia\Input\IDataObject $data
	 */
	public function SetDataObjectAsync($data);
	/**
	 */
	public function GetFormatsAsync();
	/**
	 * @param \System\String|string $format
	 */
	public function GetDataAsync($format);
}
