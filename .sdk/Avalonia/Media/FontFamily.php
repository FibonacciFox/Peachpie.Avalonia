<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait FontFamilyOverride {
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\FontFamily
	 */
	#[MethodOverride]public static function Parse_1 ($s){}
	/**
	 * @deprecated
	 * @param \System\String|string $s
	 * @param \System\Uri $baseUri
	 * @return \Avalonia\Media\FontFamily
	 */
	#[MethodOverride]public static function Parse_2 ($s, $baseUri){}
	/**
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_1 ($name){}
	/**
	 * @param \System\Uri $baseUri
	 * @param \System\String|string $name
	 */
	#[MethodOverride]public function __construct_2 ($baseUri, $name){}
}
final class FontFamily extends \System\Object
{
	use FontFamilyOverride;

	/**
	 * @field
	 * @var \System\String|string
	 */
	const DefaultFontFamilyName = '$Default';
	/**
	 * @property
	 * @var \Avalonia\Media\FontFamily
	 * @since readonly
	 */
	public $Default;
	/**
	 * @property
	 * @var \System\String|string
	 * @since readonly
	 */
	public $Name;
	/**
	 * @property
	 * @var \Avalonia\Media\Fonts\FamilyNameCollection
	 * @since readonly
	 */
	public $FamilyNames;
	/**
	 * @property
	 * @var \Avalonia\Media\Fonts\FontFamilyKey
	 * @since readonly
	 */
	public $Key;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\FontFamily
	 */
	public static function op_Implicit($s){}
	private static function GetFontSourceIdentifier($name){}
	/**
	 * @uses FontFamilyOverride::Parse_1 <br>public , args: ($s)<br>
	 * @uses FontFamilyOverride::Parse_2 <br>public , args: ($s, $baseUri)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\FontFamily|mixed|\override
	 */
	#[MethodOverridePublic]function Parse (\override ...$args){}
	/**
	 * @param \Avalonia\Media\FontFamily $a
	 * @param \Avalonia\Media\FontFamily $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \Avalonia\Media\FontFamily $a
	 * @param \Avalonia\Media\FontFamily $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @uses FontFamilyOverride::__construct_1 <br>public , args: ($name)<br>
	 * @uses FontFamilyOverride::__construct_2 <br>public , args: ($baseUri, $name)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}