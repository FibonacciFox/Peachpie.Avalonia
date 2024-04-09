<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait CompositorOverride {
	/**
	 * @deprecated
	 * @param \System\Action $job
	 * @return \System\Threading\Tasks\Task
	 */
	#[MethodOverride]protected function InvokeServerJobAsync_1 ($job){}
	/**
	 * @deprecated
	 * @param \System\Func_1 $job [generic: T]
	 * @return \System\Threading\Tasks\Task_1
	 */
	#[MethodOverride]protected function InvokeServerJobAsync_2 ($job){}
	/**
	 * @deprecated
	 * @return \Avalonia\Rendering\Composition\Animations\ExpressionAnimation
	 */
	#[MethodOverride]public function CreateExpressionAnimation_1 (){}
	/**
	 * @deprecated
	 * @param \System\String|string $expression
	 * @return \Avalonia\Rendering\Composition\Animations\ExpressionAnimation
	 */
	#[MethodOverride]public function CreateExpressionAnimation_2 ($expression){}
}
class Compositor extends \System\Object
{
	use CompositorOverride;

	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	protected function add_AfterCommit($value){}
	/**
	 * @param \System\Action $value
	 * @return \System\Void|void
	 */
	protected function remove_AfterCommit($value){}
	/**
	 * @return \System\Threading\Tasks\Task
	 */
	public function RequestCommitAsync(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\CompositionBatch
	 */
	public function RequestCompositionBatchCommitAsync(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Transport\CompositionBatch
	 */
	protected function Commit(){}
	private function CommitCore(){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $compositionObject
	 * @return \System\Void|void
	 */
	protected function RegisterForSerialization($compositionObject){}
	/**
	 * @param \Avalonia\Rendering\Composition\Server\SimpleServerObject $obj
	 * @return \System\Void|void
	 */
	protected function DisposeOnNextBatch($obj){}
	/**
	 * @param \System\Action $action
	 * @return \System\Void|void
	 */
	public function RequestCompositionUpdate($action){}
	/**
	 * @param \System\Action $job
	 * @return \System\Void|void
	 */
	protected function PostServerJob($job){}
	/**
	 * @uses CompositorOverride::InvokeServerJobAsync_1 <br>protected , args: ($job)<br>
	 * @uses CompositorOverride::InvokeServerJobAsync_2 <br>protected , args: ($job)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Threading\Tasks\Task|\System\Threading\Tasks\Task_1|mixed|\override
	 */
	#[MethodOverrideProtected]function InvokeServerJobAsync (\override ...$args){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1[System\Collections\Generic\IReadOnlyDictionary_2[System\Type,System\Object]]
	 */
	protected function GetRenderInterfacePublicFeatures(){}
	/**
	 * @param \System\Type $featureType
	 * @return \System\Threading\Tasks\ValueTask_1[System\Object]
	 */
	public function TryGetRenderInterfaceFeature($featureType){}
	/**
	 * @return \System\Threading\Tasks\ValueTask_1[Avalonia\Rendering\Composition\ICompositionGpuInterop]
	 */
	public function TryGetCompositionGpuInterop(){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositorSerializable $serializable
	 * @return \System\Boolean|bool
	 */
	protected function UnitTestIsRegisteredForSerialization($serializable){}
	/**
	 * @return \Avalonia\Rendering\Composition\Compositor
	 */
	public static function TryGetDefaultCompositor(){}
	/**
	 * @param \System\Func_1 $surfaces [generic: System\Collections\Generic\IEnumerable_1[System\Object]
	 * @return \Avalonia\Rendering\Composition\CompositionTarget
	 */
	protected function CreateCompositionTarget($surfaces){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionContainerVisual
	 */
	public function CreateContainerVisual(){}
	/**
	 * @uses CompositorOverride::CreateExpressionAnimation_1 <br>public , args: ()<br>
	 * @uses CompositorOverride::CreateExpressionAnimation_2 <br>public , args: ($expression)<br>
	 * @var mixed|\override ...$args
	 * @return \Avalonia\Rendering\Composition\Animations\ExpressionAnimation|mixed|\override
	 */
	#[MethodOverridePublic]function CreateExpressionAnimation (\override ...$args){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\ImplicitAnimationCollection
	 */
	public function CreateImplicitAnimationCollection(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Animations\CompositionAnimationGroup
	 */
	public function CreateAnimationGroup(){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionSolidColorVisual
	 */
	public function CreateSolidColorVisual(){}
	/**
	 * @param \Avalonia\Rendering\Composition\CompositionCustomVisualHandler $handler
	 * @return \Avalonia\Rendering\Composition\CompositionCustomVisual
	 */
	public function CreateCustomVisual($handler){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionSurfaceVisual
	 */
	public function CreateSurfaceVisual(){}
	/**
	 * @return \Avalonia\Rendering\Composition\CompositionDrawingSurface
	 */
	public function CreateDrawingSurface(){}
	/**
	 * @return \Avalonia\Rendering\Composition\ScalarKeyFrameAnimation
	 */
	public function CreateScalarKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\DoubleKeyFrameAnimation
	 */
	public function CreateDoubleKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\BooleanKeyFrameAnimation
	 */
	public function CreateBooleanKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\ColorKeyFrameAnimation
	 */
	public function CreateColorKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\VectorKeyFrameAnimation
	 */
	public function CreateVectorKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector2KeyFrameAnimation
	 */
	public function CreateVector2KeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector3KeyFrameAnimation
	 */
	public function CreateVector3KeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector3DKeyFrameAnimation
	 */
	public function CreateVector3DKeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Vector4KeyFrameAnimation
	 */
	public function CreateVector4KeyFrameAnimation(){}
	/**
	 * @return \Avalonia\Rendering\Composition\QuaternionKeyFrameAnimation
	 */
	public function CreateQuaternionKeyFrameAnimation(){}
	/**
	 * @param \Avalonia\Platform\IPlatformGraphics $gpu
	 * @param \System\Boolean|bool $useUiThreadForSynchronousCommits
	 */
	public function __construct($gpu, $useUiThreadForSynchronousCommits){}
}