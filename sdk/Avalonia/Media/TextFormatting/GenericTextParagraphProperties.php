<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class GenericTextParagraphProperties extends \Avalonia\Media\TextFormatting\TextParagraphProperties
{
	/**
	 * @var \Avalonia\Media\FlowDirection
	 * @property
	 */
	public readonly $FlowDirection;
	/**
	 * @var \Avalonia\Media\TextAlignment
	 * @property
	 */
	public readonly $TextAlignment;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LineHeight;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $FirstLineInParagraph;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $AlwaysCollapsible;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @property
	 */
	public readonly $DefaultTextRunProperties;
	/**
	 * @var \Avalonia\Media\TextWrapping
	 * @property
	 */
	public readonly $TextWrapping;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Indent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $LetterSpacing;
	/**
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @property
	 */
	public readonly $TextDecorations;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $ParagraphIndent;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $DefaultIncrementalTab;
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
