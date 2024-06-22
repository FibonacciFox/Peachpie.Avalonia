<?php
namespace Avalonia\Media;
class CompositeFontFamilyKey extends \Avalonia\Media\Fonts\FontFamilyKey
{

	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Media\Fonts\FontFamilyKey]
	 * @since readonly
	 */
	public $Keys;
	/**
	 * @property
	 * @var \System\Uri
	 * @since readonly
	 */
	public $Source;
	/**
	 * @property
	 * @var \System\Uri
	 * @since readonly
	 */
	public $BaseUri;
	/**
	 * @param \System\Uri $source
	 * @param \Avalonia\Media\Fonts\FontFamilyKey $keys
	 */
	public function __construct($source, $keys){}
}