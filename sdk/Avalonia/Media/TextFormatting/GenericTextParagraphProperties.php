<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class GenericTextParagraphProperties extends \Avalonia\Media\TextFormatting\TextParagraphProperties
{
	/**
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @return \System\Void|void
	 */
	protected  function SetFlowDirection($flowDirection){}
	/**
	 * @param \Avalonia\Media\TextAlignment $textAlignment
	 * @return \System\Void|void
	 */
	protected  function SetTextAlignment($textAlignment){}
	/**
	 * @param \System\Double|double $lineHeight
	 * @return \System\Void|void
	 */
	protected  function SetLineHeight($lineHeight){}
	/**
	 * @param \Avalonia\Media\TextWrapping $textWrap
	 * @return \System\Void|void
	 */
	protected  function SetTextWrapping($textWrap){}
}
