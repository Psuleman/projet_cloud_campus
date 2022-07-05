<?php

namespace ContainerUveO9XB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd078e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer012ff = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb6982 = [
        
    ];

    public function getConnection()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getConnection', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getMetadataFactory', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getExpressionBuilder', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'beginTransaction', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getCache', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'transactional', array('func' => $func), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'commit', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->commit();
    }

    public function rollback()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'rollback', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getClassMetadata', array('className' => $className), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'createQuery', array('dql' => $dql), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'createNamedQuery', array('name' => $name), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'createQueryBuilder', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'flush', array('entity' => $entity), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'clear', array('entityName' => $entityName), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->clear($entityName);
    }

    public function close()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'close', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->close();
    }

    public function persist($entity)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'persist', array('entity' => $entity), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'remove', array('entity' => $entity), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'refresh', array('entity' => $entity), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'detach', array('entity' => $entity), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'merge', array('entity' => $entity), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'contains', array('entity' => $entity), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getEventManager', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getConfiguration', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'isOpen', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getUnitOfWork', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getProxyFactory', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'initializeObject', array('obj' => $obj), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'getFilters', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'isFiltersStateClean', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'hasFilters', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return $this->valueHolderd078e->hasFilters();
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

        $instance->initializer012ff = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd078e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd078e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd078e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, '__get', ['name' => $name], $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        if (isset(self::$publicPropertiesb6982[$name])) {
            return $this->valueHolderd078e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd078e;

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

        $targetObject = $this->valueHolderd078e;
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
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd078e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd078e;
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
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, '__isset', array('name' => $name), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd078e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd078e;
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
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, '__unset', array('name' => $name), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd078e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd078e;
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
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, '__clone', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        $this->valueHolderd078e = clone $this->valueHolderd078e;
    }

    public function __sleep()
    {
        $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, '__sleep', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;

        return array('valueHolderd078e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer012ff = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer012ff;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer012ff && ($this->initializer012ff->__invoke($valueHolderd078e, $this, 'initializeProxy', array(), $this->initializer012ff) || 1) && $this->valueHolderd078e = $valueHolderd078e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd078e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd078e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
