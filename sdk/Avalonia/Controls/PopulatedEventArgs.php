<?php
namespace Avalonia\Controls;
/**
 */
class PopulatedEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Collections\IEnumerable
	 * @property
	 */
	public $Data;
	/**
	 * @return \System\Collections\IEnumerable
	 */
	public  function get_Data(){}
	/**
	 * @param \System\Collections\IEnumerable $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Data($value){}
}
