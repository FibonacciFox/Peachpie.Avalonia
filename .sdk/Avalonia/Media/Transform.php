<?php
namespace Avalonia\Media;
class Transform extends \Avalonia\Animation\Animatable implements
	\Avalonia\Diagnostics\IAvaloniaObjectDebug,
	\System\ComponentModel\INotifyPropertyChanged,
	\Avalonia\Media\IMutableTransform,
	\Avalonia\Media\ITransform,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource_1,
	\Avalonia\Rendering\Composition\Drawing\ICompositionRenderResource,
	\Avalonia\Rendering\Composition\ICompositorSerializable
{

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
	 * @property duplicate
	 * @var \System\Object|object|\Avalonia\Data\IBinding
	 */
	public $Item;
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function add_Changed($value){}
	/**
	 * @param \System\EventHandler $value
	 * @return \System\Void|void
	 */
	public function remove_Changed($value){}
	/**
	 * @param \System\String|string $s
	 * @return \Avalonia\Media\Transform
	 */
	public static function Parse($s){}
	/**
	 * @return \System\Void|void
	 */
	protected function RaiseChanged(){}
	/**
	 * @return \Avalonia\Media\Immutable\ImmutableTransform
	 */
	public function ToImmutable(){}
	private function GetForCompositor($c){}
	private function TryGetServer($c){}
	private function AddRefOnCompositor($c){}
	private function ReleaseOnCompositor($c){}
	private function SerializeChanges($c, $writer){}
	private function GetPropertyChangedSubscribers(){}
}