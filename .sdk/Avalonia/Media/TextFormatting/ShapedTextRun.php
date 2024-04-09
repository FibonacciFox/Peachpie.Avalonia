<?php
namespace Avalonia\Media\TextFormatting;
final class ShapedTextRun extends \Avalonia\Media\TextFormatting\DrawableTextRun implements
	\System\IDisposable
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsReversed;
	/**
	 * @property
	 * @var \System\SByte
	 * @since readonly
	 */
	public $BidiLevel;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\ShapedBuffer
	 * @since readonly
	 */
	public $ShapedBuffer;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @since readonly
	 */
	public $Text;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @since readonly
	 */
	public $Properties;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Length;
	/**
	 * @property
	 * @var \Avalonia\Media\TextFormatting\TextMetrics
	 * @since readonly
	 */
	public $TextMetrics;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Baseline;
	/**
	 * @property
	 * @var \Avalonia\Size
	 * @since readonly
	 */
	public $Size;
	/**
	 * @property
	 * @var \Avalonia\Media\GlyphRun
	 * @since readonly
	 */
	public $GlyphRun;
	/**
	 * @return \System\Void|void
	 */
	protected function Reverse(){}
	/**
	 * @param \System\Double|double $availableWidth
	 * @param \System\Int32& &$length
	 * @return \System\Boolean|bool
	 */
	protected function TryMeasureCharacters($availableWidth, &$length){}
	/**
	 * @param \System\Double|double $availableWidth
	 * @param \System\Int32& &$length
	 * @param \System\Double& &$width
	 * @return \System\Boolean|bool
	 */
	protected function TryMeasureCharactersBackwards($availableWidth, &$length, &$width){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Media\TextFormatting\SplitResult_1[Avalonia\Media\TextFormatting\ShapedTextRun]
	 */
	protected function Split($length){}
	/**
	 * @return \Avalonia\Media\GlyphRun
	 */
	protected function CreateGlyphRun(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ShapedBuffer $shapedBuffer
	 * @param \Avalonia\Media\TextFormatting\TextRunProperties $properties
	 */
	public function __construct($shapedBuffer, $properties){}
}