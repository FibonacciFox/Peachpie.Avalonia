<?php
namespace Avalonia;
/**
 */
class AvaloniaLocator extends \System\Object implements 
	\Avalonia\IAvaloniaDependencyResolver
{
	/**
	 * @var \Avalonia\IAvaloniaDependencyResolver
	 * @property
	 */
	public $Current;
	/**
	 * @var \Avalonia\AvaloniaLocator
	 * @property
	 */
	public $CurrentMutable;
	/**
	 * @return \Avalonia\IAvaloniaDependencyResolver
	 */
	public static function get_Current(){}
	/**
	 * @param \Avalonia\IAvaloniaDependencyResolver $value
	 * @return \System\Void|void
	 */
	public static function set_Current($value){}
	/**
	 * @return \Avalonia\AvaloniaLocator
	 */
	public static function get_CurrentMutable(){}
	/**
	 * @param \Avalonia\AvaloniaLocator $value
	 * @return \System\Void|void
	 */
	public static function set_CurrentMutable($value){}
	/**
	 * @param \System\Type $t
	 * @return \System\Object|object
	 */
	public  function GetService($t){}
	/**
	 * @return \Avalonia\RegistrationHelper_1
	 */
	public  function Bind(){}
	/**
	 * @param \Avalonia\T $constant
	 * @return \Avalonia\AvaloniaLocator
	 */
	public  function BindToSelf($constant){}
	/**
	 * @return \Avalonia\AvaloniaLocator
	 */
	public  function BindToSelfSingleton(){}
	/**
	 * @return \System\IDisposable
	 */
	public static function EnterScope(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
