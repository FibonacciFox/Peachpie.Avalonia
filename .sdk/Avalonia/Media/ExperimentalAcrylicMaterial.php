<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ExperimentalAcrylicMaterialOverride {
	/**
	 * @deprecated
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]public function get_TintColor_1 (){}
	/**
	 * @deprecated
	 * @return \Avalonia\Media\Color
	 */
	#[MethodOverride]private function get_TintColor_2 (){}
}
class ExperimentalAcrylicMaterial extends \Avalonia\AvaloniaObject implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableExperimentalAcrylicMaterial,
	\Avalonia\Media\IExperimentalAcrylicMaterial
{
	use ExperimentalAcrylicMaterialOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Color]
	 */
	public static $TintColorProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\AcrylicBackgroundSource]
	 */
	public static $BackgroundSourceProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $TintOpacityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $MaterialOpacityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $PlatformTransparencyCompensationLevelProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Color]
	 */
	public static $FallbackColorProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\AcrylicBackgroundSource
	 */
	public $BackgroundSource;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $TintColor;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $TintOpacity;
	/**
	 * @property
	 * @var \Avalonia\Media\Color
	 */
	public $FallbackColor;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $MaterialOpacity;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $PlatformTransparencyCompensationLevel;
	/**
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Invalidated($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Invalidated($value){}
	/**
	 * @uses ExperimentalAcrylicMaterialOverride::get_TintColor_1 <br>public , args: ()<br>
	 * @uses ExperimentalAcrylicMaterialOverride::get_TintColor_2 <br>private , args: ()<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Media\Color|mixed|\override
	 */
	#[MethodOverridePublic]function get_TintColor (){}
	private function get_MaterialColor(){}
	private static function GetEffectiveTintColor($tintColor, $tintOpacity){}
	private static function GetTintOpacityModifier($tintColor){}
	private function GetEffectiveLuminosityColor(){}
	private static function Trim($value){}
	private static function RGBMax($color){}
	private static function RGBMin($color){}
	private function GetLuminosityColor($luminosityOpacity){}
	/**
	 * @param \Avalonia\AvaloniaProperty ...$properties
	 * @return \System\Void|void
	 */
	protected static function AffectsRender(...$properties){}
	/**
	 * @param \System\EventArgs $e
	 * @return \System\Void|void
	 */
	protected function RaiseInvalidated($e){}
	/**
	 * @return \Avalonia\Media\IExperimentalAcrylicMaterial
	 */
	public function ToImmutable(){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 */
	public function __construct(){}
}