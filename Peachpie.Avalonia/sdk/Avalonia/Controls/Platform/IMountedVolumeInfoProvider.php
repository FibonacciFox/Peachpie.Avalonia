<?php
namespace Avalonia\Controls\Platform;
/**
 */
interface IMountedVolumeInfoProvider
{
	/**
	 * @param \System\Collections\ObjectModel\ObservableCollection_1 $mountedDrives
	 */
	public function Listen($mountedDrives);
}
