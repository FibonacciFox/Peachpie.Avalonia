<?php
namespace Avalonia\Controls;
/**
 */
class ContainerIndexChangedEventArgs extends \System\EventArgs
{
	/**
	 * @var \Avalonia\Controls\Control
	 * @property
	 */
	public readonly $Container;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $NewIndex;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $OldIndex;
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
