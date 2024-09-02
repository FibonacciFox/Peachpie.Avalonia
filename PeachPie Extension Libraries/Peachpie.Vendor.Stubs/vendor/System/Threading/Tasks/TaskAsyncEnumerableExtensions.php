<?php
namespace System\Threading\Tasks;
/**
 * @deprecated this element should not be used by you because it will break your program
*/
trait TaskAsyncEnumerableExtensionsOverride {
	/**
	 * @deprecated
	 * @param \System\IAsyncDisposable $source
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredAsyncDisposable
	 */
	#[MethodOverride]public static function ConfigureAwait_1 ($source, $continueOnCapturedContext){}
	/**
	 * @deprecated
	 * @param \System\Collections\Generic\IAsyncEnumerable_1 $source [generic: T]
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1
	 */
	#[MethodOverride]public static function ConfigureAwait_2 ($source, $continueOnCapturedContext){}
}
class TaskAsyncEnumerableExtensions extends \System\Object
{
	use TaskAsyncEnumerableExtensionsOverride;

	/**
	 * @uses TaskAsyncEnumerableExtensionsOverride::ConfigureAwait_1 <br>public , args: ($source, $continueOnCapturedContext)<br>
	 * @uses TaskAsyncEnumerableExtensionsOverride::ConfigureAwait_2 <br>public , args: ($source, $continueOnCapturedContext)<br>
	 * @var mixed|\override ...$args
	 * @return \System\Runtime\CompilerServices\ConfiguredAsyncDisposable|\System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1|mixed|\override
	 */
	#[MethodOverridePublic]function ConfigureAwait (\override ...$args){}
	/**
	 * @param \System\Collections\Generic\IAsyncEnumerable_1 $source [generic: T]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1[T]
	 */
	public static function WithCancellation($source, $cancellationToken){}
	/**
	 * @param \System\Collections\Generic\IAsyncEnumerable_1 $source [generic: T]
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Collections\Generic\IEnumerable_1[T]
	 */
	public static function ToBlockingEnumerable($source, $cancellationToken){}
}