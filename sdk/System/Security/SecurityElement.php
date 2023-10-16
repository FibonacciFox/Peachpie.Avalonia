<?php
namespace System\Security;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SecurityElementMethodsOverride
{
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function ToString_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] private  function ToString_2($obj, $write){}
}
/**
 */
class SecurityElement extends \System\Object
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_tag;
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_text;
	/**
	 * @var \System\Collections\ArrayList
	 * @field
	 */
	protected $_attributes;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Tag;
	/**
	 * @var \System\Collections\Hashtable
	 * @property
	 */
	public $Attributes;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Text;
	/**
	 * @var \System\Collections\ArrayList
	 * @property
	 */
	public $Children;
	/**
	 * @return \System\String|string
	 */
	public  function get_Tag(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Tag($value){}
	/**
	 * @return \System\Collections\Hashtable
	 */
	public  function get_Attributes(){}
	/**
	 * @param \System\Collections\Hashtable $value
	 * @return \System\Void|void
	 */
	public  function set_Attributes($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_Text(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_Text($value){}
	/**
	 * @return \System\Collections\ArrayList
	 */
	public  function get_Children(){}
	/**
	 * @param \System\Collections\ArrayList $value
	 * @return \System\Void|void
	 */
	public  function set_Children($value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	protected  function AddAttributeSafe($name, $value){}
	/**
	 * @param \System\String|string $name
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function AddAttribute($name, $value){}
	/**
	 * @param \System\Security\SecurityElement $child
	 * @return \System\Void|void
	 */
	public  function AddChild($child){}
	/**
	 * @param \System\Security\SecurityElement $other
	 * @return \System\Boolean
	 */
	public  function Equal($other){}
	/**
	 * @return \System\Security\SecurityElement
	 */
	public  function Copy(){}
	/**
	 * @param \System\String|string $tag
	 * @return \System\Boolean
	 */
	public static function IsValidTag($tag){}
	/**
	 * @param \System\String|string $text
	 * @return \System\Boolean
	 */
	public static function IsValidText($text){}
	/**
	 * @param \System\String|string $name
	 * @return \System\Boolean
	 */
	public static function IsValidAttributeName($name){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Boolean
	 */
	public static function IsValidAttributeValue($value){}
	/**
	 * @param \System\Char $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetEscapeSequence($c){}
	/**
	 * @param \System\String|string $str
	 * @return \System\String|string
	 */
	public static function Escape($str){}
	/**
	 * @param \System\String|string $str
	 * @param \System\Int32|int $index
	 * @param \System\Int32& $newIndex
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function GetUnescapeSequence($str, $index, $newIndex){}
	/**
	 * @param \System\String|string $str
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Unescape($str){}
	/**
	 * @uses SecurityElementMethodsOverride::ToString_1 ()
	 * @uses SecurityElementMethodsOverride::ToString_2 ($obj, $write)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ToString(mixed ...$args){}
	/**
	 * @param \System\String|string $name
	 * @return \System\String|string
	 */
	public  function Attribute($name){}
	/**
	 * @param \System\String|string $tag
	 * @return \System\Security\SecurityElement
	 */
	public  function SearchForChildByTag($tag){}
	/**
	 * @param \System\String|string $tag
	 * @return \System\String|string
	 */
	public  function SearchForTextOfTag($tag){}
	/**
	 * @param \System\String|string $xml
	 * @return \System\Security\SecurityElement
	 */
	public static function FromString($xml){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
