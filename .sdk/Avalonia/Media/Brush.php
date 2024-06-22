<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait BrushOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	#[MethodOverride]protected function SerializeChanges_1 ($c, $writer){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @return \System\Void|void
	 */
	#[MethodOverride]private function SerializeChanges_2 ($c, $writer){}
}
class Brush extends \Avalonia\Animation\Animatable implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use BrushOverride;

	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[System\Double]
	 */
	public static $OpacityProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\ITransform]
	 */
	public static $TransformProperty;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\RelativePoint]
	 */
	public static $TransformOriginProperty;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Opacity;
	/**
	 * @property
	 * @var \Avalonia\Media\ITransform
	 */
	public $Transform;
	/**
	 * @property
	 * @var \Avalonia\RelativePoint
	 */
	public $TransformOrigin;
	/**
	 * @property
	 * @var \Avalonia\Animation\Transitions
	 */
	public $Transitions;
	/**
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\IBrush
	 */
	public static function Parse($s){}
	/**
	 * @return \System\Void|void
	 */
	protected function RegisterForSerialization(){}
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \System\Void|void
	 */
	protected function OnReferencedFromCompositor($c){}
	private function ReleaseOnCompositor($c){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @return \System\Void|void
	 */
	protected function OnUnreferencedFromCompositor($c){}
	private function TryGetServer($c){}
	/**
	 * @uses BrushOverride::SerializeChanges_1 <br>protected , args: ($c, $writer)<br>
	 * @uses BrushOverride::SerializeChanges_2 <br>private , args: ($c, $writer)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Void|void|mixed|\override
	 */
	#[MethodOverrideProtected]function SerializeChanges (\override ...$args){}
	private function GetPropertyChangedSubscribers(){}
}