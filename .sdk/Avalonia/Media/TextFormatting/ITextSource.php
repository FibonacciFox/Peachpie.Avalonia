<?php
namespace Avalonia\Media\TextFormatting;
interface ITextSource
{


	/**
	 * @param \System\Int32|int $textSourceIndex
	 * @return \Avalonia\Media\TextFormatting\TextRun
	 */
	public function GetTextRun($textSourceIndex);
}