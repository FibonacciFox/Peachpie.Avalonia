<?php
namespace Avalonia\Data;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BindingNotificationOverride {
	/**
	 * @param \System\Object|object $value
	 */
	#[MethodOverride]public function __construct_1 ($value){}
	/**
	 * @param \System\Exception $error
	 * @param \Avalonia\Data\BindingErrorType $errorType
	 */
	#[MethodOverride]public function __construct_2 ($error, $errorType){}
	/**
	 * @param \System\Exception $error
	 * @param \Avalonia\Data\BindingErrorType $errorType
	 * @param \System\Object|object $fallbackValue
	 */
	#[MethodOverride]public function __construct_3 ($error, $errorType, $fallbackValue){}
}
class BindingNotification extends \System\Object
{
	use BindingNotificationOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Data\BindingNotification
	 */
	public static $Null;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\Data\BindingNotification
	 */
	public static $UnsetValue;
	/**
	 * @property
	 * @var \System\Object|object
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $HasValue;
	/**
	 * @property
	 * @var \System\Exception
	 */
	public $Error;
	/**
	 * @property
	 * @var \Avalonia\Data\BindingErrorType
	 */
	public $ErrorType;
	/**
	 * @param \Avalonia\Data\BindingNotification $a
	 * @param \Avalonia\Data\BindingNotification $b
	 * @return \System\Boolean|bool
	 */
	public static function op_Equality($a, $b){}
	/**
	 * @param \Avalonia\Data\BindingNotification $a
	 * @param \Avalonia\Data\BindingNotification $b
	 * @return \System\Boolean|bool
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
	 * @param \System\Exception $e
	 * @param \Avalonia\Data\BindingErrorType $type
	 * @return \System\Void|void
	 */
	public function AddError($e, $type){}
	/**
	 * @return \System\Void|void
	 */
	public function ClearValue(){}
	/**
	 * @param \System\Object|object $value
	 * @return \System\Void|void
	 */
	public function SetValue($value){}
	private static function ExceptionEquals($a, $b){}
	/**
	 * @uses BindingNotificationOverride::__construct_1 <br>public , args: ($value)<br>
	 * @uses BindingNotificationOverride::__construct_2 <br>public , args: ($error, $errorType)<br>
	 * @uses BindingNotificationOverride::__construct_3 <br>public , args: ($error, $errorType, $fallbackValue)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}