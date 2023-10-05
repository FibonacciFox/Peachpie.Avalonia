<?php
namespace Avalonia\Platform\Storage;
/**
 */
class FilePickerOpenOptions extends \Avalonia\Platform\Storage\PickerOptions
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $AllowMultiple;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\FilePickerFileType]
	 * @property
	 */
	public $FileTypeFilter;
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
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_FileTypeFilter(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_FileTypeFilter($value){}
}
