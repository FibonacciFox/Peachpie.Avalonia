<?php
namespace Avalonia\Media\Fonts;
class FontFamilyKey extends \System\Object
{

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
	 * @param \Avalonia\Media\Fonts\FontFamilyKey $a
	 * @param \Avalonia\Media\Fonts\FontFamilyKey $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \Avalonia\Media\Fonts\FontFamilyKey $a
	 * @param \Avalonia\Media\Fonts\FontFamilyKey $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \System\Uri $source
	 * @param \System\Uri $baseUri
	 */
	public function __construct($source, $baseUri){}
}