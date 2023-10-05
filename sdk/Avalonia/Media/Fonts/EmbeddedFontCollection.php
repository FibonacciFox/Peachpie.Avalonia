<?php
namespace Avalonia\Media\Fonts;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait EmbeddedFontCollectionMethodsOverride
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
class EmbeddedFontCollection extends \Avalonia\Media\Fonts\FontCollectionBase implements 
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
	 * @var \Avalonia\Media\FontFamily
	 * @property
	 */
	public readonly $Item;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $Count;
	/**
	 * @uses EmbeddedFontCollectionMethodsOverride::GetEnumerator_1 ()
	 * @uses EmbeddedFontCollectionMethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Dispose(){}
}
