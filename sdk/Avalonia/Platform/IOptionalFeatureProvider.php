<?php
namespace Avalonia\Platform;
/**
 */
interface IOptionalFeatureProvider
{
	/**
	 * @param \System\Type $featureType
	 */
	public function TryGetFeature($featureType);
}
