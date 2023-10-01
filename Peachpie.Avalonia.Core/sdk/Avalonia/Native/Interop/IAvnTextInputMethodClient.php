<?php
namespace Avalonia\Native\Interop;
/**
 */
interface IAvnTextInputMethodClient
{
	/**
	 * @param \System\String|string $preeditText
	 */
	public function SetPreeditText($preeditText);
	/**
	 * @param \System\Int32|int $start
	 * @param \System\Int32|int $length
	 */
	public function SelectInSurroundingText($start, $length);
}
