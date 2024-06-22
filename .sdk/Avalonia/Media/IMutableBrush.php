<?php
namespace Avalonia\Media;
interface IMutableBrush
{


	/**
	 * @return \Avalonia\Media\IImmutableBrush
	 */
	protected function ToImmutable();
}