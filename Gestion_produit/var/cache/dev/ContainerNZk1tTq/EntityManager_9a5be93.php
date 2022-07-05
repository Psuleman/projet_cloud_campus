<?php

namespace ContainerNZk1tTq;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder30206 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer50a14 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese8a99 = [
        
    ];

    public function getConnection()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getConnection', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getMetadataFactory', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getExpressionBuilder', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'beginTransaction', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getCache', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getCache();
    }

    public function transactional($func)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'transactional', array('func' => $func), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'wrapInTransaction', array('func' => $func), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'commit', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->commit();
    }

    public function rollback()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'rollback', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getClassMetadata', array('className' => $className), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'createQuery', array('dql' => $dql), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'createNamedQuery', array('name' => $name), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'createQueryBuilder', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'flush', array('entity' => $entity), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'clear', array('entityName' => $entityName), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->clear($entityName);
    }

    public function close()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'close', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->close();
    }

    public function persist($entity)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'persist', array('entity' => $entity), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'remove', array('entity' => $entity), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'refresh', array('entity' => $entity), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'detach', array('entity' => $entity), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'merge', array('entity' => $entity), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getRepository', array('entityName' => $entityName), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'contains', array('entity' => $entity), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getEventManager', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getConfiguration', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'isOpen', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getUnitOfWork', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getProxyFactory', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'initializeObject', array('obj' => $obj), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'getFilters', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'isFiltersStateClean', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'hasFilters', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return $this->valueHolder30206->hasFilters();
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

        $instance->initializer50a14 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder30206) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder30206 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder30206->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, '__get', ['name' => $name], $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        if (isset(self::$publicPropertiese8a99[$name])) {
            return $this->valueHolder30206->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30206;

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

        $targetObject = $this->valueHolder30206;
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
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30206;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder30206;
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
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, '__isset', array('name' => $name), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30206;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder30206;
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
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, '__unset', array('name' => $name), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder30206;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder30206;
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
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, '__clone', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        $this->valueHolder30206 = clone $this->valueHolder30206;
    }

    public function __sleep()
    {
        $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, '__sleep', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;

        return array('valueHolder30206');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer50a14 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer50a14;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer50a14 && ($this->initializer50a14->__invoke($valueHolder30206, $this, 'initializeProxy', array(), $this->initializer50a14) || 1) && $this->valueHolder30206 = $valueHolder30206;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder30206;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder30206;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
