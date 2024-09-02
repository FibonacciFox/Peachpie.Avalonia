<?php
namespace Avalonia\Platform\Storage;
class FilePickerSaveOptions extends \Avalonia\Platform\Storage\PickerOptions
{
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $SuggestedFileName;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $DefaultExtension;
	/**
	 * @property
	 * @var \System\Collections\Generic\IReadOnlyList_1[Avalonia\Platform\Storage\FilePickerFileType]
	 */
	public $FileTypeChoices;
	/**
	 * @property
	 * @var \System\Nullable_1[System\Boolean]
	 */
	public $ShowOverwritePrompt;
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