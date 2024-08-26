<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ImageBrushOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Media\IImageBrushSource $source
	 */
	#[MethodOverride]public function __construct_2 ($source){}
}
final class ImageBrush extends \Avalonia\Media\TileBrush implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\IImageBrush,
	\Avalonia\Media\IMutableBrush
{
	use ImageBrushOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\IImageBrushSource]
	 */
	public static $SourceProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\IImageBrushSource
	 */
	public $Source;
	/**
	 * @property
	 * @var \Avalonia\Media\AlignmentX
	 */
	public $AlignmentX;
	/**
	 * @property
	 * @var \Avalonia\Media\AlignmentY
	 */
	public $AlignmentY;
	/**
	 * @property
	 * @var \Avalonia\RelativeRect
	 */
	public $DestinationRect;
	/**
	 * @property
	 * @var \Avalonia\RelativeRect
	 */
	public $SourceRect;
	/**
	 * @property
	 * @var \Avalonia\Media\Stretch
	 */
	public $Stretch;
	/**
	 * @property
	 * @var \Avalonia\Media\TileMode
	 */
	public $TileMode;
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
	 * @property dublicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	public function ToImmutable(){}
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function TryGetServer($c){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses ImageBrushOverride::__construct_1 <br>public , args: ()<br>
	 * @uses ImageBrushOverride::__construct_2 <br>public , args: ($source)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}