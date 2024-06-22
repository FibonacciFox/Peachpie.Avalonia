<?php
namespace System;
final class ActivatorCache extends \System\Object
{


	/**
	 * @param \System\RuntimeType $rt
	 * @return \System\Object|object
	 */
	protected function CreateUninitializedObject($rt){}
	/**
	 * @param \System\Object|object $uninitializedObject
	 * @return \System\Void|void
	 */
	protected function CallConstructor($uninitializedObject){}
}