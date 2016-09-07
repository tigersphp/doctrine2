<?php

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping;
use Doctrine\DBAL\Types\Type;

/* @var $metadata ClassMetadata */
$fieldMetadata = new Mapping\FieldMetadata('id');

$fieldMetadata->setType(Type::getType('integer'));
$fieldMetadata->setColumnName('user_id');
$fieldMetadata->setPrimaryKey(true);

$metadata->addProperty($fieldMetadata);

$fieldMetadata = new Mapping\FieldMetadata('name');

$fieldMetadata->setType(Type::getType('string'));
$fieldMetadata->setLength(250);
$fieldMetadata->setColumnName('user_name');
$fieldMetadata->setNullable(true);
$fieldMetadata->setUnique(false);

$metadata->addProperty($fieldMetadata);

$metadata->mapManyToMany(array(
    'fieldName'      => 'groups',
    'targetEntity'   => 'DDC3579Group'
));

$metadata->setIdGeneratorType(ClassMetadata::GENERATOR_TYPE_AUTO);
