<?php
namespace Avalonia\Media\TextFormatting;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ShapedBufferMethodsOverride
{
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 */
class ShapedBuffer extends \System\Object implements 
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Length(){}
	/**
	 * @return \Avalonia\Media\IGlyphTypeface
	 */
	public  function get_GlyphTypeface(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_FontRenderingEmSize(){}
	/**
	 * @return \System\SByte
	 */
	public  function get_BidiLevel(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLeftToRight(){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	public  function get_Text(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Reverse(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Media\TextFormatting\GlyphInfo
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\Int32|int $index
	 * @param \Avalonia\Media\TextFormatting\GlyphInfo $value
	 * @return \System\Void|void
	 */
	public  function set_Item($index, $value){}
	/**
	 * @uses ShapedBufferMethodsOverride::GetEnumerator_1 ()
	 * @uses ShapedBufferMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @param \System\Int32|int $characterIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function FindGlyphIndex($characterIndex){}
	/**
	 * @param \System\Int32|int $length
	 * @return \Avalonia\Media\TextFormatting\SplitResult_1
	 */
	protected  function Split($length){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_Count(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
