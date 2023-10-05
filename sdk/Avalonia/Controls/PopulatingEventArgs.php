<?php
namespace Avalonia\Controls;
/**
 */
class PopulatingEventArgs extends \System\ComponentModel\CancelEventArgs
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $Parameter;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Cancel;
	/**
	 * @return \System\String|string
	 */
	public  function get_Parameter(){}
	/**
	 * @param \System\String|string $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Parameter($value){}
}
