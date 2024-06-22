<?php
namespace Avalonia\Platform\Storage;
class NoopStorageProvider extends \Avalonia\Platform\Storage\FileIO\BclStorageProvider implements
	\Avalonia\Platform\Storage\IStorageProvider
{

	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanOpen;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanSave;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $CanPickFolder;
	/**
	 */
	public function __construct(){}
}