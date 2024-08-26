<?php
namespace Avalonia\Media;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait MatrixTransformOverride {
	/**
	 */
	#[MethodOverride]public function __construct_1 (){}
	/**
	 * @param \Avalonia\Matrix $matrix
	 */
	#[MethodOverride]public function __construct_2 ($matrix){}
}
final class MatrixTransform extends \Avalonia\Media\Transform implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableTransform,
	\Avalonia\Media\ITransform,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{
	use MatrixTransformOverride;
	/**
	 * @field
	 * @since readonly
	 * @var \Avalonia\StyledProperty_1[Avalonia\Matrix]
	 */
	public static $MatrixProperty;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 */
	public $Matrix;
	/**
	 * @property
	 * @var \Avalonia\Matrix
	 * @since readonly
	 */
	public $Value;
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
	private function GetForCompositor($c){}
	private function TryGetServer($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function SerializeChanges($c, $writer){}
	private function GetPropertyChangedSubscribers(){}
	/**
	 * @uses MatrixTransformOverride::__construct_1 <br>public , args: ()<br>
	 * @uses MatrixTransformOverride::__construct_2 <br>public , args: ($matrix)<br>
	 * @var mixed|\override ...$args
	*/
	#[MethodOverride]function __construct(\override ...$args){}
}