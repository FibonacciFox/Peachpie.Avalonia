<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FormattingBufferHelperOverride {
	/**
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $defaultTextRunProperties
	 * @param \Avalonia\Media\TextAlignment $textAlignment
	 * @param \Avalonia\Media\TextWrapping $textWrap
	 * @param \System\Double|double $lineHeight
	 * @param \System\Double|double $letterSpacing
	 */
	#[MethodOverride]public function __construct_1 ($defaultTextRunProperties, $textAlignment, $textWrap, $lineHeight, $letterSpacing){}
	/**
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @param \Avalonia\Media\TextAlignment $textAlignment
	 * @param \System\Boolean|bool $firstLineInParagraph
	 * @param \System\Boolean|bool $alwaysCollapsible
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $defaultTextRunProperties
	 * @param \Avalonia\Media\TextWrapping $textWrap
	 * @param \System\Double|double $lineHeight
	 * @param \System\Double|double $indent
	 * @param \System\Double|double $letterSpacing
	 */
	#[MethodOverride]public function __construct_2 ($flowDirection, $textAlignment, $firstLineInParagraph, $alwaysCollapsible, $defaultTextRunProperties, $textWrap, $lineHeight, $indent, $letterSpacing){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $textParagraphProperties
	 */
	#[MethodOverride]public function __construct_3 ($textParagraphProperties){}
}
final class GenericTextParagraphProperties extends \Avalonia\Media\TextFormatting\TextParagraphProperties
{
	use FormattingBufferHelperOverride;

	/**
	 * @property
	 * @var \Avalonia\Media\FlowDirection
	 * @since readonly
	 */
	public $FlowDirection;
	/**
	 * @property
	 * @var \Avalonia\Media\TextAlignment
	 * @since readonly
	 */
	public $TextAlignment;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LineHeight;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $FirstLineInParagraph;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $AlwaysCollapsible;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @since readonly
	 */
	public $DefaultTextRunProperties;
	/**
	 * @property
	 * @var \Avalonia\Media\TextWrapping
	 * @since readonly
	 */
	public $TextWrapping;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Indent;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LetterSpacing;
	/**
	 * @property
	 * @var \Avalonia\Media\TextDecorationCollection
	 * @since readonly
	 */
	public $TextDecorations;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $ParagraphIndent;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $DefaultIncrementalTab;
	/**
	 * @param \Avalonia\Media\FlowDirection $flowDirection
	 * @return \System\Void|void
	 */
	protected function SetFlowDirection($flowDirection){}
	/**
	 * @param \Avalonia\Media\TextAlignment $textAlignment
	 * @return \System\Void|void
	 */
	protected function SetTextAlignment($textAlignment){}
	/**
	 * @param \System\Double|double $lineHeight
	 * @return \System\Void|void
	 */
	protected function SetLineHeight($lineHeight){}
	/**
	 * @param \Avalonia\Media\TextWrapping $textWrap
	 * @return \System\Void|void
	 */
	protected function SetTextWrapping($textWrap){}
	/**
	 * @uses GenericTextParagraphPropertiesOverride::__construct_1 <br>public , args: ($defaultTextRunProperties, $textAlignment, $textWrap, $lineHeight, $letterSpacing)<br>
	 * @uses GenericTextParagraphPropertiesOverride::__construct_2 <br>public , args: ($flowDirection, $textAlignment, $firstLineInParagraph, $alwaysCollapsible, $defaultTextRunProperties, $textWrap, $lineHeight, $indent, $letterSpacing)<br>
	 * @uses GenericTextParagraphPropertiesOverride::__construct_3 <br>public , args: ($textParagraphProperties)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}