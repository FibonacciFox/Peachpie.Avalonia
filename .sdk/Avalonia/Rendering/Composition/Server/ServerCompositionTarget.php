<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait ServerCompositionTargetOverride {
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]public function SnapToDevicePixels_1 ($rect){}
	/**
	 * @deprecated
	 * @param \Avalonia\Rect $rect
	 * @param \System\Double|double $scale
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride]private static function SnapToDevicePixels_2 ($rect, $scale){}
}
class ServerCompositionTarget extends \Avalonia\Rendering\Composition\Server\ServerObject implements
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\System\IDisposable
{
	use ServerCompositionTargetOverride;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfRootProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfIsEnabledProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfDebugOverlaysProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfLastLayoutPassTimingProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfScalingProperty;
	/**
	 * @field
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 */
	protected static $s_IdOfSizeProperty;
	/**
	 * @property
	 * @var \System\Int64|int
	 * @since readonly
	 */
	public $Id;
	/**
	 * @property
	 * @var \System\UInt64
	 */
	public $Revision;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\ICompositionTargetDebugEvents
	 */
	public $DebugEvents;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ReadbackIndices
	 * @since readonly
	 */
	public $Readback;
	/**
	 * @property
	 * @var \System\Int32|int
	 */
	public $RenderedVisuals;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	public $Root;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 */
	public $IsEnabled;
	/**
	 * @property
	 * @var \Avalonia\Rendering\RendererDebugOverlays
	 */
	public $DebugOverlays;
	/**
	 * @property
	 * @var \Avalonia\Rendering\LayoutPassTiming
	 */
	public $LastLayoutPassTiming;
	/**
	 * @property
	 * @var \System\Double|double
	 */
	public $Scaling;
	/**
	 * @property
	 * @var \Avalonia\Size
	 */
	public $Size;
	/**
	 * @property
	 * @var \System\Boolean|bool
	 * @since readonly
	 */
	public $IsActive;
	/**
	 * @property
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @since readonly
	 */
	public $Compositor;
	private function CreateTimeGraph($title){}
	/**
	 * @return \System\Void|void
	 */
	public function Render(){}
	private function DrawOverlays($targetContext){}
	/**
	 * @uses ServerCompositionTargetOverride::SnapToDevicePixels_1 <br>public , args: ($rect)<br>
	 * @uses ServerCompositionTargetOverride::SnapToDevicePixels_2 <br>private , args: ($rect, $scale)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rect|mixed|\override
	 */
	#[MethodOverridePublic]function SnapToDevicePixels (\override ...$args){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public function AddDirtyRect($rect){}
	/**
	 * @return \System\Void|void
	 */
	public function Invalidate(){}
	/**
	 * @return \System\Void|void
	 */
	public function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $visual
	 * @return \System\Void|void
	 */
	public function AddVisual($visual){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $visual
	 * @return \System\Void|void
	 */
	public function RemoveVisual($visual){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $visual
	 * @return \System\Void|void
	 */
	public function EnqueueAdornerUpdate($visual){}
	private function DeserializeChangesExtra($c){}
	private function OnIsEnabledChanged(){}
	private function OnDebugOverlaysChanged(){}
	private function OnLastLayoutPassTimingChanged(){}
	private function GetProperty($name){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositor $compositor
	 * @param \System\Func_1 $surfaces [generic: System\Collections\Generic\IEnumerable_1[System\Object]
	 * @param \Avalonia\Rendering\Composition\Server\DiagnosticTextRenderer $diagnosticTextRenderer
	 */
	public function __construct($compositor, $surfaces, $diagnosticTextRenderer){}
}