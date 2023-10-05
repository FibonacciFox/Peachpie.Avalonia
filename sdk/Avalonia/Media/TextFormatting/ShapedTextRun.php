<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class ShapedTextRun extends \Avalonia\Media\TextFormatting\DrawableTextRun implements 
	\System\IDisposable
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsReversed;
	/**
	 * @var \System\SByte
	 * @property
	 */
	public readonly $BidiLevel;
	/**
	 * @var \Avalonia\Media\TextFormatting\ShapedBuffer
	 * @property
	 */
	public readonly $ShapedBuffer;
	/**
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 * @property
	 */
	public readonly $Text;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextRunProperties
	 * @property
	 */
	public readonly $Properties;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Length;
	/**
	 * @var \Avalonia\Media\TextFormatting\TextMetrics
	 * @property
	 */
	public readonly $TextMetrics;
	/**
	 * @var \System\Double
	 * @property
	 */
	public readonly $Baseline;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public readonly $Size;
	/**
	 * @var \Avalonia\Media\GlyphRun
	 * @property
	 */
	public readonly $GlyphRun;
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsReversed(){}
	/**
	 * @param \System\Boolean $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_IsReversed($value){}
	/**
	 * @return \System\SByte
	 */
	public  function get_BidiLevel(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\ShapedBuffer
	 */
	public  function get_ShapedBuffer(){}
	/**
	 * @return \Avalonia\Media\TextFormatting\TextMetrics
	 */
	public  function get_TextMetrics(){}
	/**
	 * @return \Avalonia\Media\GlyphRun
	 */
	public  function get_GlyphRun(){}
	/**
	 * @return \System\Void|void
	 */
	protected  function Reverse(){}
	/**
	 * @param \System\Double|double $availableWidth
	 * @param \System\Int32& $length
	 * @return \System\Boolean
	 */
	protected  function TryMeasureCharacters($availableWidth, $length){}
	/**
	 * @param \System\Double|double $availableWidth
	 * @param \System\Int32& $length
	 * @param \System\Double& $width
	 * @return \System\Boolean
	 */
	protected  function TryMeasureCharactersBackwards($availableWidth, $length, $width){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Media\TextFormatting\SplitResult_1
	 */
	protected  function Split($length){}
	/**
	 * @return \Avalonia\Media\GlyphRun
	 */
	protected  function CreateGlyphRun(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
}
