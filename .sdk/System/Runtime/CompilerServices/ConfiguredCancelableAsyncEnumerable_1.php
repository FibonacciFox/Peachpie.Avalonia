<?php
namespace System\Runtime\CompilerServices;
final class ConfiguredCancelableAsyncEnumerable_1 extends \System\ValueType
{


	/**
	 * @param \System\Boolean|bool $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1[T]
	 */
	public function ConfigureAwait($continueOnCapturedContext){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1[T]
	 */
	public function WithCancellation($cancellationToken){}
	/**
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1+Enumerator[T]
	 */
	public function GetAsyncEnumerator(){}
}