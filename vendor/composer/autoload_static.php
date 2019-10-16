<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit68000bc9c31718dac0f4c1508acc992d
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WPGraphQL\\' => 10,
        ),
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WPGraphQL\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
    );

    public static $classMap = array (
        'GraphQLRelay\\Connection\\ArrayConnection' => __DIR__ . '/..' . '/ivome/graphql-relay-php/src/Connection/ArrayConnection.php',
        'GraphQLRelay\\Connection\\Connection' => __DIR__ . '/..' . '/ivome/graphql-relay-php/src/Connection/Connection.php',
        'GraphQLRelay\\Mutation\\Mutation' => __DIR__ . '/..' . '/ivome/graphql-relay-php/src/Mutation/Mutation.php',
        'GraphQLRelay\\Node\\Node' => __DIR__ . '/..' . '/ivome/graphql-relay-php/src/Node/Node.php',
        'GraphQLRelay\\Node\\Plural' => __DIR__ . '/..' . '/ivome/graphql-relay-php/src/Node/Plural.php',
        'GraphQLRelay\\Relay' => __DIR__ . '/..' . '/ivome/graphql-relay-php/src/Relay.php',
        'GraphQL\\Deferred' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Deferred.php',
        'GraphQL\\Error\\ClientAware' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/ClientAware.php',
        'GraphQL\\Error\\Debug' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/Debug.php',
        'GraphQL\\Error\\Error' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/Error.php',
        'GraphQL\\Error\\FormattedError' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/FormattedError.php',
        'GraphQL\\Error\\InvariantViolation' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/InvariantViolation.php',
        'GraphQL\\Error\\SyntaxError' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/SyntaxError.php',
        'GraphQL\\Error\\UserError' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/UserError.php',
        'GraphQL\\Error\\Warning' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Error/Warning.php',
        'GraphQL\\Executor\\ExecutionContext' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/ExecutionContext.php',
        'GraphQL\\Executor\\ExecutionResult' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/ExecutionResult.php',
        'GraphQL\\Executor\\Executor' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/Executor.php',
        'GraphQL\\Executor\\Promise\\Adapter\\ReactPromiseAdapter' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/Promise/Adapter/ReactPromiseAdapter.php',
        'GraphQL\\Executor\\Promise\\Adapter\\SyncPromise' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/Promise/Adapter/SyncPromise.php',
        'GraphQL\\Executor\\Promise\\Adapter\\SyncPromiseAdapter' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/Promise/Adapter/SyncPromiseAdapter.php',
        'GraphQL\\Executor\\Promise\\Promise' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/Promise/Promise.php',
        'GraphQL\\Executor\\Promise\\PromiseAdapter' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/Promise/PromiseAdapter.php',
        'GraphQL\\Executor\\Values' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Executor/Values.php',
        'GraphQL\\GraphQL' => __DIR__ . '/..' . '/webonyx/graphql-php/src/GraphQL.php',
        'GraphQL\\Language\\AST\\ArgumentNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ArgumentNode.php',
        'GraphQL\\Language\\AST\\BooleanValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/BooleanValueNode.php',
        'GraphQL\\Language\\AST\\DefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/DefinitionNode.php',
        'GraphQL\\Language\\AST\\DirectiveDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/DirectiveDefinitionNode.php',
        'GraphQL\\Language\\AST\\DirectiveNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/DirectiveNode.php',
        'GraphQL\\Language\\AST\\DocumentNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/DocumentNode.php',
        'GraphQL\\Language\\AST\\EnumTypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/EnumTypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\EnumTypeExtensionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/EnumTypeExtensionNode.php',
        'GraphQL\\Language\\AST\\EnumValueDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/EnumValueDefinitionNode.php',
        'GraphQL\\Language\\AST\\EnumValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/EnumValueNode.php',
        'GraphQL\\Language\\AST\\ExecutableDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ExecutableDefinitionNode.php',
        'GraphQL\\Language\\AST\\FieldDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/FieldDefinitionNode.php',
        'GraphQL\\Language\\AST\\FieldNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/FieldNode.php',
        'GraphQL\\Language\\AST\\FloatValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/FloatValueNode.php',
        'GraphQL\\Language\\AST\\FragmentDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/FragmentDefinitionNode.php',
        'GraphQL\\Language\\AST\\FragmentSpreadNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/FragmentSpreadNode.php',
        'GraphQL\\Language\\AST\\HasSelectionSet' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/HasSelectionSet.php',
        'GraphQL\\Language\\AST\\InlineFragmentNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/InlineFragmentNode.php',
        'GraphQL\\Language\\AST\\InputObjectTypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/InputObjectTypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\InputObjectTypeExtensionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/InputObjectTypeExtensionNode.php',
        'GraphQL\\Language\\AST\\InputValueDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/InputValueDefinitionNode.php',
        'GraphQL\\Language\\AST\\IntValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/IntValueNode.php',
        'GraphQL\\Language\\AST\\InterfaceTypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/InterfaceTypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\InterfaceTypeExtensionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/InterfaceTypeExtensionNode.php',
        'GraphQL\\Language\\AST\\ListTypeNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ListTypeNode.php',
        'GraphQL\\Language\\AST\\ListValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ListValueNode.php',
        'GraphQL\\Language\\AST\\Location' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/Location.php',
        'GraphQL\\Language\\AST\\NameNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/NameNode.php',
        'GraphQL\\Language\\AST\\NamedTypeNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/NamedTypeNode.php',
        'GraphQL\\Language\\AST\\Node' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/Node.php',
        'GraphQL\\Language\\AST\\NodeKind' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/NodeKind.php',
        'GraphQL\\Language\\AST\\NodeList' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/NodeList.php',
        'GraphQL\\Language\\AST\\NonNullTypeNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/NonNullTypeNode.php',
        'GraphQL\\Language\\AST\\NullValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/NullValueNode.php',
        'GraphQL\\Language\\AST\\ObjectFieldNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ObjectFieldNode.php',
        'GraphQL\\Language\\AST\\ObjectTypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ObjectTypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\ObjectTypeExtensionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ObjectTypeExtensionNode.php',
        'GraphQL\\Language\\AST\\ObjectValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ObjectValueNode.php',
        'GraphQL\\Language\\AST\\OperationDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/OperationDefinitionNode.php',
        'GraphQL\\Language\\AST\\OperationTypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/OperationTypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\ScalarTypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ScalarTypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\ScalarTypeExtensionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ScalarTypeExtensionNode.php',
        'GraphQL\\Language\\AST\\SchemaDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/SchemaDefinitionNode.php',
        'GraphQL\\Language\\AST\\SelectionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/SelectionNode.php',
        'GraphQL\\Language\\AST\\SelectionSetNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/SelectionSetNode.php',
        'GraphQL\\Language\\AST\\StringValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/StringValueNode.php',
        'GraphQL\\Language\\AST\\TypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/TypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\TypeExtensionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/TypeExtensionNode.php',
        'GraphQL\\Language\\AST\\TypeNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/TypeNode.php',
        'GraphQL\\Language\\AST\\TypeSystemDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/TypeSystemDefinitionNode.php',
        'GraphQL\\Language\\AST\\UnionTypeDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/UnionTypeDefinitionNode.php',
        'GraphQL\\Language\\AST\\UnionTypeExtensionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/UnionTypeExtensionNode.php',
        'GraphQL\\Language\\AST\\ValueNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/ValueNode.php',
        'GraphQL\\Language\\AST\\VariableDefinitionNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/VariableDefinitionNode.php',
        'GraphQL\\Language\\AST\\VariableNode' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/AST/VariableNode.php',
        'GraphQL\\Language\\DirectiveLocation' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/DirectiveLocation.php',
        'GraphQL\\Language\\Lexer' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/Lexer.php',
        'GraphQL\\Language\\Parser' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/Parser.php',
        'GraphQL\\Language\\Printer' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/Printer.php',
        'GraphQL\\Language\\Source' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/Source.php',
        'GraphQL\\Language\\SourceLocation' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/SourceLocation.php',
        'GraphQL\\Language\\Token' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/Token.php',
        'GraphQL\\Language\\Visitor' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/Visitor.php',
        'GraphQL\\Language\\VisitorOperation' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Language/VisitorOperation.php',
        'GraphQL\\Schema' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Schema.php',
        'GraphQL\\Server\\Helper' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Server/Helper.php',
        'GraphQL\\Server\\OperationParams' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Server/OperationParams.php',
        'GraphQL\\Server\\RequestError' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Server/RequestError.php',
        'GraphQL\\Server\\ServerConfig' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Server/ServerConfig.php',
        'GraphQL\\Server\\StandardServer' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Server/StandardServer.php',
        'GraphQL\\Type\\Definition\\AbstractType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/AbstractType.php',
        'GraphQL\\Type\\Definition\\BooleanType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/BooleanType.php',
        'GraphQL\\Type\\Definition\\CompositeType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/CompositeType.php',
        'GraphQL\\Type\\Definition\\CustomScalarType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/CustomScalarType.php',
        'GraphQL\\Type\\Definition\\Directive' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/Directive.php',
        'GraphQL\\Type\\Definition\\EnumType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/EnumType.php',
        'GraphQL\\Type\\Definition\\EnumValueDefinition' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/EnumValueDefinition.php',
        'GraphQL\\Type\\Definition\\FieldArgument' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/FieldArgument.php',
        'GraphQL\\Type\\Definition\\FieldDefinition' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/FieldDefinition.php',
        'GraphQL\\Type\\Definition\\FloatType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/FloatType.php',
        'GraphQL\\Type\\Definition\\IDType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/IDType.php',
        'GraphQL\\Type\\Definition\\InputObjectField' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/InputObjectField.php',
        'GraphQL\\Type\\Definition\\InputObjectType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/InputObjectType.php',
        'GraphQL\\Type\\Definition\\InputType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/InputType.php',
        'GraphQL\\Type\\Definition\\IntType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/IntType.php',
        'GraphQL\\Type\\Definition\\InterfaceType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/InterfaceType.php',
        'GraphQL\\Type\\Definition\\LeafType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/LeafType.php',
        'GraphQL\\Type\\Definition\\ListOfType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/ListOfType.php',
        'GraphQL\\Type\\Definition\\NamedType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/NamedType.php',
        'GraphQL\\Type\\Definition\\NonNull' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/NonNull.php',
        'GraphQL\\Type\\Definition\\ObjectType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/ObjectType.php',
        'GraphQL\\Type\\Definition\\OutputType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/OutputType.php',
        'GraphQL\\Type\\Definition\\ResolveInfo' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/ResolveInfo.php',
        'GraphQL\\Type\\Definition\\ScalarType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/ScalarType.php',
        'GraphQL\\Type\\Definition\\StringType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/StringType.php',
        'GraphQL\\Type\\Definition\\Type' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/Type.php',
        'GraphQL\\Type\\Definition\\UnionType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/UnionType.php',
        'GraphQL\\Type\\Definition\\UnmodifiedType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/UnmodifiedType.php',
        'GraphQL\\Type\\Definition\\WrappingType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Definition/WrappingType.php',
        'GraphQL\\Type\\EagerResolution' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/EagerResolution.php',
        'GraphQL\\Type\\Introspection' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Introspection.php',
        'GraphQL\\Type\\LazyResolution' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/LazyResolution.php',
        'GraphQL\\Type\\Resolution' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Resolution.php',
        'GraphQL\\Type\\Schema' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Schema.php',
        'GraphQL\\Type\\SchemaConfig' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/SchemaConfig.php',
        'GraphQL\\Type\\SchemaValidationContext' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/SchemaValidationContext.php',
        'GraphQL\\Type\\TypeKind' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Type/Introspection.php',
        'GraphQL\\Utils\\AST' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/AST.php',
        'GraphQL\\Utils\\ASTDefinitionBuilder' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/ASTDefinitionBuilder.php',
        'GraphQL\\Utils\\BlockString' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/BlockString.php',
        'GraphQL\\Utils\\BuildSchema' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/BuildSchema.php',
        'GraphQL\\Utils\\FindBreakingChanges' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/FindBreakingChanges.php',
        'GraphQL\\Utils\\MixedStore' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/MixedStore.php',
        'GraphQL\\Utils\\PairSet' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/PairSet.php',
        'GraphQL\\Utils\\SchemaPrinter' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/SchemaPrinter.php',
        'GraphQL\\Utils\\TypeComparators' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/TypeComparators.php',
        'GraphQL\\Utils\\TypeInfo' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/TypeInfo.php',
        'GraphQL\\Utils\\Utils' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/Utils.php',
        'GraphQL\\Utils\\Value' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Utils/Value.php',
        'GraphQL\\Validator\\DocumentValidator' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/DocumentValidator.php',
        'GraphQL\\Validator\\Rules\\AbstractQuerySecurity' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/AbstractQuerySecurity.php',
        'GraphQL\\Validator\\Rules\\AbstractValidationRule' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/AbstractValidationRule.php',
        'GraphQL\\Validator\\Rules\\CustomValidationRule' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/CustomValidationRule.php',
        'GraphQL\\Validator\\Rules\\DisableIntrospection' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/DisableIntrospection.php',
        'GraphQL\\Validator\\Rules\\ExecutableDefinitions' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/ExecutableDefinitions.php',
        'GraphQL\\Validator\\Rules\\FieldsOnCorrectType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/FieldsOnCorrectType.php',
        'GraphQL\\Validator\\Rules\\FragmentsOnCompositeTypes' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/FragmentsOnCompositeTypes.php',
        'GraphQL\\Validator\\Rules\\KnownArgumentNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/KnownArgumentNames.php',
        'GraphQL\\Validator\\Rules\\KnownDirectives' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/KnownDirectives.php',
        'GraphQL\\Validator\\Rules\\KnownFragmentNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/KnownFragmentNames.php',
        'GraphQL\\Validator\\Rules\\KnownTypeNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/KnownTypeNames.php',
        'GraphQL\\Validator\\Rules\\LoneAnonymousOperation' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/LoneAnonymousOperation.php',
        'GraphQL\\Validator\\Rules\\NoFragmentCycles' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/NoFragmentCycles.php',
        'GraphQL\\Validator\\Rules\\NoUndefinedVariables' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/NoUndefinedVariables.php',
        'GraphQL\\Validator\\Rules\\NoUnusedFragments' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/NoUnusedFragments.php',
        'GraphQL\\Validator\\Rules\\NoUnusedVariables' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/NoUnusedVariables.php',
        'GraphQL\\Validator\\Rules\\OverlappingFieldsCanBeMerged' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/OverlappingFieldsCanBeMerged.php',
        'GraphQL\\Validator\\Rules\\PossibleFragmentSpreads' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/PossibleFragmentSpreads.php',
        'GraphQL\\Validator\\Rules\\ProvidedNonNullArguments' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/ProvidedNonNullArguments.php',
        'GraphQL\\Validator\\Rules\\QueryComplexity' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/QueryComplexity.php',
        'GraphQL\\Validator\\Rules\\QueryDepth' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/QueryDepth.php',
        'GraphQL\\Validator\\Rules\\ScalarLeafs' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/ScalarLeafs.php',
        'GraphQL\\Validator\\Rules\\UniqueArgumentNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/UniqueArgumentNames.php',
        'GraphQL\\Validator\\Rules\\UniqueDirectivesPerLocation' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/UniqueDirectivesPerLocation.php',
        'GraphQL\\Validator\\Rules\\UniqueFragmentNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/UniqueFragmentNames.php',
        'GraphQL\\Validator\\Rules\\UniqueInputFieldNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/UniqueInputFieldNames.php',
        'GraphQL\\Validator\\Rules\\UniqueOperationNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/UniqueOperationNames.php',
        'GraphQL\\Validator\\Rules\\UniqueVariableNames' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/UniqueVariableNames.php',
        'GraphQL\\Validator\\Rules\\ValuesOfCorrectType' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/ValuesOfCorrectType.php',
        'GraphQL\\Validator\\Rules\\VariablesAreInputTypes' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/VariablesAreInputTypes.php',
        'GraphQL\\Validator\\Rules\\VariablesDefaultValueAllowed' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/VariablesDefaultValueAllowed.php',
        'GraphQL\\Validator\\Rules\\VariablesInAllowedPosition' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/Rules/VariablesInAllowedPosition.php',
        'GraphQL\\Validator\\ValidationContext' => __DIR__ . '/..' . '/webonyx/graphql-php/src/Validator/ValidationContext.php',
        'WPGraphQL\\AppContext' => __DIR__ . '/../..' . '/src/AppContext.php',
        'WPGraphQL\\Connection\\Comments' => __DIR__ . '/../..' . '/src/Connection/Comments.php',
        'WPGraphQL\\Connection\\MenuItems' => __DIR__ . '/../..' . '/src/Connection/MenuItems.php',
        'WPGraphQL\\Connection\\Menus' => __DIR__ . '/../..' . '/src/Connection/Menus.php',
        'WPGraphQL\\Connection\\Plugins' => __DIR__ . '/../..' . '/src/Connection/Plugins.php',
        'WPGraphQL\\Connection\\PostObjects' => __DIR__ . '/../..' . '/src/Connection/PostObjects.php',
        'WPGraphQL\\Connection\\TermObjects' => __DIR__ . '/../..' . '/src/Connection/TermObjects.php',
        'WPGraphQL\\Connection\\Themes' => __DIR__ . '/../..' . '/src/Connection/Themes.php',
        'WPGraphQL\\Connection\\UserRoles' => __DIR__ . '/../..' . '/src/Connection/UserRoles.php',
        'WPGraphQL\\Connection\\Users' => __DIR__ . '/../..' . '/src/Connection/Users.php',
        'WPGraphQL\\Data\\CommentMutation' => __DIR__ . '/../..' . '/src/Data/CommentMutation.php',
        'WPGraphQL\\Data\\Config' => __DIR__ . '/../..' . '/src/Data/Config.php',
        'WPGraphQL\\Data\\Connection\\AbstractConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/AbstractConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\CommentConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/CommentConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\MenuConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/MenuConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\MenuItemConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/MenuItemConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\PluginConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/PluginConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\PostObjectConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/PostObjectConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\TermObjectConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/TermObjectConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\ThemeConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/ThemeConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\UserConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/UserConnectionResolver.php',
        'WPGraphQL\\Data\\Connection\\UserRoleConnectionResolver' => __DIR__ . '/../..' . '/src/Data/Connection/UserRoleConnectionResolver.php',
        'WPGraphQL\\Data\\Cursor\\CursorBuilder' => __DIR__ . '/../..' . '/src/Data/Cursor/CursorBuilder.php',
        'WPGraphQL\\Data\\Cursor\\PostObjectCursor' => __DIR__ . '/../..' . '/src/Data/Cursor/PostObjectCursor.php',
        'WPGraphQL\\Data\\Cursor\\UserCursor' => __DIR__ . '/../..' . '/src/Data/Cursor/UserCursor.php',
        'WPGraphQL\\Data\\DataSource' => __DIR__ . '/../..' . '/src/Data/DataSource.php',
        'WPGraphQL\\Data\\Loader\\AbstractDataLoader' => __DIR__ . '/../..' . '/src/Data/Loader/AbstractDataLoader.php',
        'WPGraphQL\\Data\\Loader\\CommentLoader' => __DIR__ . '/../..' . '/src/Data/Loader/CommentLoader.php',
        'WPGraphQL\\Data\\Loader\\MenuItemLoader' => __DIR__ . '/../..' . '/src/Data/Loader/MenuItemLoader.php',
        'WPGraphQL\\Data\\Loader\\PostObjectLoader' => __DIR__ . '/../..' . '/src/Data/Loader/PostObjectLoader.php',
        'WPGraphQL\\Data\\Loader\\TermObjectLoader' => __DIR__ . '/../..' . '/src/Data/Loader/TermObjectLoader.php',
        'WPGraphQL\\Data\\Loader\\UserLoader' => __DIR__ . '/../..' . '/src/Data/Loader/UserLoader.php',
        'WPGraphQL\\Data\\MediaItemMutation' => __DIR__ . '/../..' . '/src/Data/MediaItemMutation.php',
        'WPGraphQL\\Data\\PostObjectMutation' => __DIR__ . '/../..' . '/src/Data/PostObjectMutation.php',
        'WPGraphQL\\Data\\TermObjectMutation' => __DIR__ . '/../..' . '/src/Data/TermObjectMutation.php',
        'WPGraphQL\\Data\\UserMutation' => __DIR__ . '/../..' . '/src/Data/UserMutation.php',
        'WPGraphQL\\Model\\Avatar' => __DIR__ . '/../..' . '/src/Model/Avatar.php',
        'WPGraphQL\\Model\\Comment' => __DIR__ . '/../..' . '/src/Model/Comment.php',
        'WPGraphQL\\Model\\CommentAuthor' => __DIR__ . '/../..' . '/src/Model/CommentAuthor.php',
        'WPGraphQL\\Model\\Menu' => __DIR__ . '/../..' . '/src/Model/Menu.php',
        'WPGraphQL\\Model\\MenuItem' => __DIR__ . '/../..' . '/src/Model/MenuItem.php',
        'WPGraphQL\\Model\\Model' => __DIR__ . '/../..' . '/src/Model/Model.php',
        'WPGraphQL\\Model\\Plugin' => __DIR__ . '/../..' . '/src/Model/Plugin.php',
        'WPGraphQL\\Model\\Post' => __DIR__ . '/../..' . '/src/Model/Post.php',
        'WPGraphQL\\Model\\PostType' => __DIR__ . '/../..' . '/src/Model/PostType.php',
        'WPGraphQL\\Model\\Taxonomy' => __DIR__ . '/../..' . '/src/Model/Taxonomy.php',
        'WPGraphQL\\Model\\Term' => __DIR__ . '/../..' . '/src/Model/Term.php',
        'WPGraphQL\\Model\\Theme' => __DIR__ . '/../..' . '/src/Model/Theme.php',
        'WPGraphQL\\Model\\User' => __DIR__ . '/../..' . '/src/Model/User.php',
        'WPGraphQL\\Model\\UserRole' => __DIR__ . '/../..' . '/src/Model/UserRole.php',
        'WPGraphQL\\Mutation\\CommentCreate' => __DIR__ . '/../..' . '/src/Mutation/CommentCreate.php',
        'WPGraphQL\\Mutation\\CommentDelete' => __DIR__ . '/../..' . '/src/Mutation/CommentDelete.php',
        'WPGraphQL\\Mutation\\CommentRestore' => __DIR__ . '/../..' . '/src/Mutation/CommentRestore.php',
        'WPGraphQL\\Mutation\\CommentUpdate' => __DIR__ . '/../..' . '/src/Mutation/CommentUpdate.php',
        'WPGraphQL\\Mutation\\MediaItemCreate' => __DIR__ . '/../..' . '/src/Mutation/MediaItemCreate.php',
        'WPGraphQL\\Mutation\\MediaItemDelete' => __DIR__ . '/../..' . '/src/Mutation/MediaItemDelete.php',
        'WPGraphQL\\Mutation\\MediaItemUpdate' => __DIR__ . '/../..' . '/src/Mutation/MediaItemUpdate.php',
        'WPGraphQL\\Mutation\\PostObjectCreate' => __DIR__ . '/../..' . '/src/Mutation/PostObjectCreate.php',
        'WPGraphQL\\Mutation\\PostObjectDelete' => __DIR__ . '/../..' . '/src/Mutation/PostObjectDelete.php',
        'WPGraphQL\\Mutation\\PostObjectUpdate' => __DIR__ . '/../..' . '/src/Mutation/PostObjectUpdate.php',
        'WPGraphQL\\Mutation\\ResetUserPassword' => __DIR__ . '/../..' . '/src/Mutation/ResetUserPassword.php',
        'WPGraphQL\\Mutation\\SendPasswordResetEmail' => __DIR__ . '/../..' . '/src/Mutation/SendPasswordResetEmail.php',
        'WPGraphQL\\Mutation\\TermObjectCreate' => __DIR__ . '/../..' . '/src/Mutation/TermObjectCreate.php',
        'WPGraphQL\\Mutation\\TermObjectDelete' => __DIR__ . '/../..' . '/src/Mutation/TermObjectDelete.php',
        'WPGraphQL\\Mutation\\TermObjectUpdate' => __DIR__ . '/../..' . '/src/Mutation/TermObjectUpdate.php',
        'WPGraphQL\\Mutation\\UpdateSettings' => __DIR__ . '/../..' . '/src/Mutation/UpdateSettings.php',
        'WPGraphQL\\Mutation\\UserCreate' => __DIR__ . '/../..' . '/src/Mutation/UserCreate.php',
        'WPGraphQL\\Mutation\\UserDelete' => __DIR__ . '/../..' . '/src/Mutation/UserDelete.php',
        'WPGraphQL\\Mutation\\UserRegister' => __DIR__ . '/../..' . '/src/Mutation/UserRegister.php',
        'WPGraphQL\\Mutation\\UserUpdate' => __DIR__ . '/../..' . '/src/Mutation/UserUpdate.php',
        'WPGraphQL\\Request' => __DIR__ . '/../..' . '/src/Request.php',
        'WPGraphQL\\Router' => __DIR__ . '/../..' . '/src/Router.php',
        'WPGraphQL\\SchemaRegistry' => __DIR__ . '/../..' . '/src/SchemaRegistry.php',
        'WPGraphQL\\Server\\WPHelper' => __DIR__ . '/../..' . '/src/Server/WPHelper.php',
        'WPGraphQL\\TypeRegistry' => __DIR__ . '/../..' . '/src/TypeRegistry.php',
        'WPGraphQL\\Type\\WPEnumType' => __DIR__ . '/../..' . '/src/Type/WPEnumType.php',
        'WPGraphQL\\Type\\WPInputObjectType' => __DIR__ . '/../..' . '/src/Type/WPInputObjectType.php',
        'WPGraphQL\\Type\\WPObjectType' => __DIR__ . '/../..' . '/src/Type/WPObjectType.php',
        'WPGraphQL\\Type\\WPUnionType' => __DIR__ . '/../..' . '/src/Type/WPUnionType.php',
        'WPGraphQL\\Types' => __DIR__ . '/../..' . '/src/Types.php',
        'WPGraphQL\\Utils\\InstrumentSchema' => __DIR__ . '/../..' . '/src/Utils/InstrumentSchema.php',
        'WPGraphQL\\WPSchema' => __DIR__ . '/../..' . '/src/WPSchema.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit68000bc9c31718dac0f4c1508acc992d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit68000bc9c31718dac0f4c1508acc992d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit68000bc9c31718dac0f4c1508acc992d::$classMap;

        }, null, ClassLoader::class);
    }
}
