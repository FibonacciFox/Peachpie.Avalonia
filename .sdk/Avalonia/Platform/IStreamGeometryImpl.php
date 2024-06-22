<?php
namespace Avalonia\Platform;
interface IStreamGeometryImpl
{


	/**
	 * @return \Avalonia\Platform\IStreamGeometryImpl
	 */
	public function Clone();
	/**
	 * @return \Avalonia\Platform\IStreamGeometryContextImpl
	 */
	public function Open();
}