<?php

class HostPolicy extends \System\Object
{

	/**
	 * @param \System\String|string $componentMainAssemblyPath
	 * @param \Interop+HostPolicy+corehost_resolve_component_dependencies_result_fn $result
	 * @return \System\Int32|int
	 */
	protected static function corehost_resolve_component_dependencies($componentMainAssemblyPath, $result){}
	/**
	 * @param \System\IntPtr $errorWriter
	 * @return \System\IntPtr
	 */
	protected static function corehost_set_error_writer($errorWriter){}
}