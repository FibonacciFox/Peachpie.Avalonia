<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnClipboard
{
	/**
	 * @param \System\String|string $type
	 */
	public function GetText($type);
	/**
	 * @param \System\String|string $type
	 * @param \System\String|string $utf8Text
	 */
	public function SetText($type, $utf8Text);
	/**
	 */
	public function ObtainFormats();
	/**
	 * @param \System\String|string $type
	 */
	public function GetStrings($type);
	/**
	 * @param \System\String|string $type
	 * @param \System\Void* $utf8Text
	 * @param \System\Int32|int $len
	 */
	public function SetBytes($type, $utf8Text, $len);
	/**
	 * @param \System\String|string $type
	 */
	public function GetBytes($type);
	/**
	 */
	public function Clear();
}
