<?php

namespace Container0Obx6H6;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5b834 = null;
    private $initializer96648 = null;
    private static $publicPropertiesab500 = [
        
    ];
    public function getConnection()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getConnection', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getMetadataFactory', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getExpressionBuilder', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'beginTransaction', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getCache', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getCache();
    }
    public function transactional($func)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'transactional', array('func' => $func), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'wrapInTransaction', array('func' => $func), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'commit', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->commit();
    }
    public function rollback()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'rollback', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getClassMetadata', array('className' => $className), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'createQuery', array('dql' => $dql), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'createNamedQuery', array('name' => $name), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'createQueryBuilder', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'flush', array('entity' => $entity), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'clear', array('entityName' => $entityName), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->clear($entityName);
    }
    public function close()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'close', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->close();
    }
    public function persist($entity)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'persist', array('entity' => $entity), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'remove', array('entity' => $entity), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'refresh', array('entity' => $entity), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'detach', array('entity' => $entity), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'merge', array('entity' => $entity), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getRepository', array('entityName' => $entityName), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'contains', array('entity' => $entity), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getEventManager', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getConfiguration', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'isOpen', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getUnitOfWork', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getProxyFactory', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'initializeObject', array('obj' => $obj), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'getFilters', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'isFiltersStateClean', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'hasFilters', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return $this->valueHolder5b834->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer96648 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5b834) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5b834 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5b834->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, '__get', ['name' => $name], $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        if (isset(self::$publicPropertiesab500[$name])) {
            return $this->valueHolder5b834->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b834;
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
        $targetObject = $this->valueHolder5b834;
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
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b834;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5b834;
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
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, '__isset', array('name' => $name), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b834;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5b834;
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
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, '__unset', array('name' => $name), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b834;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5b834;
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
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, '__clone', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        $this->valueHolder5b834 = clone $this->valueHolder5b834;
    }
    public function __sleep()
    {
        $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, '__sleep', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
        return array('valueHolder5b834');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer96648 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer96648;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer96648 && ($this->initializer96648->__invoke($valueHolder5b834, $this, 'initializeProxy', array(), $this->initializer96648) || 1) && $this->valueHolder5b834 = $valueHolder5b834;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5b834;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5b834;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
