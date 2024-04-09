<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait DrawingBrushOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Media\Drawing $visual
	 */
	#[MethodOverride]public function __construct_2 ($visual){}
}
final class DrawingBrush extends \Avalonia\Media\TileBrush implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IBrush,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\Avalonia\Media\ITileBrush,
	\Avalonia\Media\ISceneBrush
{
	use DrawingBrushOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Media\Drawing]
	 */
	public static $DrawingProperty;
	/**
	 * @property
	 * @var \Avalonia\Media\Drawing
	 */
	public $Drawing;
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
	private function CreateContent(){}
	private function CreateServerContent($c){}
	private function GetForCompositor($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function TryGetServer($c){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses DrawingBrushOverride::__construct_1 <br>public , args: ()<br>
	 * @uses DrawingBrushOverride::__construct_2 <br>public , args: ($visual)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}