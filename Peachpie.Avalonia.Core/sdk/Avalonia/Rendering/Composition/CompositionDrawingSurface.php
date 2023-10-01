<?php
namespace Avalonia\Rendering\Composition;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait CompositionDrawingSurfaceMethodsOverride
{
	/**
	 * @return \Avalonia\Rendering\Composition\Server\ServerCompositionDrawingSurface
	 */
	#[MethodOverride] protected  function get_Server_1(){}
	/**
	 * @return \Avalonia\Rendering\Composition\Server\SimpleServerObject
	 */
	#[MethodOverride] protected  function get_Server_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function Dispose_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function Dispose_2(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimation_1($propertyName, $animation){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function StartAnimation_2($propertyName, $animation, $finalValue){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] public  function StartAnimationGroup_1($grp){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] protected  function StartAnimationGroup_2($grp, $target, $finalValue){}
}
/**
 */
class CompositionDrawingSurface extends \Avalonia\Rendering\Composition\CompositionSurface implements 
	\Avalonia\Rendering\Composition\ICompositorSerializable,
	\System\IDisposable
{
	/**
	 * @uses CompositionDrawingSurfaceMethodsOverride::get_Server_1 ()
	 * @uses CompositionDrawingSurfaceMethodsOverride::get_Server_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Server(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuImage $image
	 * @param \System\UInt32 $acquireIndex
	 * @param \System\UInt32 $releaseIndex
	 * @return \System\Threading\Tasks\Task
	 */
	public  function UpdateWithKeyedMutexAsync($image, $acquireIndex, $releaseIndex){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuImage $image
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore $waitForSemaphore
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuSemaphore $signalSemaphore
	 * @return \System\Threading\Tasks\Task
	 */
	public  function UpdateWithSemaphoresAsync($image, $waitForSemaphore, $signalSemaphore){}
	/**
	 * @param \Avalonia\Rendering\Composition\ICompositionImportedGpuImage $image
	 * @return \System\Threading\Tasks\Task
	 */
	public  function UpdateAsync($image){}
	/**
	 * @uses CompositionDrawingSurfaceMethodsOverride::Dispose_1 ()
	 * @uses CompositionDrawingSurfaceMethodsOverride::Dispose_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Dispose(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function TryGetServer($c){}
	/**
	 * @uses CompositionDrawingSurfaceMethodsOverride::StartAnimation_1 ($propertyName, $animation)
	 * @uses CompositionDrawingSurfaceMethodsOverride::StartAnimation_2 ($propertyName, $animation, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimation(mixed ...$args){}
	/**
	 * @uses CompositionDrawingSurfaceMethodsOverride::StartAnimationGroup_1 ($grp)
	 * @uses CompositionDrawingSurfaceMethodsOverride::StartAnimationGroup_2 ($grp, $target, $finalValue)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function StartAnimationGroup(mixed ...$args){}
	/**
	 * @param \Avalonia\Rendering\Composition\Compositor $c
	 * @param \Avalonia\Rendering\Composition\Transport\BatchStreamWriter $writer
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function SerializeChanges($c, $writer){}
}
