<?php

/**
 * This class has been generated by dagger-php-sdk. DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dagger\Dagger;

/**
 * An argument accepted by a function.
 *
 * This is a specification for an argument at function definition time, not an
 * argument passed at function call time.
 */
class FunctionArg extends \Dagger\Client\AbstractDaggerObject implements \Dagger\Client\IdAble
{
    /**
     * A default value to use for this argument when not explicitly set by the caller, if any
     */
    public function defaultValue(): Json
    {
        $leafQueryBuilder = new \Dagger\Client\DaggerQueryBuilder('defaultValue');
        return new \Dagger\Dagger\Json((string)$this->queryLeaf($leafQueryBuilder, 'defaultValue'));
    }

    /**
     * A doc string for the argument, if any
     */
    public function description(): string
    {
        $leafQueryBuilder = new \Dagger\Client\DaggerQueryBuilder('description');
        return (string)$this->queryLeaf($leafQueryBuilder, 'description');
    }

    /**
     * The ID of the argument
     */
    public function id(): FunctionArgId
    {
        $leafQueryBuilder = new \Dagger\Client\DaggerQueryBuilder('id');
        return new \Dagger\Dagger\FunctionArgId((string)$this->queryLeaf($leafQueryBuilder, 'id'));
    }

    /**
     * The name of the argument
     */
    public function name(): string
    {
        $leafQueryBuilder = new \Dagger\Client\DaggerQueryBuilder('name');
        return (string)$this->queryLeaf($leafQueryBuilder, 'name');
    }

    /**
     * The type of the argument
     */
    public function typeDef(): TypeDef
    {
        $innerQueryBuilder = new \Dagger\Client\DaggerQueryBuilder('typeDef');
        return new \Dagger\Dagger\TypeDef($this->client, $this->queryBuilderChain->chain($innerQueryBuilder));
    }
}
