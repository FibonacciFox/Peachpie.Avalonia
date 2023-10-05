<?php
namespace Avalonia\Animation;
/**
 */
class Spring extends \System\Object
{
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Mass;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Stiffness;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Damping;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $InitialVelocity;
	/**
	 * @param \System\String|string $value
	 * @param \System\Globalization\CultureInfo $culture
	 * @return \Avalonia\Animation\Spring
	 */
	public static function Parse($value, $culture){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Mass(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Mass($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Stiffness(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Stiffness($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Damping(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Damping($value){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_InitialVelocity(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_InitialVelocity($value){}
	/**
	 * @param \System\Double|double $linearProgress
	 * @return \System\Double|double
	 */
	public  function GetSpringProgress($linearProgress){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Build(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
