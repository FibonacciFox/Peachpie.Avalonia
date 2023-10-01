<?php
namespace Avalonia\Rendering\Composition;
/**
 */
class CompositingRenderer extends \System\Object implements 
	\Avalonia\Rendering\IRendererWithCompositor,
	\Avalonia\Rendering\IRenderer,
	\System\IDisposable,
	\Avalonia\Rendering\IHitTester
{
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionTarget
	 */
	protected  function get_CompositionTarget(){}
	/**
	 * @return \Avalonia\Rendering\RendererDiagnostics
	 */
	public  function get_Diagnostics(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public  function get_Compositor(){}
	/**
	 * @param \System\Object|object $sender
	 * @param \System\ComponentModel\PropertyChangedEventArgs $e
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function OnDiagnosticsPropertyChanged($sender, $e){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function add_SceneInvalidated($value){}
	/**
	 * @param \System\EventHandler_1 $value
	 * @return \System\Void|void
	 */
	public  function remove_SceneInvalidated($value){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function QueueUpdate(){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public  function AddDirty($visual){}
	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public  function HitTest($p, $root, $filter){}
	/**
	 * @param \Avalonia\Point $p
	 * @param \Avalonia\Visual $root
	 * @param \System\Func_2 $filter
	 * @return \Avalonia\Visual
	 */
	public  function HitTestFirst($p, $root, $filter){}
	/**
	 * @param \Avalonia\Visual $visual
	 * @return \System\Void|void
	 */
	public  function RecalculateChildren($visual){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function UpdateCore(){}
	/**
	 * @param \System\Threading\Tasks\Task $batchCompletion
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TriggerSceneInvalidatedOnBatchCompletion($batchCompletion){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function TriggerSceneInvalidatedForUnitTests($rect){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Update(){}
	/**
	 * @param \Avalonia\Size $size
	 * @return \System\Void|void
	 */
	public  function Resized($size){}
	/**
	 * @param \Avalonia\Rect $rect
	 * @return \System\Void|void
	 */
	public  function Paint($rect){}
	/**
	 * @return \System\Void|void
	 */
	public  function Start(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Stop(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function TryGetRenderInterfaceFeature($featureType){}
	/**
	 * @return \System\Boolean
	 */
	public  function get_IsDisposed(){}
	/**
	 * @return \System\Void|void
	 */
	public  function Dispose(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
