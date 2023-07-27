<?php
/**
 * WeArePlanet Magento 2
 *
 * This Magento 2 extension enables to process payments with WeArePlanet (https://www.weareplanet.com//).
 *
 * @package WeArePlanet_Payment
 * @author wallee AG (http://www.wallee.com/)
 * @license http://www.apache.org/licenses/LICENSE-2.0  Apache Software License (ASL 2.0)
 */
namespace WeArePlanet\Payment\Model\Config\Source;

/**
 * Provides the integration methods as array options.
 */
class GdprMode implements \Magento\Framework\Option\ArrayInterface
{

    const ENABLED = 'enabled';
    const DISABLED = 'disabled';

    public function toOptionArray()
    {
        return [
            [
                'value' => self::ENABLED,
                'label' => \__('Enabled')
            ],
            [
                'value' => self::DISABLED,
                'label' => \__('Disabled')
            ]
        ];
    }
}