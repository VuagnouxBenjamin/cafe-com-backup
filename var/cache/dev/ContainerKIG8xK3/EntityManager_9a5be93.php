<?php

namespace ContainerKIG8xK3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0f019 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer99b64 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties608bb = [
        
    ];

    public function getConnection()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getConnection', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getMetadataFactory', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getExpressionBuilder', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'beginTransaction', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getCache', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getCache();
    }

    public function transactional($func)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'transactional', array('func' => $func), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->transactional($func);
    }

    public function commit()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'commit', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->commit();
    }

    public function rollback()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'rollback', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getClassMetadata', array('className' => $className), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'createQuery', array('dql' => $dql), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'createNamedQuery', array('name' => $name), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'createQueryBuilder', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'flush', array('entity' => $entity), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'clear', array('entityName' => $entityName), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->clear($entityName);
    }

    public function close()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'close', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->close();
    }

    public function persist($entity)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'persist', array('entity' => $entity), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'remove', array('entity' => $entity), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'refresh', array('entity' => $entity), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'detach', array('entity' => $entity), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'merge', array('entity' => $entity), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getRepository', array('entityName' => $entityName), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'contains', array('entity' => $entity), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getEventManager', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getConfiguration', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'isOpen', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getUnitOfWork', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getProxyFactory', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'initializeObject', array('obj' => $obj), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'getFilters', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'isFiltersStateClean', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'hasFilters', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return $this->valueHolder0f019->hasFilters();
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

        $instance->initializer99b64 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0f019) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0f019 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0f019->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, '__get', ['name' => $name], $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        if (isset(self::$publicProperties608bb[$name])) {
            return $this->valueHolder0f019->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f019;

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

        $targetObject = $this->valueHolder0f019;
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
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f019;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0f019;
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
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, '__isset', array('name' => $name), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f019;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0f019;
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
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, '__unset', array('name' => $name), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0f019;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0f019;
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
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, '__clone', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        $this->valueHolder0f019 = clone $this->valueHolder0f019;
    }

    public function __sleep()
    {
        $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, '__sleep', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;

        return array('valueHolder0f019');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer99b64 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer99b64;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer99b64 && ($this->initializer99b64->__invoke($valueHolder0f019, $this, 'initializeProxy', array(), $this->initializer99b64) || 1) && $this->valueHolder0f019 = $valueHolder0f019;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0f019;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0f019;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
