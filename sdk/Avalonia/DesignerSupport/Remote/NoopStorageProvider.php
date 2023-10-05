<?php
namespace Avalonia\DesignerSupport\Remote;
/**
 */
class NoopStorageProvider extends \Avalonia\Platform\Storage\FileIO\BclStorageProvider implements 
	\Avalonia\Platform\Storage\IStorageProvider
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanOpen;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSave;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanPickFolder;
}
