<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait BindingNotificationMethodsOverride
{
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($other){}
}
/**
 */
class BindingNotification extends \System\Object
{
	/**
	 * @var \Avalonia\Data\BindingNotification
	 * @field
	 */
	public readonly $Null;
	/**
	 * @var \Avalonia\Data\BindingNotification
	 * @field
	 */
	public readonly $UnsetValue;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Value;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $HasValue;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public $Error;
	/**
	 * @var \Avalonia\Data\BindingErrorType
	 * @property
	 */
	public $ErrorType;
	/**
	 * @return \System\Object|object
	 */
	public  function get_Value(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasValue(){}
	/**
	 * @return \System\Exception
	 */
	public  function get_Error(){}
	/**
	 * @param \System\Exception $value
	 * @return \System\Void|void
	 */
	public  function set_Error($value){}
	/**
	 * @return \Avalonia\Data\BindingErrorType
	 */
	public  function get_ErrorType(){}
	/**
	 * @param \Avalonia\Data\BindingErrorType $value
	 * @return \System\Void|void
	 */
	public  function set_ErrorType($value){}
	/**
	 * @param \Avalonia\Data\BindingNotification $a
	 * @param \Avalonia\Data\BindingNotification $b
	 * @return \System\Boolean
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Data\BindingNotification $a
	 * @param \Avalonia\Data\BindingNotification $b
	 * @return \System\Boolean
	 */
	public static function op_Inequality($a, $b){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Object|object
	 */
	public static function ExtractValue($o){}
	/**
	 * @param \System\Object|object $o
	 * @return \System\Object|object
	 */
	public static function ExtractError($o){}
	/**
	 * @uses BindingNotificationMethodsOverride::Equals_1 ($obj)
	 * @uses BindingNotificationMethodsOverride::Equals_2 ($other)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @param \System\Exception $e
	 * @param \Avalonia\Data\BindingErrorType $type
	 * @return \System\Void|void
	 */
	public  function AddError($e, $type){}
	/**
	 * @return \System\Void|void
	 */
	public  function ClearValue(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public  function SetValue($value){}
	/**
	 * @param \System\Exception $a
	 * @param \System\Exception $b
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function ExceptionEquals($a, $b){}
}
