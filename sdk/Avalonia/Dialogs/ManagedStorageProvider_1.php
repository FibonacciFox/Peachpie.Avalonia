<?php
namespace Avalonia\Dialogs;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ManagedStorageProvider_1 extends \Avalonia\Platform\Storage\FileIO\BclStorageProvider implements 
	\Avalonia\Platform\Storage\IStorageProvider
{
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanSave;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanOpen;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $CanPickFolder;
	/**
	 * @param \Avalonia\Dialogs\Internal\ManagedFileChooserViewModel $model
	 * @param \Avalonia\Controls\Window $parent
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate] static function Show($model, $parent){}
}
