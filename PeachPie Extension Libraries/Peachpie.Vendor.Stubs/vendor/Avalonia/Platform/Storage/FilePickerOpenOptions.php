<?php
namespace Avalonia\Platform\Storage;
class FilePickerOpenOptions extends \Avalonia\Platform\Storage\PickerOptions
{
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowMultiple;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\FilePickerFileType]
	 */
	public $FileTypeFilter;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $Title;
	/**
	 * @property
	 * @var \Avalonia\Platform\Storage\IStorageFolder
	 */
	public $SuggestedStartLocation;
	/**
	 */
	public function __construct(){}
}