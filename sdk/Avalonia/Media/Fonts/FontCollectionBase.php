<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait FontCollectionBaseMethodsOverride
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
class FontCollectionBase extends \System\Object implements 
	\Avalonia\Media\Fonts\IFontCollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
	/**
	 * @var \System\Collections\Concurrent\ConcurrentDictionary_2[System\String,System\Collections\Concurrent\ConcurrentDictionary_2[Avalonia\Media\Fonts\FontCollectionKey,Avalonia\Media\IGlyphTypeface]]
	 * @field
	 */
	protected readonly $_glyphTypefaceCache;
	/**
	 * @var \System\Uri
	 * @property
	 */
	public readonly $Key;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @var \Avalonia\Media\FontFamily
	 * @property
	 */
	public readonly $Item;
	/**
	 * @return \System\Uri
	 */
	public  function get_Key(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_Count(){}
	/**
	 * @param \System\Int32|int $index
	 * @return \Avalonia\Media\FontFamily
	 */
	public  function get_Item($index){}
	/**
	 * @param \System\String|string $familyName
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 * @param \Avalonia\Media\IGlyphTypeface& $glyphTypeface
	 * @return \System\Boolean
	 */
	public  function TryGetGlyphTypeface($familyName, $style, $weight, $stretch, $glyphTypeface){}
	/**
	 * @param \System\Int32|int $codepoint
	 * @param \Avalonia\Media\FontStyle $style
	 * @param \Avalonia\Media\FontWeight $weight
	 * @param \Avalonia\Media\FontStretch $stretch
	 * @param \System\String|string $familyName
	 * @param \System\Globalization\CultureInfo $culture
	 * @param \Avalonia\Media\Typeface& $match
	 * @return \System\Boolean
	 */
	public  function TryMatchCharacter($codepoint, $style, $weight, $stretch, $familyName, $culture, $match){}
	/**
	 * @param \Avalonia\Platform\IFontManagerImpl $fontManager
	 * @return \System\Void|void
	 */
	public  function Initialize($fontManager){}
	/**
	 * @uses FontCollectionBaseMethodsOverride::GetEnumerator_1 ()
	 * @uses FontCollectionBaseMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Dispose(){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentDictionary_2 $glyphTypefaces
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $key
	 * @param \Avalonia\Media\IGlyphTypeface& $glyphTypeface
	 * @return \System\Boolean
	 */
	protected static function TryGetNearestMatch($glyphTypefaces, $key, $glyphTypeface){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentDictionary_2 $glyphTypefaces
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $key
	 * @param \Avalonia\Media\IGlyphTypeface& $glyphTypeface
	 * @return \System\Boolean
	 */
	protected static function TryFindStretchFallback($glyphTypefaces, $key, $glyphTypeface){}
	/**
	 * @param \System\Collections\Concurrent\ConcurrentDictionary_2 $glyphTypefaces
	 * @param \Avalonia\Media\Fonts\FontCollectionKey $key
	 * @param \Avalonia\Media\IGlyphTypeface& $glyphTypeface
	 * @return \System\Boolean
	 */
	protected static function TryFindWeightFallback($glyphTypefaces, $key, $glyphTypeface){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
