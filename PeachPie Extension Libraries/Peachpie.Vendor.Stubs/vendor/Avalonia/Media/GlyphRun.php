<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait GlyphMetricsOverride {
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \System\ReadOnlyMemory_1 $characters [generic: System\Char]
	 * @param \System\Collections\Generic\IReadOnlyList_1 $glyphIndices [generic: System\UInt16]
	 * @param \System\Nullable_1 $baselineOrigin [generic: Avalonia\Point]
	 * @param \System\Int32|int $biDiLevel
	 */
	#[MethodOverride]public function __construct_1 ($glyphTypeface, $fontRenderingEmSize, $characters, $glyphIndices, $baselineOrigin, $biDiLevel){}
	/**
	 * @param \Avalonia\Media\IGlyphTypeface $glyphTypeface
	 * @param \System\Double|double $fontRenderingEmSize
	 * @param \System\ReadOnlyMemory_1 $characters [generic: System\Char]
	 * @param \System\Collections\Generic\IReadOnlyList_1 $glyphInfos [generic: Avalonia\Media\TextFormatting\GlyphInfo]
	 * @param \System\Nullable_1 $baselineOrigin [generic: Avalonia\Point]
	 * @param \System\Int32|int $biDiLevel
	 */
	#[MethodOverride]public function __construct_2 ($glyphTypeface, $fontRenderingEmSize, $characters, $glyphInfos, $baselineOrigin, $biDiLevel){}
}
final class GlyphRun extends \System\Object implements
	\System\IDisposable
{
	use GlyphMetricsOverride;
	/**
	 * @property
	 * @var \Avalonia\Media\IGlyphTypeface
	 * @since readonly
	 */
	public $GlyphTypeface;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $FontRenderingEmSize;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $Bounds;
	/**
	 * @property
	 * @var \Avalonia\Rect
	 * @since readonly
	 */
	public $InkBounds;
	/**
	 * @property
	 * @var \Avalonia\Media\GlyphRunMetrics
	 * @since readonly
	 */
	public $Metrics;
	/**
	 * @property
	 * @var \Avalonia\Point
	 */
	public $BaselineOrigin;
	/**
	 * @property
	 * @var \System\ReadOnlyMemory_1[System\Char]
	 */
	public $Characters;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\TextFormatting\GlyphInfo]
	 */
	public $GlyphInfos;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $BiDiLevel;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsLeftToRight;
	private static function CreateGlyphInfos($glyphIndices, $fontRenderingEmSize, $glyphTypeface){}
	private static function ListToSpan($list){}
	/**
	 * @return \Avalonia\Media\Geometry
	 */
	public function BuildGeometry(){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \System\Double|double
	 */
	public function GetDistanceFromCharacterHit($characterHit){}
	/**
	 * @param \System\Double|double $distance
	 * @param \System\Boolean& &$isInside
	 * @return \Avalonia\Media\CharacterHit
	 */
	public function GetCharacterHitFromDistance($distance, &$isInside){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	public function GetNextCaretCharacterHit($characterHit){}
	/**
	 * @param \Avalonia\Media\CharacterHit $characterHit
	 * @return \Avalonia\Media\CharacterHit
	 */
	public function GetPreviousCaretCharacterHit($characterHit){}
	/**
	 * @param \System\Int32|int $characterIndex
	 * @return \System\Int32|int
	 */
	public function FindGlyphIndex($characterIndex){}
	/**
	 * @param \System\Int32|int $index
	 * @param \System\Double& &$width
	 * @return \Avalonia\Media\CharacterHit
	 */
	public function FindNearestCharacterHit($index, &$width){}
	private function CreateGlyphRunMetrics(){}
	private function GetTrailingWhitespaceLength($isReversed, &$newLineLength, &$glyphCount){}
	private function GetTrailingWhitespaceLengthRightToLeft(&$newLineLength, &$glyphCount){}
	private function Set($field, $value){}
	private function CreateGlyphRunImpl(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \System\Single $lowerLimit
	 * @param \System\Single $upperLimit
	 * @return \System\Collections\Generic\IReadOnlyList_1[System\Single]
	 */
	public function GetIntersections($lowerLimit, $upperLimit){}
	/**
	 * @return \Avalonia\Media\IImmutableGlyphRunReference
	 */
	public function TryCreateImmutableGlyphRunReference(){}
	/**
	 * @uses GlyphRunOverride::__construct_1 <br>public , args: ($glyphTypeface, $fontRenderingEmSize, $characters, $glyphIndices, $baselineOrigin, $biDiLevel)<br>
	 * @uses GlyphRunOverride::__construct_2 <br>public , args: ($glyphTypeface, $fontRenderingEmSize, $characters, $glyphInfos, $baselineOrigin, $biDiLevel)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}