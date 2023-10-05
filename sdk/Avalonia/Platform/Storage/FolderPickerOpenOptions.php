<?php
namespace Avalonia\Platform\Storage;
/**
 */
class FolderPickerOpenOptions extends \Avalonia\Platform\Storage\PickerOptions
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AllowMultiple;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Title;
	/**
	 * @var \Avalonia\Platform\Storage\IStorageFolder
	 * @property
	 */
	public $SuggestedStartLocation;
	/**
	 * @return \System\Boolean
	 */
	public  function get_AllowMultiple(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_AllowMultiple($value){}
}
