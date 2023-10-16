<?php
namespace System\Drawing\Printing;
/**
 */
class QueryPageSettingsEventArgs extends \System\Drawing\Printing\PrintEventArgs
{
	/**
	 * @var \System\Drawing\Printing\PageSettings
	 * @property
	 */
	public $PageSettings;
	/**
	 * @var \System\Drawing\Printing\PrintAction
	 * @property
	 */
	public readonly $PrintAction;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $Cancel;
	/**
	 * @return \System\Drawing\Printing\PageSettings
	 */
	public  function get_PageSettings(){}
	/**
	 * @param \System\Drawing\Printing\PageSettings $value
	 * @return \System\Void|void
	 */
	public  function set_PageSettings($value){}
}
