<?php
namespace Avalonia\Controls\Platform;
class MountedVolumeInfo extends \System\Object implements
	\System\IEquatable_1
{
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $VolumeLabel;
	/**
	 * @property
	 * @var \System\String|string
	 */
	public $VolumePath;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $VolumeSizeBytes;
	/**
	 */
	public function __construct(){}
}