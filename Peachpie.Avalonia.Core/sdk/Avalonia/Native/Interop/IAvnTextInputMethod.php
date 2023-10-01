<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnTextInputMethod
{
	/**
	 * @param \Avalonia\Native\Interop\IAvnTextInputMethodClient $client
	 */
	public function SetClient($client);
	/**
	 */
	public function Reset();
	/**
	 * @param \Avalonia\Native\Interop\AvnRect $rect
	 */
	public function SetCursorRect($rect);
	/**
	 * @param \System\String|string $text
	 * @param \System\Int32|int $anchorOffset
	 * @param \System\Int32|int $cursorOffset
	 */
	public function SetSurroundingText($text, $anchorOffset, $cursorOffset);
}
