<?php
namespace Avalonia\Media;
interface IMutableEffect
{


	/**
	 * @return \Avalonia\Media\IImmutableEffect
	 */
	protected function ToImmutable();
}