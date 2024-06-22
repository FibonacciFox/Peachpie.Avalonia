<?php
namespace Avalonia\Threading;
interface IControlledDispatcherImpl
{


	/**
	 * @param \System\Threading\CancellationToken $token
	 * @return \System\Void|void
	 */
	public function RunLoop($token);
}