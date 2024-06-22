<?php
namespace System\Threading;
interface IThreadPoolWorkItem
{


	/**
	 * @return \System\Void|void
	 */
	public function Execute();
}