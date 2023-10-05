<?php
namespace Avalonia\Input\GestureRecognizers;
/**
 */
class PolynomialFit extends \System\Object
{
	/**
	 * @var \System\Double[]
	 * @property
	 */
	public readonly $Coefficients;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Confidence;
	/**
	 * @return \System\Double[]
	 */
	public  function get_Coefficients(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Confidence(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Confidence($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
