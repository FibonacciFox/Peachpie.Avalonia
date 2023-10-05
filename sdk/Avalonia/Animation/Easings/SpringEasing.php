<?php
namespace Avalonia\Animation\Easings;
/**
 */
class SpringEasing extends \Avalonia\Animation\Easings\Easing implements 
	\Avalonia\Animation\Easings\IEasing
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
}
