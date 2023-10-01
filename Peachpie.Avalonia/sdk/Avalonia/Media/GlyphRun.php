<?php
namespace Avalonia\Media;
/**
 */
class GlyphRun extends \System\Object implements 
	\System\IDisposable
{
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $glyphIndices
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function CreateGlyphInfos($glyphIndices, $fontRenderingEmSize, $glyphTypeface){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $list
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ListToSpan($list){}
	/**
	 * @return \Avalonia\Media\IGlyphTypeface
	 */
	public  function get_GlyphTypeface(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_FontRenderingEmSize(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_FontRenderingEmSize($value){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_Bounds(){}
	/**
	 * @return \Avalonia\Rect
	 */
	public  function get_InkBounds(){}
	/**
	 * @return \Avalonia\Media\GlyphRunMetrics
	 */
	public  function get_Metrics(){}
	/**
	 * @return \Avalonia\Point
	 */
	public  function get_BaselineOrigin(){}
	/**
	 * @param \Avalonia\Point $value
	 * @return \System\Void|void
	 */
	public  function set_BaselineOrigin($value){}
	/**
	 * @return \System\ReadOnlyMemory_1
	 */
	public  function get_Characters(){}
	/**
	 * @param \System\ReadOnlyMemory_1 $value
	 * @return \System\Void|void
	 */
	public  function set_Characters($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_GlyphInfos(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_GlyphInfos($value){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_BiDiLevel(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_BiDiLevel($value){}
	/**
	 * @return \System\Double|double
	 */
	protected  function get_Scale(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsLeftToRight(){}
	/**
	 * @return \Avalonia\Utilities\IRef_1
	 */
	protected  function get_PlatformImpl(){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public  function BuildGeometry(){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \System\Double|double
	 */
	public  function GetDistanceFromCharacterHit($characterHit){}
	/**
	 * @param \System\Double|double $distance
	 * @param \System\Boolean& $isInside
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetCharacterHitFromDistance($distance, $isInside){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetNextCaretCharacterHit($characterHit){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function GetPreviousCaretCharacterHit($characterHit){}
	/**
	 * @param \System\Int32|int $characterIndex
	 * @return \System\Int32|int
	 */
	public  function FindGlyphIndex($characterIndex){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Double& $width
	 * @return \Avalonia\Media\CharacterHit
	 */
	public  function FindNearestCharacterHit($index, $width){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateGlyphRunMetrics(){}
	/**
	 * @param \System\Boolean $isReversed
	 * @param \System\Int32& $newLineLength
	 * @param \System\Int32& $glyphCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTrailingWhitespaceLength($isReversed, $newLineLength, $glyphCount){}
	/**
	 * @param \System\Int32& $newLineLength
	 * @param \System\Int32& $glyphCount
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetTrailingWhitespaceLengthRightToLeft($newLineLength, $glyphCount){}
	/**
	 * @param \Avalonia\Media\T& $field
	 * @param \Avalonia\Media\T $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Set($field, $value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateGlyphRunImpl(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Single $lowerLimit
	 * @param \System\Single $upperLimit
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function GetIntersections($lowerLimit, $upperLimit){}
	/**
	 * @return \Avalonia\Media\IImmutableGlyphRunReference
	 */
	public  function TryCreateImmutableGlyphRunReference(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
