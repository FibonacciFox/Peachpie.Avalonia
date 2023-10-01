<?php
namespace Avalonia\Threading;
/**
 */
interface IControlledDispatcherImpl
{
	/**
	 * @param \System\Threading\CancellationToken $token
	 */
	public function RunLoop($token);
}
