<?php
namespace Avalonia\Media\TextFormatting;
/**
 */
class ShapedTextRun extends \Avalonia\Media\TextFormatting\DrawableTextRun implements 
	\System\IDisposable
{
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
