<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
interface ITextSource
{
	/**
	 * @param \System\Int32|int $textSourceIndex
	 */
	public function GetTextRun($textSourceIndex);
}
