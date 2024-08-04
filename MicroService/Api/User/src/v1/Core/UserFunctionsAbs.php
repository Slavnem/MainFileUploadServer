<?php
// Slavnem @2024-07-06
namespace UserApi\v1\Core;

// USER ABSTRACT FUNCTIONS
abstract class UserFunctionsAbs {
    abstract protected function Fetch (
        ?array $argUserDatas
    ): ?array;

    abstract protected function Create (
        ?array $argUserDatas
    ): ?array;

    abstract protected function Update (
        ?array $argUserDatas,
        ?array $argNewUserDatas
    ): ?array;

    abstract protected function Delete (
        ?array $argUserDatas
    ): ?array;
}