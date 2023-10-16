<?php
namespace System\Drawing\Printing;
/**
 */
class PrintPageEventArgs extends \System\EventArgs
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Cancel;
	/**
	 * @var \System\Drawing\Graphics
	 * @property
	 */
	public readonly $Graphics;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $HasMorePages;
	/**
	 * @var \System\Drawing\Rectangle
	 * @property
	 */
	public readonly $MarginBounds;
	/**
	 * @var \System\Drawing\Rectangle
	 * @property
	 */
	public readonly $PageBounds;
	/**
	 * @var \System\Drawing\Printing\PageSettings
	 * @property
	 */
	public readonly $PageSettings;
	/**
	 * @return \System\Boolean
	 */
	public  function get_Cancel(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_Cancel($value){}
	/**
	 * @return \System\Drawing\Graphics
	 */
	public  function get_Graphics(){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_HasMorePages(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_HasMorePages($value){}
	/**
	 * @return \System\Drawing\Rectangle
	 */
	public  function get_MarginBounds(){}
	/**
	 * @return \System\Drawing\Rectangle
	 */
	public  function get_PageBounds(){}
	/**
	 * @return \System\Drawing\Printing\PageSettings
	 */
	public  function get_PageSettings(){}
}
