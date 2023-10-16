<?php
namespace System\Runtime\CompilerServices;
/**
 */
interface IAsyncStateMachineBox
{
	/**
	 */
	public function MoveNext();
	/**
	 */
	public function get_MoveNextAction();
	/**
	 */
	public function GetStateMachineObject();
	/**
	 */
	public function ClearStateUponCompletion();
}
