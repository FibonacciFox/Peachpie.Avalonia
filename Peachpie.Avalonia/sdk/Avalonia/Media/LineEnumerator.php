<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait LineEnumeratorMethodsOverride
{
	/**
	 * @return \Avalonia\Media\TextFormatting\TextLine
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
}
/**
 */
class LineEnumerator extends \System\ValueType implements 
	\System\Collections\IEnumerator,
	\System\IDisposable
{
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Position(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Position($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @param \System\Int32|int $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Length($value){}
	/**
	 * @uses LineEnumeratorMethodsOverride::get_Current_1 ()
	 * @uses LineEnumeratorMethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @param \Avalonia\Media\TextFormatting\TextLine $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Current($value){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_CurrentParagraphWidth(){}
	/**
	 * @param \System\Int32|int $line
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function MaxLineLength($line){}
	/**
	 * @return \System\Boolean
	 */
	public  function MoveNext(){}
	/**
	 * @param \Avalonia\Media\TextFormatting\ITextSource $textSource
	 * @param \System\Int32|int $textSourcePosition
	 * @param \System\Double|double $maxLineLength
	 * @param \Avalonia\Media\TextFormatting\TextParagraphProperties $paraProps
	 * @param \Avalonia\Media\TextFormatting\TextLineBreak $lineBreak
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FormatLine($textSource, $textSourcePosition, $maxLineLength, $paraProps, $lineBreak){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reset(){}
}
