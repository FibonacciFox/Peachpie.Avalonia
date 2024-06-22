<?php
namespace Avalonia\Platform;
interface IOptionalFeatureProvider
{


	/**
	 * @param \System\Type $featureType
	 * @return \System\Object|object
	 */
	public function TryGetFeature($featureType);
}