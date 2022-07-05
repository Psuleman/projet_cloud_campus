<?php

namespace Container07UfnIp;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3759a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerad288 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties98b27 = [
        
    ];

    public function getConnection()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getConnection', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getMetadataFactory', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getExpressionBuilder', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'beginTransaction', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getCache', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'transactional', array('func' => $func), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'wrapInTransaction', array('func' => $func), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'commit', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->commit();
    }

    public function rollback()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'rollback', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getClassMetadata', array('className' => $className), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'createQuery', array('dql' => $dql), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'createNamedQuery', array('name' => $name), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'createQueryBuilder', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'flush', array('entity' => $entity), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'clear', array('entityName' => $entityName), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->clear($entityName);
    }

    public function close()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'close', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->close();
    }

    public function persist($entity)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'persist', array('entity' => $entity), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'remove', array('entity' => $entity), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'refresh', array('entity' => $entity), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'detach', array('entity' => $entity), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'merge', array('entity' => $entity), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'contains', array('entity' => $entity), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getEventManager', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getConfiguration', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'isOpen', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getUnitOfWork', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getProxyFactory', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'initializeObject', array('obj' => $obj), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'getFilters', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'isFiltersStateClean', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'hasFilters', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return $this->valueHolder3759a->hasFilters();
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

        $instance->initializerad288 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3759a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3759a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3759a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, '__get', ['name' => $name], $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        if (isset(self::$publicProperties98b27[$name])) {
            return $this->valueHolder3759a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3759a;

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

        $targetObject = $this->valueHolder3759a;
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
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3759a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3759a;
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
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, '__isset', array('name' => $name), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3759a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3759a;
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
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, '__unset', array('name' => $name), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3759a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3759a;
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
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, '__clone', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        $this->valueHolder3759a = clone $this->valueHolder3759a;
    }

    public function __sleep()
    {
        $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, '__sleep', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;

        return array('valueHolder3759a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerad288 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerad288;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerad288 && ($this->initializerad288->__invoke($valueHolder3759a, $this, 'initializeProxy', array(), $this->initializerad288) || 1) && $this->valueHolder3759a = $valueHolder3759a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3759a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3759a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
