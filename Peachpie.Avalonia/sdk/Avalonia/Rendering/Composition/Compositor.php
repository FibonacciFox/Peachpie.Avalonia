<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositorMethodsOverride
{
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride] protected  function InvokeServerJobAsync_1($job){}
	/**
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride] protected  function InvokeServerJobAsync_2($job){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ExpressionAnimation
	 */
	#[MethodOverride] public  function CreateExpressionAnimation_1(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ExpressionAnimation
	 */
	#[MethodOverride] public  function CreateExpressionAnimation_2($expression){}
}
/**
 */
class Compositor extends \System\Object
{
	/**
	 * @return \Avalonia\Rendering\IRenderLoop
	 */
	protected  function get_Loop(){}
	/**
	 * @return \System\Boolean
	 */
	protected  function get_UseUiThreadForSynchronousCommits(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositor
	 */
	protected  function get_Server(){}
	/**
	 * @return \Avalonia\Animation\Easings\IEasing
	 */
	protected  function get_DefaultEasing(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function get_DiagnosticTextRenderer(){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	protected  function add_AfterCommit($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	protected  function remove_AfterCommit($value){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public  function RequestCommitAsync(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\Batch
	 */
	protected  function Commit(){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function CommitCore(){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $compositionObject
	 * @return \System\Void|void
	 */
	protected  function RegisterForSerialization($compositionObject){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\SimpleServerObject $obj
	 * @return \System\Void|void
	 */
	protected  function DisposeOnNextBatch($obj){}
	/**
	 * @param \System\Action $action
	 * @return \System\Void|void
	 */
	public  function RequestCompositionUpdate($action){}
	/**
	 * @param \System\Action $job
	 * @return \System\Void|void
	 */
	protected  function PostServerJob($job){}
	/**
	 * @uses CompositorMethodsOverride::InvokeServerJobAsync_1 ($job)
	 * @uses CompositorMethodsOverride::InvokeServerJobAsync_2 ($job)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function InvokeServerJobAsync(mixed ...$args){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function TryGetRenderInterfaceFeature($featureType){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1
	 */
	public  function TryGetCompositionGpuInterop(){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $serializable
	 * @return \System\Boolean
	 */
	protected  function UnitTestIsRegisteredForSerialization($serializable){}
	/**
	 * @param \System\Func_1 $surfaces
	 * @return \Avalonia\Rendering\Composition\CompositionTarget
	 */
	protected  function CreateCompositionTarget($surfaces){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionContainerVisual
	 */
	public  function CreateContainerVisual(){}
	/**
	 * @uses CompositorMethodsOverride::CreateExpressionAnimation_1 ()
	 * @uses CompositorMethodsOverride::CreateExpressionAnimation_2 ($expression)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function CreateExpressionAnimation(mixed ...$args){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 */
	public  function CreateImplicitAnimationCollection(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\CompositionAnimationGroup
	 */
	public  function CreateAnimationGroup(){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionSolidColorVisual
	 */
	public  function CreateSolidColorVisual(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionCustomVisualHandler $handler
	 * @return \Avalonia\Rendering\Composition\CompositionCustomVisual
	 */
	public  function CreateCustomVisual($handler){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionSurfaceVisual
	 */
	public  function CreateSurfaceVisual(){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionDrawingSurface
	 */
	public  function CreateDrawingSurface(){}
	/**
	 * @return \Avalonia\Rendering\Composition\ScalarKeyFrameAnimation
	 */
	public  function CreateScalarKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\DoubleKeyFrameAnimation
	 */
	public  function CreateDoubleKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\BooleanKeyFrameAnimation
	 */
	public  function CreateBooleanKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\ColorKeyFrameAnimation
	 */
	public  function CreateColorKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\VectorKeyFrameAnimation
	 */
	public  function CreateVectorKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector2KeyFrameAnimation
	 */
	public  function CreateVector2KeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector3KeyFrameAnimation
	 */
	public  function CreateVector3KeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector3DKeyFrameAnimation
	 */
	public  function CreateVector3DKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector4KeyFrameAnimation
	 */
	public  function CreateVector4KeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\QuaternionKeyFrameAnimation
	 */
	public  function CreateQuaternionKeyFrameAnimation(){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
