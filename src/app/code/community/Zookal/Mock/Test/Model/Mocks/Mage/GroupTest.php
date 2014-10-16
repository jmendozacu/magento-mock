<?php

/**
 * @category    Zookal_Mock
 * @package     Test
 * @author      Cyrill Schumacher | {firstName}@{lastName}.fm | @SchumacherFM
 * @copyright   Copyright (c) Zookal Pty Ltd
 * @license     OSL - Open Software Licence 3.0 | http://opensource.org/licenses/osl-3.0.php
 */
class Zookal_Mock_Test_Model_Mocks_Mage_GroupTest extends Zookal_Mock_Test_Model_Mocks_Mage_AbstractPHPUnitTestCase
{
    protected $_class = 'Zookal_Mock_Model_Mocks_Mage_Group';

    /**
     * @test
     */
    public function itShouldHaveAGetTaxClassIdMethod()
    {
        $this->assertTrue(method_exists($this->_class, 'getTaxClassId'));
    }

    /**
     * @test
     */
    public function itShouldReturnOne()
    {
        $this->assertEquals(1, $this->getInstance()->getTaxClassId());
    }
}