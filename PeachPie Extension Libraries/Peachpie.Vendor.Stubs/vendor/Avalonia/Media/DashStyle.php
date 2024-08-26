<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DashStyleOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Collections\AvaloniaList_1
	 */
	#[MethodOverride]public function get_Dashes_1 (){}
	/**
	 * @deprecated
	 * @return \System\Collections\Generic\IReadOnlyList_1
	 */
	#[MethodOverride]private function get_Dashes_2 (){}
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \System\Collections\Generic\IEnumerable_1 $dashes [generic: System\Double]
	 * @param \System\Double|double $offset
	 */
	#[MethodOverride]public function __construct_2 ($dashes, $offset){}
}
final class DashStyle extends \Avalonia\Animation\Animatable implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IDashStyle
{
	use DashStyleOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Collections\AvaloniaList_1[System\Double]]
	 */
	public static $DashesProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OffsetProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IDashStyle
	 * @since readonly
	 */
	public $Dash;
	/**
	 * @property
	 * @var \Avalonia\Media\IDashStyle
	 * @since readonly
	 */
	public $Dot;
	/**
	 * @property
	 * @var \Avalonia\Media\IDashStyle
	 * @since readonly
	 */
	public $DashDot;
	/**
	 * @property
	 * @var \Avalonia\Media\IDashStyle
	 * @since readonly
	 */
	public $DashDotDot;
	/**
	 * @property
	 * @var \Avalonia\Collections\AvaloniaList_1[System\Double]
	 */
	public $Dashes;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Offset;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @uses DashStyleOverride::get_Dashes_1 <br>public , args: ()<br>
	 * @uses DashStyleOverride::get_Dashes_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Collections\AvaloniaList_1|\System\Collections\Generic\IReadOnlyList_1|mixed|\override
	 */
	#[MethodOverridePublic]function get_Dashes (){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	protected function remove_Invalidated($value){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutableDashStyle
	 */
	public function ToImmutable(){}
	private function DashesChanged($sender, $e){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DashStyleOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DashStyleOverride::__construct_2 <br>public , args: ($dashes, $offset)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}