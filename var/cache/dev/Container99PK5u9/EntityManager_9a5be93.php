<?php

namespace Container99PK5u9;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4bd5f = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerbcdc3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties405e6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getConnection', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getMetadataFactory', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getExpressionBuilder', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'beginTransaction', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getCache', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getCache();
    }

    public function transactional($func)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'transactional', array('func' => $func), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->transactional($func);
    }

    public function commit()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'commit', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->commit();
    }

    public function rollback()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'rollback', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getClassMetadata', array('className' => $className), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'createQuery', array('dql' => $dql), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'createNamedQuery', array('name' => $name), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'createQueryBuilder', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'flush', array('entity' => $entity), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'clear', array('entityName' => $entityName), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->clear($entityName);
    }

    public function close()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'close', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->close();
    }

    public function persist($entity)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'persist', array('entity' => $entity), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'remove', array('entity' => $entity), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'refresh', array('entity' => $entity), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'detach', array('entity' => $entity), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'merge', array('entity' => $entity), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'contains', array('entity' => $entity), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getEventManager', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getConfiguration', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'isOpen', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getUnitOfWork', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getProxyFactory', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'initializeObject', array('obj' => $obj), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'getFilters', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'isFiltersStateClean', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'hasFilters', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return $this->valueHolder4bd5f->hasFilters();
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

        $instance->initializerbcdc3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4bd5f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4bd5f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4bd5f->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, '__get', ['name' => $name], $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        if (isset(self::$publicProperties405e6[$name])) {
            return $this->valueHolder4bd5f->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd5f;

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

        $targetObject = $this->valueHolder4bd5f;
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
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd5f;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4bd5f;
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
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, '__isset', array('name' => $name), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd5f;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4bd5f;
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
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, '__unset', array('name' => $name), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4bd5f;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4bd5f;
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
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, '__clone', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        $this->valueHolder4bd5f = clone $this->valueHolder4bd5f;
    }

    public function __sleep()
    {
        $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, '__sleep', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;

        return array('valueHolder4bd5f');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerbcdc3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerbcdc3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerbcdc3 && ($this->initializerbcdc3->__invoke($valueHolder4bd5f, $this, 'initializeProxy', array(), $this->initializerbcdc3) || 1) && $this->valueHolder4bd5f = $valueHolder4bd5f;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4bd5f;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4bd5f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
