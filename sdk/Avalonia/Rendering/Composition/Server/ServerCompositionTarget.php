<?php
namespace Avalonia\Rendering\Composition\Server;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait ServerCompositionTargetMethodsOverride
{
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] public  function SnapToDevicePixels_1($rect){}
	/**
	 * @return \Avalonia\Rect
	 */
	#[MethodOverride] private static function SnapToDevicePixels_2($rect, $scale){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_1($prop, $field, $value){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetValue_2($prop, $field, $value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_1($prop, $field){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\T
	 */
	#[MethodOverride] protected  function GetValue_2($prop, $field){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_1($prop, $field, $committedAt, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function SetAnimatedValue_2($property, $field, $value){}
}
/**
 */
class ServerCompositionTarget extends \Avalonia\Rendering\Composition\Server\ServerObject implements 
	\Avalonia\Rendering\Composition\Expressions\IExpressionObject,
	\System\IDisposable
{
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfRootProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfIsEnabledProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfDebugOverlaysProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfLastLayoutPassTimingProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfScalingProperty;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\CompositionProperty
	 * @field
	 */
	protected $s_IdOfSizeProperty;
	/**
	 * @var \System\Int64
	 * @property
	 */
	public readonly $Id;
	/**
	 * @var \System\UInt64
	 * @property
	 */
	public $Revision;
	/**
	 * @var \Avalonia\Rendering\Composition\ICompositionTargetDebugEvents
	 * @property
	 */
	public $DebugEvents;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ReadbackIndices
	 * @property
	 */
	public readonly $Readback;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $RenderedVisuals;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 * @property
	 */
	public $Root;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsEnabled;
	/**
	 * @var \Avalonia\Rendering\RendererDebugOverlays
	 * @property
	 */
	public $DebugOverlays;
	/**
	 * @var \Avalonia\Rendering\LayoutPassTiming
	 * @property
	 */
	public $LastLayoutPassTiming;
	/**
	 * @var \System\Double
	 * @property
	 */
	public $Scaling;
	/**
	 * @var \Avalonia\Size
	 * @property
	 */
	public $Size;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsActive;
	/**
	 * @var \Avalonia\Rendering\Composition\Server\ServerCompositor
	 * @property
	 */
	public readonly $Compositor;
	/**
	 * @return \System\Int64|int
	 */
	public  function get_Id(){}
	/**
	 * @return \System\UInt64
	 */
	public  function get_Revision(){}
	/**
	 * @param \System\UInt64 $value
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function set_Revision($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\ICompositionTargetDebugEvents
	 */
	public  function get_DebugEvents(){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionTargetDebugEvents $value
	 * @return \System\Void|void
	 */
	public  function set_DebugEvents($value){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ReadbackIndices
	 */
	public  function get_Readback(){}
	/**
	 * @return \System\Int32|int
	 */
	public  function get_RenderedVisuals(){}
	/**
	 * @param \System\Int32|int $value
	 * @return \System\Void|void
	 */
	public  function set_RenderedVisuals($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_FpsCounter(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_LayoutTimeGraph(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_RenderTimeGraph(){}
	/**
	 * @param \System\String|string $title
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CreateTimeGraph($title){}
	/**
	 * @return \System\Void|void
	 */
	public  function Render(){}
	/**
	 * @param \Avalonia\Platform\IDrawingContextImpl $targetContext
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DrawOverlays($targetContext){}
	/**
	 * @uses ServerCompositionTargetMethodsOverride::SnapToDevicePixels_1 ($rect)
	 * @uses ServerCompositionTargetMethodsOverride::SnapToDevicePixels_2 ($rect, $scale)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function SnapToDevicePixels(mixed ...$args){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function AddDirtyRect($rect){}
	/**
	 * @return \System\Void|void
	 */
	public  function Invalidate(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $visual
	 * @return \System\Void|void
	 */
	public  function AddVisual($visual){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $visual
	 * @return \System\Void|void
	 */
	public  function RemoveVisual($visual){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $visual
	 * @return \System\Void|void
	 */
	public  function EnqueueAdornerUpdate($visual){}
	/**
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamReader $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function DeserializeChangesExtra($c){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionVisual
	 */
	public  function get_Root(){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\ServerCompositionVisual $value
	 * @return \System\Void|void
	 */
	public  function set_Root($value){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsEnabled(){}
	/**
	 * @param \System\Boolean $value
	 * @return \System\Void|void
	 */
	public  function set_IsEnabled($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnIsEnabledChanged(){}
	/**
	 * @return \Avalonia\Rendering\RendererDebugOverlays
	 */
	public  function get_DebugOverlays(){}
	/**
	 * @param \Avalonia\Rendering\RendererDebugOverlays $value
	 * @return \System\Void|void
	 */
	public  function set_DebugOverlays($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDebugOverlaysChanged(){}
	/**
	 * @return \Avalonia\Rendering\LayoutPassTiming
	 */
	public  function get_LastLayoutPassTiming(){}
	/**
	 * @param \Avalonia\Rendering\LayoutPassTiming $value
	 * @return \System\Void|void
	 */
	public  function set_LastLayoutPassTiming($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnLastLayoutPassTimingChanged(){}
	/**
	 * @return \System\Double|double
	 */
	public  function get_Scaling(){}
	/**
	 * @param \System\Double|double $value
	 * @return \System\Void|void
	 */
	public  function set_Scaling($value){}
	/**
	 * @return \Avalonia\Size
	 */
	public  function get_Size(){}
	/**
	 * @param \Avalonia\Size $value
	 * @return \System\Void|void
	 */
	public  function set_Size($value){}
	/**
	 * @param \System\String|string $name
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function GetProperty($name){}
	/**
	 * @uses ServerCompositionTargetMethodsOverride::SetValue_1 ($prop, $field, $value)
	 * @uses ServerCompositionTargetMethodsOverride::SetValue_2 ($prop, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionTargetMethodsOverride::GetValue_1 ($prop, $field)
	 * @uses ServerCompositionTargetMethodsOverride::GetValue_2 ($prop, $field)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetValue(mixed ...$args){}
	/**
	 * @uses ServerCompositionTargetMethodsOverride::SetAnimatedValue_1 ($prop, $field, $committedAt, $animation)
	 * @uses ServerCompositionTargetMethodsOverride::SetAnimatedValue_2 ($property, $field, $value)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function SetAnimatedValue(mixed ...$args){}
}
