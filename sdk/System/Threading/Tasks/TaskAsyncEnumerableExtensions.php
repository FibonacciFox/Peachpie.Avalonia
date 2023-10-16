<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait TaskAsyncEnumerableExtensionsMethodsOverride
{
	/**
	 * @return \System\Runtime\CompilerServices\ConfiguredAsyncDisposable
	 */
	#[MethodOverride] public static function ConfigureAwait_1($source, $continueOnCapturedContext){}
	/**
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1
	 */
	#[MethodOverride] public static function ConfigureAwait_2($source, $continueOnCapturedContext){}
}
/**
 */
class TaskAsyncEnumerableExtensions extends \System\Object
{
	/**
	 * @uses TaskAsyncEnumerableExtensionsMethodsOverride::ConfigureAwait_1 ($source, $continueOnCapturedContext)
	 * @uses TaskAsyncEnumerableExtensionsMethodsOverride::ConfigureAwait_2 ($source, $continueOnCapturedContext)
	 * @return mixed|@override
	 */
	#[MethodOverride] static function ConfigureAwait(mixed ...$args){}
	/**
	 * @param \System\Collections\Generic\IAsyncEnumerable_1 $source
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1
	 */
	public static function WithCancellation($source, $cancellationToken){}
	/**
	 * @param \System\Collections\Generic\IAsyncEnumerable_1 $source
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Collections\Generic\IEnumerable_1
	 */
	public static function ToBlockingEnumerable($source, $cancellationToken){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
