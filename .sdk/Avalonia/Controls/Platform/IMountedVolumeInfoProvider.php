<?php
namespace Avalonia\Controls\Platform;
interface IMountedVolumeInfoProvider
{


	/**
	 * @param \System\Collections\ObjectModel\ObservableCollection_1 $mountedDrives [generic: Avalonia\Controls\Platform\MountedVolumeInfo]
	 * @return \System\IDisposable
	 */
	public function Listen($mountedDrives);
}