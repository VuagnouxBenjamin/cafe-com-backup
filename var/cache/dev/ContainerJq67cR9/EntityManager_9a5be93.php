<?php

namespace ContainerJq67cR9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc626e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer58991 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese5b58 = [
        
    ];

    public function getConnection()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getConnection', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getMetadataFactory', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getExpressionBuilder', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'beginTransaction', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getCache', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'transactional', array('func' => $func), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->transactional($func);
    }

    public function commit()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'commit', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->commit();
    }

    public function rollback()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'rollback', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getClassMetadata', array('className' => $className), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'createQuery', array('dql' => $dql), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'createNamedQuery', array('name' => $name), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'createQueryBuilder', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'flush', array('entity' => $entity), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'clear', array('entityName' => $entityName), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->clear($entityName);
    }

    public function close()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'close', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->close();
    }

    public function persist($entity)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'persist', array('entity' => $entity), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'remove', array('entity' => $entity), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'refresh', array('entity' => $entity), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'detach', array('entity' => $entity), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'merge', array('entity' => $entity), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'contains', array('entity' => $entity), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getEventManager', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getConfiguration', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'isOpen', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getUnitOfWork', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getProxyFactory', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'initializeObject', array('obj' => $obj), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'getFilters', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'isFiltersStateClean', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'hasFilters', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return $this->valueHolderc626e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer58991 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc626e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc626e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc626e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, '__get', ['name' => $name], $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        if (isset(self::$publicPropertiese5b58[$name])) {
            return $this->valueHolderc626e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc626e;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc626e;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc626e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc626e;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, '__isset', array('name' => $name), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc626e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc626e;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, '__unset', array('name' => $name), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc626e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc626e;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, '__clone', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        $this->valueHolderc626e = clone $this->valueHolderc626e;
    }

    public function __sleep()
    {
        $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, '__sleep', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;

        return array('valueHolderc626e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer58991 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer58991;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer58991 && ($this->initializer58991->__invoke($valueHolderc626e, $this, 'initializeProxy', array(), $this->initializer58991) || 1) && $this->valueHolderc626e = $valueHolderc626e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc626e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc626e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
