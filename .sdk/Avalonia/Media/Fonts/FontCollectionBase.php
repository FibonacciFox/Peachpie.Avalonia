<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FontCollectionBaseOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
class FontCollectionBase extends \System\Object implements
	\Avalonia\Media\Fonts\IFontCollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	use FontCollectionBaseOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \System\Collections\Concurrent\ConcurrentDictionary_2[System\String,System\Collections\Concurrent\ConcurrentDictionary_2[Avalonia\Media\Fonts\FontCollectionKey,Avalonia\Media\IGlyphTypeface]]
	 */
	protected $_glyphTypefaceCache;
	/**
	 * @property
	 * @var \System\Uri
	 * @since readonly
	 */
	public $Key;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	/**
	 * @property
	 * @var \Avalonia\Media\FontFamily
	 * @since readonly
	 */
	public $Item;
	/**
	 * @param \System\String|string $familyName
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 * @param \Avalonia\Media\IGlyphTypeface& &$glyphTypeface
	 * @return \System\Boolean|bool
	 */
	abstract public function TryGetGlyphTypeface($familyName, $style, $weight, $stretch, &$glyphTypeface);
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 * @param \System\String|string $familyName
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& &$match
	 * @return \System\Boolean|bool
	 */
	public function TryMatchCharacter($codepoint, $style, $weight, $stretch, $familyName, $culture, &$match){}
	/**
	 * @param \Avalonia\Platform\IFontManagerImpl $fontManager
	 * @return \System\Void|void
	 */
	abstract public function Initialize($fontManager);
	/**
	 * @uses FontCollectionBaseOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses FontCollectionBaseOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	private function Dispose(){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentDictionary_2 $glyphTypefaces [generic: Avalonia\Media\Fonts\FontCollectionKey,Avalonia\Media\IGlyphTypeface]
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $key
	 * @param \Avalonia\Media\IGlyphTypeface& &$glyphTypeface
	 * @return \System\Boolean|bool
	 */
	protected static function TryGetNearestMatch($glyphTypefaces, $key, &$glyphTypeface){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentDictionary_2 $glyphTypefaces [generic: Avalonia\Media\Fonts\FontCollectionKey,Avalonia\Media\IGlyphTypeface]
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $key
	 * @param \Avalonia\Media\IGlyphTypeface& &$glyphTypeface
	 * @return \System\Boolean|bool
	 */
	protected static function TryFindStretchFallback($glyphTypefaces, $key, &$glyphTypeface){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentDictionary_2 $glyphTypefaces [generic: Avalonia\Media\Fonts\FontCollectionKey,Avalonia\Media\IGlyphTypeface]
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $key
	 * @param \Avalonia\Media\IGlyphTypeface& &$glyphTypeface
	 * @return \System\Boolean|bool
	 */
	protected static function TryFindWeightFallback($glyphTypefaces, $key, &$glyphTypeface){}
}