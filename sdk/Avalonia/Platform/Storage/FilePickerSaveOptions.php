<?php
namespace Avalonia\Platform\Storage;
/**
 */
class FilePickerSaveOptions extends \Avalonia\Platform\Storage\PickerOptions
{
	/**
	 * @var \System\String
	 * @property
	 */
	public $SuggestedFileName;
	/**
	 * @var \System\String
	 * @property
	 */
	public $DefaultExtension;
	/**
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\FilePickerFileType]
	 * @property
	 */
	public $FileTypeChoices;
	/**
	 * @var \System\Nullable_1[System\Boolean]
	 * @property
	 */
	public $ShowOverwritePrompt;
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
	 * @return \System\String|string
	 */
	public  function get_SuggestedFileName(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_SuggestedFileName($value){}
	/**
	 * @return \System\String|string
	 */
	public  function get_DefaultExtension(){}
	/**
	 * @param \System\String|string $value
	 * @return \System\Void|void
	 */
	public  function set_DefaultExtension($value){}
	/**
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	public  function get_FileTypeChoices(){}
	/**
	 * @param \System\Collections\Generic\IReadOnlyList_1 $value
	 * @return \System\Void|void
	 */
	public  function set_FileTypeChoices($value){}
	/**
	 * @return \System\Nullable_1
	 */
	public  function get_ShowOverwritePrompt(){}
	/**
	 * @param \System\Nullable_1 $value
	 * @return \System\Void|void
	 */
	public  function set_ShowOverwritePrompt($value){}
}
