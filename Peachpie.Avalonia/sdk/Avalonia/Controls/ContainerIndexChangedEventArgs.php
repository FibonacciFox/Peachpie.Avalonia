<?php
namespace Avalonia\Controls;
/**
 */
class ContainerIndexChangedEventArgs extends \System\EventArgs
{
	/**
	 * @return \Avalonia\Controls\Control
	 */
	public  function get_Container(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_NewIndex(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_OldIndex(){}
}
