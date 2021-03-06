<?php
/**
 * Altapay Module for Magento 2.x.
 *
 * Copyright © 2018 Altapay. All rights reserved.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SDM\Altapay\Test\Unit\Model\Config\Source;

use SDM\Altapay\Model\Config\Source\Languages as ClassToTest;
use Magento\Config\Model\Config\Source\Locale;
use Magento\Framework\TestFramework\Unit\Helper\ObjectManager;
use SDM\Altapay\Test\Unit\MainTestCase;

class LanguagesTest extends MainTestCase
{
    /**
     * @var ClassToTest
     */
    private $classToTest;

    protected function setUp()
    {
        $objectManager     = $this->getObjectManager();
        $this->classToTest = $objectManager->getObject(ClassToTest::class);
    }

    public function testToOptionArray()
    {
        $result = $this->classToTest->toOptionArray();
        $this->assertCount(count($result), $result);
    }
}
