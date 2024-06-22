<?php
namespace Avalonia\Controls\Automation\Peers;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ProgressBarAutomationPeerOverride {
	/**
	 * @deprecated
	 * @param \System\Double|double $val
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SetValue_1 ($val){}
	/**
	 * @deprecated
	 * @return \System\Boolean|bool
	 */
	#[MethodOverride]private function get_IsReadOnly_1 (){}
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_LargeChange_1 (){}
	/**
	 * @deprecated
	 * @return \System\Double|double
	 */
	#[MethodOverride]private function get_SmallChange_1 (){}
}
class ProgressBarAutomationPeer extends \Avalonia\Automation\Peers\RangeBaseAutomationPeer implements
	\Avalonia\Automation\Provider\IRangeValueProvider
{
	use ProgressBarAutomationPeerOverride;

	/**
	 * @property duplicate
	 * @var \Avalonia\Controls\Primitives\RangeBase|\Avalonia\Controls\Control
	 */
	public $Owner;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsReadOnly;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Maximum;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Minimum;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $Value;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $SmallChange;
	/**
	 * @property
	 * @var \System\Double|double
	 * @since readonly
	 */
	public $LargeChange;
	/**
	 * @param \Avalonia\Controls\Primitives\RangeBase $owner
	 */
	public function __construct($owner){}
}