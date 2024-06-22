<?php
namespace Avalonia\Controls;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait NativeMenuOverride {
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride]public function GetEnumerator_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride]private function GetEnumerator_2 (){}
}
class NativeMenu extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\Avalonia\Controls\INativeMenuExporterEventsImplBridge
{
	use NativeMenuOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\DirectProperty_2[Avalonia\Controls\NativeMenu,Avalonia\Controls\NativeMenuItem]
	 */
	public static $ParentProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[System\Boolean]
	 */
	public static $IsNativeMenuExportedProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\AttachedProperty_1[Avalonia\Controls\NativeMenu]
	 */
	public static $MenuProperty;
	/**
	 * @property
	 * @var \System\Collections\Generic\IList_1[Avalonia\Controls\NativeMenuItemBase]
	 * @since readonly
	 */
	public $Items;
	/**
	 * @property
	 * @var \Avalonia\Controls\NativeMenuItem
	 */
	public $Parent;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function add_NeedsUpdate($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function remove_NeedsUpdate($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function add_Opening($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Opening($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function add_Closed($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: System\EventArgs]
	 * @return \System\Void|void
	 */
	public function remove_Closed($value){}
	private function RaiseNeedsUpdate(){}
	private function RaiseOpening(){}
	private function RaiseClosed(){}
	private function Validator($obj){}
	private function ItemsChanged($sender, $e){}
	/**
	 * @param \Avalonia\Controls\NativeMenuItemBase $item
	 * @return \System\Void|void
	 */
	public function Add($item){}
	/**
	 * @uses NativeMenuOverride::GetEnumerator_1 <br>public , args: ()<br>
	 * @uses NativeMenuOverride::GetEnumerator_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \System\Collections\Generic\IEnumerator_1|\System\Collections\IEnumerator|mixed|\override
	 */
	#[MethodOverridePublic]function GetEnumerator (){}
	/**
	 * @param \Avalonia\Controls\TopLevel $tl
	 * @return \System\Boolean|bool
	 */
	public static function GetIsNativeMenuExported($tl){}
	private static function GetInfo($target){}
	private static function SetIsNativeMenuExported($tl, $value){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @param \Avalonia\Controls\NativeMenu $menu
	 * @return \System\Void|void
	 */
	public static function SetMenu($o, $menu){}
	/**
	 * @param \Avalonia\AvaloniaObject $o
	 * @return \Avalonia\Controls\NativeMenu
	 */
	public static function GetMenu($o){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}