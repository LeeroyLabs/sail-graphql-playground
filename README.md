# GraphQL Playground for SailCMS

This package provides a graphical UI for GraphQL to test during development. It uses the 
[graphql/graphql-playground](https://github.com/graphql/graphql-playground/blob/main/packages/graphql-playground-html/withAnimation.html)
library.

## Installing

```bash
php sail install:official leeroy/sail-graphql-playground
```

This will install the package using composer and then update your composer file to autoload the package.

If you wish to install it manually, you and perform the following

```bash
composer require leeroy/sail-graphql-playground
```

After that, you can add `Leeroy\\GraphQLPlayground` to the modules section of the sailcms property of your composer.json file. It should look something like this:

```json
"sailcms": {
  "containers": ["Spec"],
  "modules": [
    "Leeroy\\GraphQLPlayground"
  ],
  "search": {}
}
```

## Configuration

When installed, you need to add the following to your `.env` file.

```
GRAPHQL_PLAYGROUND=true
```

## Using

Open the `/graphql` url from your project's url. You are ready to go!