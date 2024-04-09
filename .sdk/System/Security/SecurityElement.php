<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait SecurityElementOverride {
	/**
	 * @deprecated
	 * @param \System\Object|object $obj
	 * @param \System\Action_2 $write [generic: System\Object,System\String]
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function ToString_1 ($obj, $write){}
	/**
	 * @param \System\String|string $tag
	 */
	#[MethodOverride]public function __construct_1 ($tag){}
	/**
	 * @param \System\String|string $tag
	 * @param \System\String|string $text
	 */
	#[MethodOverride]public function __construct_2 ($tag, $text){}
}
final class SecurityElement extends \System\Object
{
	use SecurityElementOverride;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_tag;
	/**
	 * @field
	 * @var \System\String|string
	 */
	protected $_text;
	/**
	 * @field
	 * @var \System\Collections\ArrayList
	 */
	protected $_attributes;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Tag;
	/**
	 * @property
	 * @var \System\Collections\Hashtable
	 */
	public $Attributes;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Text;
	/**
	 * @property
	 * @var \System\Collections\ArrayList
	 */
	public $Children;
	/**
	 * @param \System\String|string $name
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected function AddAttributeSafe($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public function AddAttribute($name, $value){}
	/**
	 * @param \System\Security\SecurityElement $child
	 * @return \System\Void|void
	 */
	public function AddChild($child){}
	/**
	 * @param \System\Security\SecurityElement $other
	 * @return \System\Boolean|bool
	 */
	public function Equal($other){}
	/**
	 * @return \System\Security\SecurityElement
	 */
	public function Copy(){}
	/**
	 * @param \System\String|string $tag
	 * @return \System\Boolean|bool
	 */
	public static function IsValidTag($tag){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Boolean|bool
	 */
	public static function IsValidText($text){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean|bool
	 */
	public static function IsValidAttributeName($name){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean|bool
	 */
	public static function IsValidAttributeValue($value){}
	private static function GetEscapeSequence($c){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	public static function Escape($str){}
	private static function GetUnescapeSequence($str, $index, &$newIndex){}
	private static function Unescape($str){}
	/**
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	public function Attribute($name){}
	/**
	 * @param \System\String|string $tag
	 * @return \System\Security\SecurityElement
	 */
	public function SearchForChildByTag($tag){}
	/**
	 * @param \System\String|string $tag
	 * @return \System\String|string
	 */
	public function SearchForTextOfTag($tag){}
	/**
	 * @param \System\String|string $xml
	 * @return \System\Security\SecurityElement
	 */
	public static function FromString($xml){}
	/**
	 * @uses SecurityElementOverride::__construct_1 <br>public , args: ($tag)<br>
	 * @uses SecurityElementOverride::__construct_2 <br>public , args: ($tag, $text)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}