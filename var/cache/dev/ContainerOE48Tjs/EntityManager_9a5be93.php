<?php

namespace ContainerOE48Tjs;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder24ced = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer70023 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa99ce = [
        
    ];

    public function getConnection()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getConnection', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getMetadataFactory', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getExpressionBuilder', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'beginTransaction', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getCache', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getCache();
    }

    public function transactional($func)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'transactional', array('func' => $func), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->transactional($func);
    }

    public function commit()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'commit', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->commit();
    }

    public function rollback()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'rollback', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getClassMetadata', array('className' => $className), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'createQuery', array('dql' => $dql), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'createNamedQuery', array('name' => $name), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'createQueryBuilder', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'flush', array('entity' => $entity), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'clear', array('entityName' => $entityName), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->clear($entityName);
    }

    public function close()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'close', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->close();
    }

    public function persist($entity)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'persist', array('entity' => $entity), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'remove', array('entity' => $entity), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'refresh', array('entity' => $entity), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'detach', array('entity' => $entity), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'merge', array('entity' => $entity), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getRepository', array('entityName' => $entityName), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'contains', array('entity' => $entity), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getEventManager', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getConfiguration', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'isOpen', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getUnitOfWork', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getProxyFactory', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'initializeObject', array('obj' => $obj), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'getFilters', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'isFiltersStateClean', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'hasFilters', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return $this->valueHolder24ced->hasFilters();
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

        $instance->initializer70023 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder24ced) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder24ced = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder24ced->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, '__get', ['name' => $name], $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        if (isset(self::$publicPropertiesa99ce[$name])) {
            return $this->valueHolder24ced->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ced;

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

        $targetObject = $this->valueHolder24ced;
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
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ced;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder24ced;
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
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, '__isset', array('name' => $name), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ced;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder24ced;
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
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, '__unset', array('name' => $name), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder24ced;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder24ced;
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
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, '__clone', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        $this->valueHolder24ced = clone $this->valueHolder24ced;
    }

    public function __sleep()
    {
        $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, '__sleep', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;

        return array('valueHolder24ced');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer70023 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer70023;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer70023 && ($this->initializer70023->__invoke($valueHolder24ced, $this, 'initializeProxy', array(), $this->initializer70023) || 1) && $this->valueHolder24ced = $valueHolder24ced;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder24ced;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder24ced;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
