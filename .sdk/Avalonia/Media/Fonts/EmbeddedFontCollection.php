<?php
namespace Avalonia\Media\Fonts;
class EmbeddedFontCollection extends \Avalonia\Media\Fonts\FontCollectionBase implements
	\Avalonia\Media\Fonts\IFontCollection,
	\System\Collections\Generic\IReadOnlyList_1,
	\System\Collections\Generic\IReadOnlyCollection_1,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\IDisposable
{
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
	 * @var \Avalonia\Media\FontFamily
	 * @since readonly
	 */
	public $Item;
	/**
	 * @property
	 * @var \System\Int32|int
	 * @since readonly
	 */
	public $Count;
	private function Dispose(){}
	/**
	 * @param \System\Uri $key
	 * @param \System\Uri $source
	 */
	public function __construct($key, $source){}
}