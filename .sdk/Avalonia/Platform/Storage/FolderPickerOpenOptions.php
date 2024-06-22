<?php
namespace Avalonia\Platform\Storage;
class FolderPickerOpenOptions extends \Avalonia\Platform\Storage\PickerOptions
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $AllowMultiple;
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