<?php
namespace System;
/**
 */
interface IAsyncResult
{
	/**
	 */
	public function get_IsCompleted();
	/**
	 */
	public function get_AsyncWaitHandle();
	/**
	 */
	public function get_AsyncState();
	/**
	 */
	public function get_CompletedSynchronously();
}
