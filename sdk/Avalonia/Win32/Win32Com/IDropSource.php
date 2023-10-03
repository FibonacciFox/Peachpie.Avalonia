<?php
namespace Avalonia\Win32\Win32Com;
/**
 */
interface IDropSource
{
	/**
	 * @param \System\Int32|int $fEscapePressed
	 * @param \System\Int32|int $grfKeyState
	 */
	public function QueryContinueDrag($fEscapePressed, $grfKeyState);
	/**
	 * @param \Avalonia\Win32\Win32Com\DropEffect $dwEffect
	 */
	public function GiveFeedback($dwEffect);
}
