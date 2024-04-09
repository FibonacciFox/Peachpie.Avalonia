<?php
namespace Avalonia\Rendering\Composition;
class CompositingRenderer extends \System\Object implements
	\Avalonia\Rendering\IRendererWithCompositor,
	\Avalonia\Rendering\IRenderer,
	\System\IDisposable,
	\Avalonia\Rendering\IHitTester
{
	/**
	 * @property
	 * @var \Avalonia\Rendering\RendererDiagnostics
	 * @since readonly
	 */
	public $Diagnostics;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Compositor
	 * @since readonly
	 */
	public $Compositor;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsDisposed;
	private function OnDiagnosticsPropertyChanged($sender, $e){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Rendering\SceneInvalidatedEventArgs]
	 * @return \System\Void|void
	 */
	public function add_SceneInvalidated($value){}
	/**
	 * @param \System\EventHandler_1 $value [generic: Avalonia\Rendering\SceneInvalidatedEventArgs]
	 * @return \System\Void|void
	 */
	public function remove_SceneInvalidated($value){}
	private function QueueUpdate(){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public function AddDirty($visual){}
	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter [generic: Avalonia\Visual,System\Boolean]
	 * @return \System\Collections\Generic\IEnumerable_1[Avalonia\Visual]
	 */
	public function HitTest($p, $root, $filter){}
	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter [generic: Avalonia\Visual,System\Boolean]
	 * @return \Avalonia\Visual
	 */
	public function HitTestFirst($p, $root, $filter){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public function RecalculateChildren($visual){}
	private function UpdateCore(){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function TriggerSceneInvalidatedForUnitTests($rect){}
	private function Update(){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \System\Void|void
	 */
	public function Resized($size){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function Paint($rect){}
	/**
	 * @return \System\Void|void
	 */
	public function Start(){}
	/**
	 * @return \System\Void|void
	 */
	public function Stop(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Threading\Tasks\ValueTask_1[System\Object]
	 */
	public function TryGetRenderInterfaceFeature($featureType){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\IRenderRoot $root
	 * @param \Avalonia\Rendering\Composition\Compositor $compositor
	 * @param \System\Func_1 $surfaces [generic: System\Collections\Generic\IEnumerable_1[System\Object]
	 */
	public function __construct($root, $compositor, $surfaces){}
}