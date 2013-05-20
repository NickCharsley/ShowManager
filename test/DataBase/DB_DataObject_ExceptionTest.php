<?php

if (!defined("__ONS_COMMON__"))
    include_once('ons_common.php');
include_once('dbRoot.php');
/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-05-19 at 22:27:43.
 */
class DB_DataObject_ExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * @expectedException DB_DataObject_Exception
     * @todo   Implement testBackupDB().
     */
    public function testCalledInsertWithKeysThatAlreadyExist() {
        throw new DB_DataObject_Exception(utf8_encode("Testing DB_DATAOBJECT_ERROR_INSERT_KEY_EXISTS"),DB_DATAOBJECT_ERROR_INSERT_KEY_EXISTS);
    }

    /**
     * @expectedException DB_DataObject_Exception
     * @todo   Implement testBackupDB().
     */
    public function testCalledInsertWithNoNewData() {
        throw new DB_DataObject_Exception(utf8_encode("Testing DB_DATAOBJECT_ERROR_INSERT_NOT_DIRTY"),DB_DATAOBJECT_ERROR_INSERT_NOT_DIRTY);
    }

    /**
     * @expectedException DB_DataObject_Exception
     * @todo   Implement testBackupDB().
     */
    public function testCalledUpdateWithNoNewData() {
        throw new DB_DataObject_Exception(utf8_encode("Testing DB_DATAOBJECT_ERROR_UPDATE_NOT_DIRTY"),DB_DATAOBJECT_ERROR_UPDATE_NOT_DIRTY);
    }

    /**
     * @expectedException DB_DataObject_Exception
     * @todo   Implement testBackupDB().
     */
    public function testCalledInsertWithDuplicateRowUUID() {
        throw new DB_DataObject_Exception(utf8_encode("Testing DB_DATAOBJECT_ERROR_DUPLICATE_ROWUUID"),DB_DATAOBJECT_ERROR_DUPLICATE_ROWUUID);
    }

    /**
     * @expectedException DB_DataObject_Exception
     * @todo   Implement testBackupDB().
     */
    public function testErrorInUnderlyingCode() {
        throw new DB_DataObject_Exception(utf8_encode("Testing DB_DATAOBJECT_ERROR"),DB_DATAOBJECT_ERROR);
    }

    /**
     * @expectedException DB_DataObject_Exception
     * @todo   Implement testBackupDB().
     */
    public function testClassHasNotImplementedImportantMethod() {
        throw new DB_DataObject_Exception(utf8_encode("Testing DB_DATAOBJECT_ERROR_OVERRIDE_METHOD"),DB_DATAOBJECT_ERROR_OVERRIDE_METHOD);
    }

    /**
     * @todo   Implement testBackupDB().
     */
    public function testLinkLoadedFlagNotLoadedYetIsSet() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
        //Flag=DB_DATAOBJECT_NOT_LOADED
    }

    /**
     * @todo   Implement testBackupDB().
     */
    public function testLinkLoadedFlagLoadedIsSet() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
        //Flag=DB_DATAOBJECT_LOADED
    }

    /**
     * @todo   Implement testBackupDB().
     */
    public function testLinkLoadedFlagAddedIsSet() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
        //Flag=DB_DATAOBJECT_ADDED
    }

    /**
     * @todo   Implement testBackupDB().
     */
    public function testLinkLoadedFlagNeedsToBeDeletedIsSet() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
        //Flag=DB_DATAOBJECT_DELETED
    }

}
