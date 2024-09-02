<?php
namespace Avalonia\Input\TextInput;
class TextInputOptions extends \System\Object
{
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Input\TextInput\TextInputOptions
	 */
	public static $Default;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\TextInput\TextInputContentType]
	 */
	public static $ContentTypeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Input\TextInput\TextInputReturnKeyType]
	 */
	public static $ReturnKeyTypeProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $MultilineProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $LowercaseProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $UppercaseProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $AutoCapitalizationProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsSensitiveProperty;
	/**
	 * @property
	 * @var \Avalonia\Input\TextInput\TextInputContentType
	 */
	public $ContentType;
	/**
	 * @property
	 * @var \Avalonia\Input\TextInput\TextInputReturnKeyType
	 */
	public $ReturnKeyType;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Multiline;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Lowercase;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $Uppercase;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AutoCapitalization;
	/**
	 * @property
	 * @var \System\Boolean|bool
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
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetMultiline($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean|bool
	 */
	public static function GetMultiline($avaloniaObject){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetLowercase($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean|bool
	 */
	public static function GetLowercase($avaloniaObject){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetUppercase($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean|bool
	 */
	public static function GetUppercase($avaloniaObject){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetAutoCapitalization($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean|bool
	 */
	public static function GetAutoCapitalization($avaloniaObject){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @param \System\Boolean|bool $value
	 * @return \System\Void|void
	 */
	public static function SetIsSensitive($avaloniaObject, $value){}
	/**
	 * @param \Avalonia\StyledElement $avaloniaObject
	 * @return \System\Boolean|bool
	 */
	public static function GetIsSensitive($avaloniaObject){}
	/**
	 */
	public function __construct(){}
}