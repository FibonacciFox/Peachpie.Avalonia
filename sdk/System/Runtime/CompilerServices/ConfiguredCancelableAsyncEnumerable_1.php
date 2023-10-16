<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class ConfiguredCancelableAsyncEnumerable_1 extends \System\ValueType
{
	/**
	 * @param \System\Boolean $continueOnCapturedContext
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1
	 */
	public  function ConfigureAwait($continueOnCapturedContext){}
	/**
	 * @param \System\Threading\CancellationToken $cancellationToken
	 * @return \System\Runtime\CompilerServices\ConfiguredCancelableAsyncEnumerable_1
	 */
	public  function WithCancellation($cancellationToken){}
	/**
	 * @return \System\Runtime\CompilerServices\Enumerator
	 */
	public  function GetAsyncEnumerator(){}
}
