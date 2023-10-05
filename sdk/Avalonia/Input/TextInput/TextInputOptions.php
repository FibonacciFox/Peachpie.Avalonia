<?php
namespace Avalonia\Input\TextInput;
/**
 */
class TextInputOptions extends \System\Object
{
	/**
	 * @var \Avalonia\Input\TextInput\TextInputOptions
	 * @field
	 */
	public readonly $Default;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\TextInput\TextInputContentType]
	 * @field
	 */
	public readonly $ContentTypeProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\TextInput\TextInputReturnKeyType]
	 * @field
	 */
	public readonly $ReturnKeyTypeProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $MultilineProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $LowercaseProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $UppercaseProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $AutoCapitalizationProperty;
	/**
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 * @field
	 */
	public readonly $IsSensitiveProperty;
	/**
	 * @var \Avalonia\Input\TextInput\TextInputContentType
	 * @property
	 */
	public $ContentType;
	/**
	 * @var \Avalonia\Input\TextInput\TextInputReturnKeyType
	 * @property
	 */
	public $ReturnKeyType;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Multiline;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Lowercase;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Uppercase;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AutoCapitalization;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsSensitive;
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \Avalonia\Input\TextInput\TextInputOptions
	 */
	public static function FromStyledElement($avaloniaObject){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \Avalonia\Input\TextInput\TextInputContentType $value
	 * @return \System\Void|void
	 */
	public static function SetContentType($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \Avalonia\Input\TextInput\TextInputContentType
	 */
	public static function GetContentType($avaloniaObject){}
	/**
	 * @return \Avalonia\Input\TextInput\TextInputContentType
	 */
	public  function get_ContentType(){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputContentType $value
	 * @return \System\Void|void
	 */
	public  function set_ContentType($value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \Avalonia\Input\TextInput\TextInputReturnKeyType $value
	 * @return \System\Void|void
	 */
	public static function SetReturnKeyType($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \Avalonia\Input\TextInput\TextInputReturnKeyType
	 */
	public static function GetReturnKeyType($avaloniaObject){}
	/**
	 * @return \Avalonia\Input\TextInput\TextInputReturnKeyType
	 */
	public  function get_ReturnKeyType(){}
	/**
	 * @param \Avalonia\Input\TextInput\TextInputReturnKeyType $value
	 * @return \System\Void|void
	 */
	public  function set_ReturnKeyType($value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetMultiline($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean
	 */
	public static function GetMultiline($avaloniaObject){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Multiline(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Multiline($value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetLowercase($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean
	 */
	public static function GetLowercase($avaloniaObject){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Lowercase(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Lowercase($value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetUppercase($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean
	 */
	public static function GetUppercase($avaloniaObject){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_Uppercase(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Uppercase($value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetAutoCapitalization($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean
	 */
	public static function GetAutoCapitalization($avaloniaObject){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_AutoCapitalization(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AutoCapitalization($value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public static function SetIsSensitive($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean
	 */
	public static function GetIsSensitive($avaloniaObject){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsSensitive(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsSensitive($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
