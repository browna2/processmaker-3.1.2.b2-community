<?php

require_once 'propel/util/BasePeer.php';
// The object class -- needed for instanceof checks in this class.
// actual class may be a subclass -- as returned by PmtPmtAbTestPeer::getOMClass()
include_once 'classes/PmtPmtAbTest.php';

/**
 * Base static class for performing query and update operations on the 'PMT_PMT_AB_TEST' table.
 *
 * 
 *
 * @package    workflow.classes.om
 */
abstract class BasePmtPmtAbTestPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'PMT_PMT_AB_TEST';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.PmtPmtAbTest';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;


    /** the column name for the APP_UID field */
    const APP_UID = 'PMT_PMT_AB_TEST.APP_UID';

    /** the column name for the APP_NUMBER field */
    const APP_NUMBER = 'PMT_PMT_AB_TEST.APP_NUMBER';

    /** the column name for the APP_STATUS field */
    const APP_STATUS = 'PMT_PMT_AB_TEST.APP_STATUS';

    /** the column name for the RADIOMANAGERAPPROVED field */
    const RADIOMANAGERAPPROVED = 'PMT_PMT_AB_TEST.RADIOMANAGERAPPROVED';

    /** the column name for the CHECKBOXALLROLES field */
    const CHECKBOXALLROLES = 'PMT_PMT_AB_TEST.CHECKBOXALLROLES';

    /** the column name for the TEXTAREAMANAGERCOMMENTS field */
    const TEXTAREAMANAGERCOMMENTS = 'PMT_PMT_AB_TEST.TEXTAREAMANAGERCOMMENTS';

    /** the column name for the TXTMANAGERUID01 field */
    const TXTMANAGERUID01 = 'PMT_PMT_AB_TEST.TXTMANAGERUID01';

    /** the column name for the TXTPOSREF01 field */
    const TXTPOSREF01 = 'PMT_PMT_AB_TEST.TXTPOSREF01';

    /** the column name for the TXTROLES field */
    const TXTROLES = 'PMT_PMT_AB_TEST.TXTROLES';

    /** The PHP to DB Name Mapping */
    private static $phpNameMap = null;


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    private static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid', 'AppNumber', 'AppStatus', 'Radiomanagerapproved', 'Checkboxallroles', 'Textareamanagercomments', 'Txtmanageruid01', 'Txtposref01', 'Txtroles', ),
        BasePeer::TYPE_COLNAME => array (PmtPmtAbTestPeer::APP_UID, PmtPmtAbTestPeer::APP_NUMBER, PmtPmtAbTestPeer::APP_STATUS, PmtPmtAbTestPeer::RADIOMANAGERAPPROVED, PmtPmtAbTestPeer::CHECKBOXALLROLES, PmtPmtAbTestPeer::TEXTAREAMANAGERCOMMENTS, PmtPmtAbTestPeer::TXTMANAGERUID01, PmtPmtAbTestPeer::TXTPOSREF01, PmtPmtAbTestPeer::TXTROLES, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID', 'APP_NUMBER', 'APP_STATUS', 'RADIOMANAGERAPPROVED', 'CHECKBOXALLROLES', 'TEXTAREAMANAGERCOMMENTS', 'TXTMANAGERUID01', 'TXTPOSREF01', 'TXTROLES', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    private static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('AppUid' => 0, 'AppNumber' => 1, 'AppStatus' => 2, 'Radiomanagerapproved' => 3, 'Checkboxallroles' => 4, 'Textareamanagercomments' => 5, 'Txtmanageruid01' => 6, 'Txtposref01' => 7, 'Txtroles' => 8, ),
        BasePeer::TYPE_COLNAME => array (PmtPmtAbTestPeer::APP_UID => 0, PmtPmtAbTestPeer::APP_NUMBER => 1, PmtPmtAbTestPeer::APP_STATUS => 2, PmtPmtAbTestPeer::RADIOMANAGERAPPROVED => 3, PmtPmtAbTestPeer::CHECKBOXALLROLES => 4, PmtPmtAbTestPeer::TEXTAREAMANAGERCOMMENTS => 5, PmtPmtAbTestPeer::TXTMANAGERUID01 => 6, PmtPmtAbTestPeer::TXTPOSREF01 => 7, PmtPmtAbTestPeer::TXTROLES => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('APP_UID' => 0, 'APP_NUMBER' => 1, 'APP_STATUS' => 2, 'RADIOMANAGERAPPROVED' => 3, 'CHECKBOXALLROLES' => 4, 'TEXTAREAMANAGERCOMMENTS' => 5, 'TXTMANAGERUID01' => 6, 'TXTPOSREF01' => 7, 'TXTROLES' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * @return     MapBuilder the map builder for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getMapBuilder()
    {
        include_once 'classes/map/PmtPmtAbTestMapBuilder.php';
        return BasePeer::getMapBuilder('classes.map.PmtPmtAbTestMapBuilder');
    }
    /**
     * Gets a map (hash) of PHP names to DB column names.
     *
     * @return     array The PHP to DB name map for this peer
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @deprecated Use the getFieldNames() and translateFieldName() methods instead of this.
     */
    public static function getPhpNameMap()
    {
        if (self::$phpNameMap === null) {
            $map = PmtPmtAbTestPeer::getTableMap();
            $columns = $map->getColumns();
            $nameMap = array();
            foreach ($columns as $column) {
                $nameMap[$column->getPhpName()] = $column->getColumnName();
            }
            self::$phpNameMap = $nameMap;
        }
        return self::$phpNameMap;
    }
    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants TYPE_PHPNAME,
     *                         TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return     string translated name of the field.
     */
    static public function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }
        return $toNames[$key];
    }

    /**
     * Returns an array of of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants TYPE_PHPNAME,
     *                      TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     array A list of field names
     */

    static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM. ' . $type . ' was given.');
        }
        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *      $c->addAlias("alias1", TablePeer::TABLE_NAME);
     *      $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. PmtPmtAbTestPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PmtPmtAbTestPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      criteria object containing the columns to add.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria)
    {

        $criteria->addSelectColumn(PmtPmtAbTestPeer::APP_UID);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::APP_NUMBER);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::APP_STATUS);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::RADIOMANAGERAPPROVED);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::CHECKBOXALLROLES);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::TEXTAREAMANAGERCOMMENTS);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::TXTMANAGERUID01);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::TXTPOSREF01);

        $criteria->addSelectColumn(PmtPmtAbTestPeer::TXTROLES);

    }

    const COUNT = 'COUNT(PMT_PMT_AB_TEST.APP_UID)';
    const COUNT_DISTINCT = 'COUNT(DISTINCT PMT_PMT_AB_TEST.APP_UID)';

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns (You can also set DISTINCT modifier in Criteria).
     * @param      Connection $con
     * @return     int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, $con = null)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // clear out anything that might confuse the ORDER BY clause
        $criteria->clearSelectColumns()->clearOrderByColumns();
        if ($distinct || in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->addSelectColumn(PmtPmtAbTestPeer::COUNT_DISTINCT);
        } else {
            $criteria->addSelectColumn(PmtPmtAbTestPeer::COUNT);
        }

        // just in case we're grouping: add those columns to the select statement
        foreach ($criteria->getGroupByColumns() as $column) {
            $criteria->addSelectColumn($column);
        }

        $rs = PmtPmtAbTestPeer::doSelectRS($criteria, $con);
        if ($rs->next()) {
            return $rs->getInt(1);
        } else {
            // no rows returned; we infer that means 0 matches.
            return 0;
        }
    }
    /**
     * Method to select one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      Connection $con
     * @return     PmtPmtAbTest
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PmtPmtAbTestPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }
        return null;
    }
    /**
     * Method to do selects.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con
     * @return     array Array of selected Objects
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, $con = null)
    {
        return PmtPmtAbTestPeer::populateObjects(PmtPmtAbTestPeer::doSelectRS($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect()
     * method to get a ResultSet.
     *
     * Use this method directly if you want to just get the resultset
     * (instead of an array of objects).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      Connection $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     * @return     ResultSet The resultset object with numerically-indexed fields.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectRS(Criteria $criteria, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if (!$criteria->getSelectColumns()) {
            $criteria = clone $criteria;
            PmtPmtAbTestPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a Creole ResultSet, set to return
        // rows indexed numerically.
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function populateObjects(ResultSet $rs)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = PmtPmtAbTestPeer::getOMClass();
        $cls = Propel::import($cls);
        // populate the object(s)
        while ($rs->next()) {

            $obj = new $cls();
            $obj->hydrate($rs);
            $results[] = $obj;

        }
        return $results;
    }
    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return     TableMap
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * The class that the Peer will make instances of.
     *
     * This uses a dot-path notation which is tranalted into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @return     string path.to.ClassName
     */
    public static function getOMClass()
    {
        return PmtPmtAbTestPeer::CLASS_DEFAULT;
    }

    /**
     * Method perform an INSERT on the database, given a PmtPmtAbTest or Criteria object.
     *
     * @param      mixed $values Criteria or PmtPmtAbTest object containing data that is used to create the INSERT statement.
     * @param      Connection $con the connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from PmtPmtAbTest object
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->begin();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }

        return $pk;
    }

    /**
     * Method perform an UPDATE on the database, given a PmtPmtAbTest or Criteria object.
     *
     * @param      mixed $values Criteria or PmtPmtAbTest object containing data create the UPDATE statement.
     * @param      Connection $con The connection to use (specify Connection exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PmtPmtAbTestPeer::APP_UID);
            $selectCriteria->add(PmtPmtAbTestPeer::APP_UID, $criteria->remove(PmtPmtAbTestPeer::APP_UID), $comparison);

        } else {
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Method to DELETE all rows from the PMT_PMT_AB_TEST table.
     *
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll($con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();
            $affectedRows += BasePeer::doDeleteAll(PmtPmtAbTestPeer::TABLE_NAME, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Method perform a DELETE on the database, given a PmtPmtAbTest or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or PmtPmtAbTest object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      Connection $con the connection to use
     * @return     int  The number of affected rows (if supported by underlying database driver).
     *             This includes CASCADE-related rows
     *              if supported by native driver or if emulated using Propel.
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
    */
    public static function doDelete($values, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PmtPmtAbTestPeer::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } elseif ($values instanceof PmtPmtAbTest) {

            $criteria = $values->buildPkeyCriteria();
        } else {
            // it must be the primary key
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(PmtPmtAbTestPeer::APP_UID, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->begin();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given PmtPmtAbTest object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      PmtPmtAbTest $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate(PmtPmtAbTest $obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PmtPmtAbTestPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PmtPmtAbTestPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->containsColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(PmtPmtAbTestPeer::DATABASE_NAME, PmtPmtAbTestPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      mixed $pk the primary key.
     * @param      Connection $con the connection to use
     * @return     PmtPmtAbTest
     */
    public static function retrieveByPK($pk, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $criteria = new Criteria(PmtPmtAbTestPeer::DATABASE_NAME);

        $criteria->add(PmtPmtAbTestPeer::APP_UID, $pk);


        $v = PmtPmtAbTestPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      Connection $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *       rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(self::DATABASE_NAME);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria();
            $criteria->add(PmtPmtAbTestPeer::APP_UID, $pks, Criteria::IN);
            $objs = PmtPmtAbTestPeer::doSelect($criteria, $con);
        }
        return $objs;
    }
}


// static code to register the map builder for this Peer with the main Propel class
if (Propel::isInit()) {
    // the MapBuilder classes register themselves with Propel during initialization
    // so we need to load them here.
    try {
        BasePmtPmtAbTestPeer::getMapBuilder();
    } catch (Exception $e) {
        Propel::log('Could not initialize Peer: ' . $e->getMessage(), Propel::LOG_ERR);
    }
} else {
    // even if Propel is not yet initialized, the map builder class can be registered
    // now and then it will be loaded when Propel initializes.
    require_once 'classes/map/PmtPmtAbTestMapBuilder.php';
    Propel::registerMapBuilder('classes.map.PmtPmtAbTestMapBuilder');
}

