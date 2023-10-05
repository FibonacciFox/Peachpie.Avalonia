<?php
namespace Avalonia\X11;
/**
 */
class XIAnyHierarchyChangeInfo extends \System\ValueType
{
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $type;
	/**
	 * @var \Avalonia\X11\XIAddMasterInfo
	 * @field
	 */
	public $add;
	/**
	 * @var \Avalonia\X11\XIRemoveMasterInfo
	 * @field
	 */
	public $remove;
	/**
	 * @var \Avalonia\X11\XIAttachSlaveInfo
	 * @field
	 */
	public $attach;
	/**
	 * @var \Avalonia\X11\XIDetachSlaveInfo
	 * @field
	 */
	public $detach;
}
