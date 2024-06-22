<?php
namespace System;
interface IAsyncDisposable
{


	/**
	 * @return \System\Threading\Tasks\ValueTask
	 */
	public function DisposeAsync();
}